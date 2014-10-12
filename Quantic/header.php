<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
<!--     <link rel="stylesheet" href="//cdn.staticfile.org/normalize/2.1.3/normalize.min.css">
 -->
    <!-- Bootstrap core CSS -->
    <link href="//cdn.staticfile.org/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Pace request loading progress script and styles -->
    <!--[if !IE]><!-->
    <link rel="stylesheet" href="//cdn.staticfile.org/pace/0.5.7/themes/blue/pace-theme-corner-indicator.css">
    <script type="text/javascript" src="//cdn.staticfile.org/pace/0.5.7/pace.min.js"></script>
    <!--<![endif]-->

    <!--[if lt IE 9]>
    <script src="//cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="//cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->


    <!-- Custom styles for this template -->
    <link href="<?php $this->options->themeUrl('blog.css'); ?>" rel="stylesheet">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

<!-- Navigation bar start -->
<div class="blog-masthead">
    <div class="container">
        <nav class="blog-nav">
            <a class="blog-nav-item <?php if($this->is('index')): ?>active<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
      
            <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
            <?php while($pages->next()): ?>
            <a class="blog-nav-item <?php if($this->is('page', $pages->slug)): ?>active<?php endif; ?>" href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
            <?php endwhile; ?>
      
          <a href="javascript:void(0)" class="blog-nav-item pull-right" id="top" data-toggle="tooltip" data-placement="bottom" title="返回顶部">
                <i class="glyphicon glyphicon-chevron-up"></i>
          </a>
        </nav>
    </div>
</div>
<!-- Navigation bar end -->

<div class="container">

    <div class="blog-header">
        <h1 class="blog-title"><?php $this->options->title() ?></h1>
        <p class="lead blog-description"><?php $this->options->description() ?></p>
    </div>

    <div class="row">
    
    
