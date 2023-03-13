<?php 

		add_shortcode('honeyhome_about_section','honeyhome_about_section');

		function  honeyhome_about_section($one,$two){

			$honeyhome_about 	=  shortcode_atts([

				'name_dev'					=> '',
				'job_name'					=> '',
				'man_img'					=> '',
				'animation'					=> '',
				'animation_time'			=> '',




			],$one);



			ob_start();
		?>

		      <div class="wow <?php echo $honeyhome_about['animation']; ?>" data-wow-delay="0.<?php echo $honeyhome_about['animation_time']; ?>s">
                <div class="team boxed-grey">
                  <div class="inner">
                    <p class="subtitle"><strong><?php echo $honeyhome_about['name_dev']; ?></strong></p>
                    <h5><?php echo $honeyhome_about['job_name']; ?></h5>
                    <div class="avatar dev_about"><?php echo wp_get_attachment_image($honeyhome_about['man_img'],'large'); ?></div>
                  </div>
                </div>
              </div>


		<?php 
			return ob_get_clean();

		}




		add_action('vc_before_init','vc_honeyhome_about');


		function vc_honeyhome_about(){



			vc_map([

			'name'			=> 'Service About Us',
			'base'			=> 'honeyhome_about_section',
			'description'	=> 'honeyhome About Us',
			'icon'			=> get_template_directory_uri().'/acess/images/shortcodeimg/s.png',
			'category'		=> 'honeyHome',
			'params'		=> [
				[
					'param_name'		=> 'name_dev',
					'type'				=> 'textfield',
					'heading'			=> 'Name'

				],

				[
					'param_name'		=> 'job_name',
					'type'				=> 'textfield',
					'heading'			=> 'Job Name'

				],

				[
					'param_name'		=> 'man_img',
					'type'				=> 'attach_image',
					'heading'			=> 'Photo'

				],


				[
					'param_name'		=> 'animation',
					'type'				=> 'dropdown',
					'heading'			=> 'Animations',
					'value'				=> [
						'--Select--'			=> ' ',
						'Left Side'			=> 'fadeInRight',
						'Right Side'			=> 'fadeInLeft',
						'Fade In'				=> 'fadeIn',

						],
				],

				[
					'param_name'		=> 'animation_time',
					'type'				=> 'textfield',
					'heading'			=> 'Animation Time'

				],


			]


			]);


		}



		







 ?>