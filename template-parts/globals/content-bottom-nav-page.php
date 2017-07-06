
    <nav class="navbar navbar-default" id="bottom-navigation">
        <div class="container">
            <div class="col-sm-3 col-xs-12 social-links">
                <div id="schema">
                    <?php get_template_part( 'template-parts/globals/content', 'schema' );?>
                </div>
                <div id="license">
                    <ul class="list-unstyled">
                        <li class="l_info">USDOT: 2418048</li>
                        <li class="l_info">ICC MC: 948102</li>
                        <li class="l_info">TXDMV: 006739586c</li>
                    </ul>
                </div>
            </div>
            <div id="navbar" class="col-sm-6 col-xs-12 footer-nav">
                <?php wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_id' => 'footer-menu',
                        'menu_class' => 'nav navbar-nav')
                ); ?>
            </div><!--/.nav-collapse -->
            <div class="col-md-3 col-xs-12" id="footer-widget-4">
                <?php if(is_active_sidebar('footer-4')){
                    dynamic_sidebar('footer-4');
                }
                ?>
            </div>
        </div>
    </nav>
