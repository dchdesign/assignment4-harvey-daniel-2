<?php get_header(); ?>
    <div class="row">
        <div class="body-container">
            <main class="col-md-12">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post(); ?>

                            <div class="individual-post">
                                <div class="featured-image">
                                    <?php the_post_thumbnail('thumbnail'); ?>
                                </div>

                                <div class="text-container">
                                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                    <p class="excerpt"><?php echo get_the_excerpt(); ?></p>
                                </div>
                            </div>
                            
                        <?php
                        
                        }

                        
                       
                    }   
                ?>
            </main>
        </div>

    </div>
    
<?php get_footer(); ?>