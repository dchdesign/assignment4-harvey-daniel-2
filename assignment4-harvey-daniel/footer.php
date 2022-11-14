<footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <?php 
                        if(has_nav_menu('footer-left')){ ?>
                            <nav class="footer-menu">
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location'  => 'footer-left'
                                    ));
                                ?>
                            </nav>
                        <?php }else{
                            echo "<p>select a menu through the dashboard</p>";
                        } ?>

                </div>

                <div class="col-md-4">
                     <?php 
                        if(has_nav_menu('footer-middle')){ ?>
                            <nav class="footer-menu">
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location'  => 'footer-middle'
                                    ));
                                ?>
                            </nav>
                        <?php }else{
                            echo "<p>select a menu through the dashboard</p>";
                        } ?>
                </div>

                <div class="col-md-4">
                     <?php 
                        if(has_nav_menu('footer-right')){ ?>
                            <nav class="footer-menu">
                                <?php 
                                    wp_nav_menu(array(
                                        'theme_location'  => 'footer-right'
                                    ));
                                ?>
                            </nav>
                        <?php }else{
                            echo "<p>select a menu through the dashboard</p>";
                        } ?>
                </div>

                
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>
</html>