
    <nav class="navbar navbar-default" id="bottom-navigation">
        <div class="container">
            <div class="col-sm-3 col-xs-12 social-links">
                <ul class="nav navbar-nav">
                    <li><a href="<?php the_field('company_fb','options');?>" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="<?php the_field('company_twitter','options');?>" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i> </a></li>
                    <li><a href="<?php the_field('company_gmb','options');?>" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i> </a></li>
                    <li><a href="<?php the_field('company_yelp','options');?>" target="_blank" rel="nofollow"><i class="fa fa-yelp"></i> </a></li>
                </ul>
            </div>
            <div id="navbar" class="col-sm-9 col-xs-12 footer-nav">
                <?php wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_id' => 'footer-menu',
                        'menu_class' => 'nav navbar-nav')
                ); ?>
            </div><!--/.nav-collapse -->
        </div>
    </nav>
