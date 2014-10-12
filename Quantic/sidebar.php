<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <form method="post" action="./" role="search" class="sidebar-module sidebar-module-inset">
        <h4><?php _e('搜索'); ?></h4>
        <div class="input-group">
            <input type="text" name="keyword" class="form-control" placeholder="<?php _e('输入关键字搜索'); ?>" required>
            <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <i class="glyphicon glyphicon-search"></i>
                </button>
            </span>
        </div>
    </form>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentPosts', $this->options->sidebarBlock)): ?>
    <div class="sidebar-module">
        <h4><?php _e('最新文章'); ?></h4>
        <ol class="list-unstyled">
            <?php $this->widget('Widget_Contents_Post_Recent')
            ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ol>
    </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowRecentComments', $this->options->sidebarBlock)): ?>
    <div class="sidebar-module">
        <h4><?php _e('最近回复'); ?></h4>
        <ul class="list-unstyled">
        <?php $this->widget('Widget_Comments_Recent')->to($comments); ?>
        <?php while($comments->next()): ?>
            <li>
                <a href="<?php $comments->permalink(); ?>"><?php $comments->author(false); ?></a>: <?php $comments->excerpt(35, '...'); ?>
            </li>
        <?php endwhile; ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowCategory', $this->options->sidebarBlock)): ?>
    <div class="sidebar-module">
        <h4><?php _e('分类'); ?></h4>
        <?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=widget-list'); ?>
    </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowArchive', $this->options->sidebarBlock)): ?>
    <div class="sidebar-module">
        <h4><?php _e('归档'); ?></h4>
        <ul class="list-unstyled">
            <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=F Y')
            ->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </div>
    <?php endif; ?>

    <?php if (!empty($this->options->sidebarBlock) && in_array('ShowOther', $this->options->sidebarBlock)): ?>
    <div class="sidebar-module">
        <h4><?php _e('其它'); ?></h4>
        <ul class="list-unstyled">
            <?php if($this->user->hasLogin()): ?>
                <li class="last"><a href="<?php $this->options->adminUrl(); ?>"><?php _e('进入后台'); ?> (<?php $this->user->screenName(); ?>)</a></li>
                <li><a href="<?php $this->options->logoutUrl(); ?>"><?php _e('退出'); ?></a></li>
            <?php else: ?>
                <li class="last"><a href="<?php $this->options->adminUrl('login.php'); ?>"><?php _e('登录'); ?></a></li>
            <?php endif; ?>
            <li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('文章 RSS'); ?></a></li>
            <li><a href="<?php $this->options->commentsFeedUrl(); ?>"><?php _e('评论 RSS'); ?></a></li>
            <li><a href="http://www.typecho.org">Typecho</a></li>
        </ul>
    </div>
    <?php endif; ?>

</div><!-- end #sidebar -->
