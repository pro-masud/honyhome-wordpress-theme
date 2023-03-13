<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package honeyHome
 */
	
	get_header();

?>

<?php while( have_posts()) : the_post() ?>

    <!-- /main site-content-->
    <main class="site-content">
      <!-- =========================
        single blog section
        ========================== -->
      <section id="blog" class="home-section text-center">
        <div class="heading-blog home-section text-centerz">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="section-heading-right">
                  <!-- <h2><strong><?php echo the_title(); ?></strong></h2> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="blog_container blog_container_deatils_leftbar" id="blog-post">
          <div class="container">
            <div class="row">


              <?php if( get_post_meta( get_the_id(),'pwc', true) == '1') : ?>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-content">
                  <?php the_content(); ?>
              </div>

              <?php elseif(get_post_meta( get_the_id(),'pwc', true) == '2') : ?>
               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 blog_content_left blog_sidebar">
                   <?php get_sidebar(); ?>
                </div>
             <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-content">
                   <?php the_content(); ?>
              </div>

              <?php elseif(get_post_meta( get_the_id(),'pwc',true) == '3') : ?>

              
                </div>
             <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 blog-content">
                   <?php the_content(); ?>
              </div>

              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 blog_content_left blog_sidebar">
                <?php get_sidebar(); ?>


                <?php endif; ?>



              
          </div>
        </div>
      </section>
      <!-- End blog section -->


    <?php endwhile; ?>



 <?php get_footer(); ?>