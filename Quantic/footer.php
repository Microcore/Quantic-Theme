<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div><!-- end .row -->
</div><!-- end .container -->

<!-- Footer start -->
<div class="blog-footer" id="footer" role="contentinfo">
  <p>
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by <a href="http://www.typecho.org">Typecho</a>.'); ?>
  </p>
</div>
<!-- Footer end -->

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdn.staticfile.org/jquery/2.1.0/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.staticfile.org/jquery.lazyload/1.9.1/jquery.lazyload.min.js" type="text/javascript"></script>
    <script src="//cdn.staticfile.org/twitter-bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//cdn.staticfile.org/jquery.qrcode/1.0/jquery.qrcode.min.js" type="text/javascript"></script>
    <script src="//nooks.qiniudn.com/blog/boot.js" type="text/javascript"></script>
<?php $this->footer(); ?>
  </body>
</html>
