<?php
/*===============================
  add stylesheets and javascripts files
=====================================*/

function custom_theme_scripts(){
  //boostrap CSS
  wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

  //main CSS
  wp_enqueue_style('main-styles', get_stylesheet_uri());
  
  wp_enqueue_script('jquery');

  //Javascript Files
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js' );
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'custom_theme_scripts');

/*===============================
  featured images
=====================================*/
add_theme_support('post-thumbnails');

/*===============================
  custom header image
=====================================*/

$custom_image_header = array(
    'width'   => 200,
    'height'  => 200,
    'uploads' => true
  );
  
  add_theme_support('custom-header', $custom_image_header);

  /*===============================
  post data information
=====================================*/
function post_data(){
    $archive_year   = get_the_time('Y');
    $archive_month  = get_the_time('m');
    $archive_day    = get_the_time('d');
  ?>
    <p>Written by: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a> | Published on: <a href="<?php echo get_day_link($archive_year,$archive_month, $archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>
  <?php  
  }

  /*===============================
  add menus to our theme
=====================================*/

function register_my_menus(){
    register_nav_menus(array(
      'main-menu'     =>  __('Main Menu'),
      'footer-left'   =>  __('Left Footer Menu'),
      'footer-middle' =>  __('Middle Footer Menu'),
      'footer-right'  =>  __('Right Footer Menu')
    )); 
  }

  
  add_action('init','register_my_menus');
  
  /*===============================
  pagination 
=====================================*/
function pagePagination(){
    global $wp_query;
  
    $big = 999999999; // need an unlikely integer
    $translated = __( 'Page', 'mytextdomain' ); // Supply translatable string
  
    echo paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
    ) );
  }
  
  ?>