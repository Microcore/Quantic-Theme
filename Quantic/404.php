<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="col-sm-12 blog-main">
    <p class="bg-info">404 - <?php _e('页面没找到'); ?></p>
    <div class="blog-post">
        <p><?php _e('你想查看的页面已被转移或删除了, 要不要搜索看看: '); ?></p>
        <form method="post">
            <div class="input-group">
                <input type="text" name="s" class="form-control" placeholder="输入关键字搜索" required autofocus>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </span>
            </div>
        </form>
    </div><!-- /.blog-post -->

</div><!-- /.blog-main -->
<?php $this->need('footer.php'); ?>
