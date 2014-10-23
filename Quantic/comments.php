<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- Comments start -->
<div class="list-group post-comments" id="comments">
    <?php $this->comments()->to($comments); ?>
    <?php if ($comments->have()): ?>
    
    <?php while($comments->next()): ?>
  <div class="list-group-item comment">
    <a class="comment-avatar pull-left" rel="nofollow" href="<?php $comments->url(); ?>">
      <?php $comments->gravatar(); ?>
    </a>
    <div class="content">
      <i class="glyphicon glyphicon-user"></i>
      <a class="author" href="<?php $comments->url(); ?>"><?php $comments->author(false); ?></a>
      <span class="pull-right">
      <?php $comments->reply('回复TA'); ?>
      </span>
      <div class="metadata">
        <div class="date">
          <i class="glyphicon glyphicon-time"></i>
          <?php $comments->date(); ?>
        </div>
      </div>
      <div class="text">
        <?php $comments->text(); ?>
      </div>
    </div>
  </div>
    <?php endwhile; ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>

<div class="panel panel-default respond" id="<?php $this->respondId(); ?>">
    <div class="cancel-comment-reply">
    <?php $comments->cancelReply(); ?>
    </div>
<form class="form-horizontal" method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form" accept-charset="utf-8">
    <?php if($this->user->hasLogin()): ?>
    <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
    <?php else: ?>
  <!-- Name -->
  <div class="form-group">
    <label for="inputName" class="col-sm-2 control-label required"><?php _e('称呼'); ?></label>
    <div class="col-sm-10">
      <input value="<?php $this->remember('author'); ?>" class="form-control" id="inputName" type="text" name="author" placeholder="输入昵称（必需）" required>
    </div>
  </div>
  <!-- Email -->
  <div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label <?php if ($this->options->commentsRequireMail): ?>required<?php endif; ?>"><?php _e('Email'); ?></label>
    <div class="col-sm-10">
      <input class="form-control" id="inputEmail" type="email" name="mail" placeholder="输入Email（必需）"  value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>>
    </div>
  </div>
  <!-- URL -->
  <div class="form-group">
    <label for="inputUrl" class="col-sm-2 control-label <?php if ($this->options->commentsRequireURL): ?>required<?php endif; ?>"><?php _e('网站'); ?></label>
    <div class="col-sm-10">
      <input class="form-control" id="inputUrl" type="text" name="url" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?>>
    </div>
  </div>
    <?php endif; ?>
  <!-- Content -->
  <div class="form-group">
    <label for="inputContent" class="col-sm-2 control-label required"><?php _e('内容'); ?></label>
    <div class="col-sm-10">
      <textarea class="form-control" id="inputContent" type="text" name="text" placeholder="输入评论内容（必需）" required><?php $this->remember('text'); ?></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2" id="msg"></div>
  </div>
  <!-- Submit button -->
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default"><?php _e('提交评论'); ?></button>
    </div>
  </div>
</form>
</div>    
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>

</div>

