<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div><!-- end .row -->
</div><!-- end .container -->

  <!-- Post QR code model -->
  <div class="modal fade" id="post-qrcode-modal" tabindex="-1" role="dialog" aria-labelledby="post-qrcode-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="post-qrcode-label">本页的二维码</h4>
        </div>
        <div class="modal-body" id="post-qrcode">
        </div>
        <div class="modal-footer">
        </div>
      </div>
    </div>
  </div><!-- PostQR code model -->

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
    <script type="text/javascript">
        /**
         * Boot script for Blog app.
         * @require jQuery (2.x)
         * @author Joker Qyou <Joker.Qyou@gmail.com>
         * @date 2014.3.24
         */

        /** Wrapper start **/
        !(function(){

          if(window.location != window.top.location){
            window.top.location = window.location;
          }

          /** Trigger tooltips **/
          $('[data-toggle="tooltip"]').tooltip();

          /** Back to top functions **/
          if($('#top')){
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    $('#top').fadeIn();
                } else {
                    $('#top').fadeOut();
                }
            });

            $('#top').click(function(){
              $("html, body").animate({scrollTop: 0}, 600);
            });
          }

          /** QR code generating for post page **/
          if($('#post-qrcode-gen') && $('#post-qrcode')){
            $('#post-qrcode').qrcode({
              width: 200, 
              height: 200, 
              text: window.location.href
            });
          }

        /** Wrapper end **/
        })();

    </script>
  <?php $this->footer(); ?>
  </body>
</html>

