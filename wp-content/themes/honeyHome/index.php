<?php get_header(); ?>
    <!--End header-->
    <!-- /main site-content-->
    <main class="site-content">
      <!-- =========================
        blog section
        ========================== -->
      <section id="blog" class="home-section text-center">
        <div class="heading-blog home-section text-center">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2">
                <div class="section-heading-right">
                  <h2><strong>Blog</strong></h2>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="block-blog p-t-60 p-b-60">
          <div class="container">

<!-- //pull-right -->
			
			<?php 

			$slidecun 		= 1;

			while( have_posts()) : the_post()?>

			<?php	

			if( $slidecun % 2 == 0){
					$pull_right		= '';
          $fadeIn       = 'fadeInLeft';
				}else{

					$pull_right		= 'pull-right';
          $fadeIn       = 'fadeInRight';
				}

				$slidecun++;

				?>
            <div class="blog-item">
              <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 p-l-0 <?php echo $pull_right; ?> wow animated <?php echo $fadeIn; ?>">
                  <div class="blog-img hover-img pro_dev">
                    <?php the_post_thumbnail(); ?>
                  </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="bp-content">
                    <div class="s1">
                      <h2 class="blog-title"><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      <p><?php the_content(); ?></p>
                      <a href="<?php echo the_permalink(); ?>" class="btn-blog">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <?php endwhile; ?>





             


            <div class="col-xs-12">
              <nav class="pagination  text-center">

                <?php the_posts_pagination([
                    'type'                    => 'list',
                    'prev_text'               => '<i class="fa fa-caret-left"></i>',
                    'next_text'               => '<i class="fa fa-caret-right"></i>',

                  ]); ?>




              </nav>
            </div>
          </div>
        </div>
      </section>
      <!-- End blog section -->
      <!--toper -->
      <div class="toper">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="page-scroll marginbot-30">
                <a href="#blog" id="totop" class="btn btn-circle">
                <i class="fa fa-angle-double-up animated"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End toper -->


      <?php  get_footer(); ?>



