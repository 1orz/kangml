    <hr>
    <footer id="footer" role="contentinfo">
        <div class="container">
            <div class="row row-bottom-padded-sm">
                <div class="col-md-12">
                    <p class="copyright text-center">&copy; 2017 <a href="/web/"><?php echo $webtitle ?></a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="row hide">
                <div class="col-md-12 text-center">
                    <ul class="social social-circle">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



    
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>

    <!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
    <script src="js/jquery.style.switcher.js"></script>
    <script>
    $(function(){
        $('#colour-variations ul').styleSwitcher({
            defaultThemeId: 'theme-switch',
            hasPreview: false,
            cookie: {
                expires: 30,
                isManagingLoad: true
            }
        }); 
        $('.option-toggle').click(function() {
            $('#colour-variations').toggleClass('sleep');
        });
    });
    </script>
    <!-- End demo purposes only -->

    <!-- Main JS (Do not remove) -->
    <script src="js/main.js"></script>

    <!-- Add fancyBox main JS and CSS files -->  
    <script src="js/fancybox/jquery.fancybox.js?v=2.1.4" type="text/javascript"></script>  
    <link href="js/fancybox/jquery.fancybox.css?v=2.1.4" media="screen" rel="stylesheet" type="text/css" />  
    <!-- fancybox_app -->  
    <script src="js/fancybox/fancybox_app.js" type="text/javascript"></script>  
    <!-- Add mousewheel plugin (this is optional) -->  
    <script src="js/fancybox/jquery.mousewheel-3.0.6.pack.js" type="text/javascript"></script>  