<?php
/**
 * Default theme of Quantic blogging system, based on Bootstrap. 
 * 
 * @package Quantic Theme
 * @author Micro Core Theme
 * @version 0.7
 * @link https://github.com/Microcore/Quantic-Theme
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<div class="col-sm-8 blog-main">

          
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

        <?php ?>

        <div itemprop="articleBody">
            <?php $this->content('- 阅读全文 -'); ?>
        </div>

    </div><!-- /.blog-post -->
    <?php endwhile; ?>
    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div>

<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
