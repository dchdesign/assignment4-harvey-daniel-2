<?php get_header(); ?>
    <div class="row">
        <div class="container">
            <main class="col-md-12">
                <?php
                    if(have_posts()){
                        while(have_posts()){
                            the_post(); ?>

                            <div class="single-post">
                                <div class="featured-image">
                                    <?php the_post_thumbnail('medium');?>
                                    <p><?php echo 'post by:' . get_the_author() . '| Published on:' . get_the_date(); ?></p>
                                    
                                </div>

                                <div class="text-container">
                                    <h2><?php the_title(); ?></a></h2>
                                    <p class="body-content"><?php the_content(); ?></p>
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