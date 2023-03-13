<?php 

		add_shortcode('honeyhome_widget_section','honeyhome_widget_section');

		function  honeyhome_widget_section($one,$two){

			$honeyhome_about 	=  shortcode_atts([

				'widget_title'					=> '',
				'widget_description'			=> '',
				'fb_link'						=> '',
				'tw_link'						=> '',
				'lin_link'						=> '',

			],$one);



			ob_start();
		?>

		     <div class="office">
                <div class="widget-contact">
                  <h3><strong><?php echo $honeyhome_about['widget_title']; ?></strong></h3>
                  <address>
                    <?php echo $honeyhome_about['widget_description']; ?><br>
                    <ul class="company-social">
                    	<?php if($honeyhome_about['fb_link']) : ?>
                      <li class="social-facebook"><a href="<?php echo $honeyhome_about['fb_link']; ?>" target="_blank"><i
                        class="fa fa-facebook"></i></a></li>
                    <?php endif; ?>

                    <?php if($honeyhome_about['tw_link']) : ?>
                      <li class="social-twitter"><a href="<?php echo $honeyhome_about['tw_link']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                      </li>
                       <?php endif; ?>
                      <?php if($honeyhome_about['lin_link']) : ?>
                      <li class="social-google"><a href="<?php echo $honeyhome_about['lin_link']; ?>" target="_blank"><i
                        class="fa fa-google-plus"></i></a></li>
                         <?php endif; ?>
                    </ul>
                  </address>
                </div>
              </div>

      

		<?php 
			return ob_get_clean();

		}




		add_action('vc_before_init','vc_honeyhome_widget');


		function vc_honeyhome_widget(){



			vc_map([

			'name'			=> 'Widgets',
			'base'			=> 'honeyhome_widget_section',
			'description'	=> 'honeyhome Slider',
			'icon'			=> get_template_directory_uri().'/acess/images/shortcodeimg/s.png',
			'category'		=> 'honeyHome',
			'params'		=> [
				[
					'param_name'		=> 'widget_title',
					'type'				=> 'textfield',
					'heading'			=> 'Widget Title'

				],

				[
					'param_name'		=> 'widget_description',
					'type'				=> 'textarea',
					'heading'			=> 'Description'

				],

				[
					'param_name'		=> 'fb_link',
					'type'				=> 'textfield',
					'heading'			=> 'Facebook Link'

				],

				[
					'param_name'		=> 'tw_link',
					'type'				=> 'textfield',
					'heading'			=> 'Twitter Link'

				],

				[
					'param_name'		=> 'lin_link',
					'type'				=> 'textfield',
					'heading'			=> 'Linkedin Link'

				],


			]


			]);


		}



		







 ?>