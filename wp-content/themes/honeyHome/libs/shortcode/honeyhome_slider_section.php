<?php 

		add_shortcode('honeyhome_slider_section','honeyhome_slider_section');

		function  honeyhome_slider_section($one,$two){

			$honeyhome_about 	=  shortcode_atts([

				'slider_title'					=> '',
				'slider_des_one'					=> '',
				'slider_des_two'					=> '',
				'slider_image'					=> '',




			],$one);



			ob_start();
		?>


<?php 
		
		$our_slider 		=  new WP_Query([
			'post_type'				=> 'honeyhome_slider',
			'post_per_page'			=> 1



		]);


while( $our_slider ->  have_posts()) : 	$our_slider  -> the_post() ?>
	<section id="main-slider" class="no-margin" data-ride="carousel" data-pause="false" data-interval="7000">
        <div class="carousel slide">
          <div class="carousel-inner">

            
            <div class="item active slide-img-1">
              <div class="container">
	             <div class="row slide-margin">
                  <div class="col-sm-6">
                    <div class="carousel-content">
                      <h1 class="animation animated-item-1 tp-caption"><strong><?php echo the_title(); ?></strong></h1>
                      <h2 class="animation animated-item-2 tp-caption"><?php echo the_content(); ?>
                      </h2>
                      <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                    </div>
                  </div>
                  <div class="col-sm-6 hidden-xs animation animated-item-4">
                    <div class="slider-img">
                      <?php echo the_post_thumbnail(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/.item-->
          </div>
          <!--/.carousel-inner-->
        </div> 
      </section>

  <?php endwhile; ?>

		<?php 
			return ob_get_clean();

		}




		add_action('vc_before_init','vc_honeyhome_slider');


		function vc_honeyhome_slider(){



			vc_map([

			'name'			=> 'Our Slider',
			'base'			=> 'honeyhome_slider_section',
			'description'	=> 'honeyhome Slider',
			'icon'			=> get_template_directory_uri().'/acess/images/shortcodeimg/s.png',
			'category'		=> 'honeyHome',
			'params'		=> [
				[
					'param_name'		=> 'slider_title',
					'type'				=> 'textfield',
					'heading'			=> 'Name'

				],

				[
					'param_name'		=> 'slider_des_one',
					'type'				=> 'textfield',
					'heading'			=> 'Description One'

				],

				[
					'param_name'		=> 'slider_des_two',
					'type'				=> 'textfield',
					'heading'			=> 'Description Two'

				],

				[
					'param_name'		=> 'name_dev',
					'type'				=> 'attach_image',
					'heading'			=> 'slider_image'

				],



			]


			]);


		}



		







 ?>