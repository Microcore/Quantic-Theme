<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="col-sm-8 blog-main">
    <h3 class="archive-title"><?php $this->archiveTitle(array(
        'category'  =>  _t('分类 %s 下的文章'),
        'search'    =>  _t('包含关键字 %s 的文章'),
        'tag'       =>  _t('标签 %s 下的文章'),
        'author'    =>  _t('%s 发布的文章')
    ), '', ''); ?></h3>
    <?php if ($this->have()): ?>
    <?php while($this->next()): ?>
    <div class="blog-post" itemscope itemtype="http://schema.org/BlogPosting">
        <a itemtype="url" href="<?php $this->permalink() ?>">
            <h2 class="blog-post-title" itemprop="name headline"><?php $this->title() ?></h2>
        </a>
        <p class="blog-post-meta">
            <i class="glyphicon glyphicon-user"></i>
            <a itemprop="name author" href="<?php $this->author->permalink(); ?>" rel="author" itemscope itemtype="http://schema.org/Person"><?php $this->author(); ?></a>
            <i class="glyphicon glyphicon-time"></i>
            <span datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></span>
            <i class="glyphicon glyphicon-folder-open"></i>
            <span><?php $this->category(','); ?></span>
            <i class="glyphicon glyphicon-comment"></i>
            <span itemprop="interactionCount">
                <a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a>
            </span>
        </p>
        <div itemprop="articleBody">
            <?php $this->content('- 阅读全文 -'); ?>
        </div>
    </div><!-- /.blog-post -->
    <?php endwhile; ?>
    <?php else: ?>
    <p class="bg-danger">
        <?php _e('没有找到内容'); ?>
    </p>
    <?php endif; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- /.blog-main -->

	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
