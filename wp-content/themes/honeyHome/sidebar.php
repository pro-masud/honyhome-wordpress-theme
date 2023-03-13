<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package honeyHome
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>



                <form action="#">
                  <div class="search_item_holder">
                    <input type="text" placeholder="search">
                    <button class="p-color-bg"><i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                  </div>
                </form>
                <div class="category_list">
                  <h4>Categories</h4>

                  <?php 

                    $get_post_cat   = get_terms('category');

                  
                  foreach( $get_post_cat as $honeycat ) :

                   ?>
                
                  <ul>
                    <li><a href="#" class="tran3s"><?php echo  $honeycat -> name ;?></a></li>
                  </ul>

                <?php  endforeach; ?>

                </div>
                <div class="recent_blog">
                  <h4>Recent blog</h4>



                  <?php 
                    $recen_blgo_side  = new WP_Query([
                      'post_type'       => 'post',
                      'post_per_page'  => 3


                    ]);

                  while( $recen_blgo_side ->  have_posts()) : $recen_blgo_side ->  the_post() ?>
                  <div class="recent_blog_single_item clear-fix">
                    <div class="img-content float-left sidebar_images">
                      <?php echo the_post_thumbnail(); ?>
                    </div>
                    <div class="text float-left">
                      <a href="<?php echo the_permalink(); ?>"><?php echo wp_trim_words( get_the_content(),'7', null); ?></a><br>
                      <span><?php echo the_time('D M Y'); ?></span>
                    </div>
                  </div>
                <?php endwhile; ?>



                </div>
                <!-- end recent_blog -->



             
                <div class="tags_widget">
                  <h4>Tags</h4>

               

                  <ul>
                    <?php  

                      $post_tags  = get_terms('post_tag');


                      foreach( $post_tags as $tags_honey) : 

                     ?>
                    <li><a href="#" class="hvr-bounce-to-right-two"><?php echo $tags_honey -> name; ?></a></li>

                    <?php endforeach; ?>
                  </ul>
                </div>
                <!-- End tags_widget -->
              </div>
              <!-- End blog_sidebar right -->