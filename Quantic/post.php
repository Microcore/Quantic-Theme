<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="col-sm-8 blog-main">

    <div class="blog-post" itemscope itemtype="http://schema.org/BlogPosting">
        <h2 class="blog-post-title" itemprop="name headline"><?php $this->title() ?></h2>
        <p class="blog-post-meta">
            <i class="glyphicon glyphicon-user"></i>
            <a itemprop="author name" href="<?php $this->author->permalink(); ?>" rel="author" itemscope itemtype="http://schema.org/Person"><?php $this->author(); ?></a>
            <i class="glyphicon glyphicon-time"></i>
            <span datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></span>
            <button id="post-qrcode-gen" type="button" class="btn btn-default pull-right" data-toggle="modal" data-target="#post-qrcode-modal" title="生成此页的二维码">
                <i class="glyphicon glyphicon-qrcode"></i>
            </button>
        </p>
        <div class="post-content" itemprop="articleBody">
            <?php $this->content(); ?>
        </div>

    </div>
    <div class="well well-sm blog-post-tags"><!-- Tags -->
        <?php $this->tags(', ', true, 'none'); ?>
        <a href="/blog/tag/默认">
            <span class="post-tag label label-primary">
                <i class="glyphicon glyphicon-tag"></i>
                默认
            </span>
        </a>
          
    </div>

    <?php $this->need('comments.php'); ?>

    <ul class="post-near">
        <li>上一篇: <?php $this->thePrev('%s','没有了'); ?></li>
        <li>下一篇: <?php $this->theNext('%s','没有了'); ?></li>
    </ul>
</div><!-- end #main-->

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
