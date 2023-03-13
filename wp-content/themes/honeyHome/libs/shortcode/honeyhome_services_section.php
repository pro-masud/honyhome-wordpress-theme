<?php 

		add_shortcode('honeyhome_service_section','honeyhome_service_section');

		function  honeyhome_service_section($one,$two){

			$honeyhome_service 	=  shortcode_atts([

				'service_title_one'		=> '',
				'service_title_two'		=> '',
				'service_description'	=> '',
				'service_img'			=> '',


			],$one);



			ob_start();
		?>

				


              <article class="service-item text-center">
                <div class="service-image hvr-image">
                  <a href="#"><?php echo wp_get_attachment_image($honeyhome_service['service_img'],'mediun'); ?></a>
                </div>
                <h3 class="cap"><strong><?php echo $honeyhome_service['service_title_one']; ?></strong> <?php echo $honeyhome_service['service_title_two']; ?></h3>
                <p class="long-cap"><?php echo $honeyhome_service['service_description']; ?>
                </p>
              </article>





	<?php 
			return ob_get_clean();

		}




		add_action('vc_before_init','vc_honeyhome_service');


		function vc_honeyhome_service(){



			vc_map([

			'name'			=> 'Service Section',
			'base'			=> 'honeyhome_service_section',
			'description'	=> 'honeyhome Service',
			'icon'			=> get_template_directory_uri().'/acess/images/shortcodeimg/s.png',
			'category'		=> 'honeyHome',
			'params'		=> [
				[
					'param_name'		=> 'service_title_one',
					'type'				=> 'textfield',
					'heading'			=> 'Service Title One'

				],

				[
					'param_name'		=> 'service_title_two',
					'type'				=> 'textfield',
					'heading'			=> 'Service Title Two'

				],

				[
					'param_name'		=> 'service_description',
					'type'				=> 'textarea',
					'heading'			=> 'Service Description'

				],

				[
					'param_name'		=> 'service_img',
					'type'				=> 'attach_image',
					'heading'			=> 'Service Image'

				],

			]





			]);


		}



		







 ?>