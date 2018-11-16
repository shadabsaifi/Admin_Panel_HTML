<div class="layout-footer">
    <div class="layout-footer-body">
        <small class="copyright">2018 &copy; WOTB Pvt. Ltd.</small>
    </div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/iEdit.js"></script>
    <script src="js/profile.min.js"></script>
     <script src="js/demo.min.js"></script>
   
    <script type="text/javascript">
    $(window).load(function(){

      // For Driver Page
      if ( $('.profilePage').length ) {
        $('.sidenav-item').removeClass("active");
        $('.profilePageNav').addClass("active");
      }
      if ( $('.dashboardPage').length ) {
        $('.sidenav-item').removeClass("active");
        $('.dashboardPageNav').addClass("active");
      }
      if ( $('.sellerListPage').length ) {
        $('.sidenav-item').removeClass("active");
        $('.accNav-a').addClass("active");
        $('.accountNav').addClass("open");
        $('.accountNav ul').css("display","block");
      }
      
      
    });
            $(window).scroll(function (){
                var window_top = $(window).scrollTop();
                var div_top = $('.tabs-new').position().top;
                console.log(window_top);
                console.log(div_top);
                if (window_top > div_top) {
                    $('.tabs-new').addClass('stick');
                    $('.tabs-new').parents('.layout-content-body').removeClass('layout-content-body').addClass('layout-content-body-dummy');
                } else {
                    $('.tabs-new').parents('.layout-content-body').removeClass('layout-content-body-dummy').addClass('layout-content-body')
                }
                if ( window_top < 74 ) {
                  $('.tabs-new').removeClass('stick');
                }
            });

    </script>
  </body>
</html>