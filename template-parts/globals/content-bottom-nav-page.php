
    <nav class="navbar navbar-default" id="bottom-navigation">
        <div class="container">
            <div class="col-md-3 social-links">
                <ul class="nav navbar-nav">
                    <li><a href="#"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="#about"><i class="fa fa-google-plus"></i> </a></li>
                    <li><a href="#contact"><i class="fa fa-yelp"></i> </a></li>
                </ul>
            </div>
            <div id="navbar" class="col-md-6 footer-nav">
                <?php wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_id' => 'footer-menu',
                        'menu_class' => 'nav navbar-nav')
                ); ?>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
