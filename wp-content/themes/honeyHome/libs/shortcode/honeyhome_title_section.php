<?php 

		add_shortcode('shortcode_init','honeyHome_title_section');

		function  honeyHome_title_section($one,$two){

			$honeyhome_title 	=  shortcode_atts([

				'title_one'				=> '',
				'title_two'				=> '',
				'border_align'			=> '',
				'descript'				=> ''


			],$one);



			ob_start();
		?>


				<div class="section-heading-<?php echo $honeyhome_title['border_align']; ?>">
                  <h2><strong><?php echo $honeyhome_title['title_one']; ?></strong> <?php echo $honeyhome_title['title_two']; ?></h2>
                </div>

                <div class="paratex">
		            <h4><?php echo $honeyhome_title['descript']; ?></h4>
		         </div>




	<?php 
			return ob_get_clean();

		}




		add_action('vc_before_init','vc_honeyhome_title');


		function vc_honeyhome_title(){



			vc_map([

			'name'			=> 'Title Section',
			'base'			=> 'shortcode_init',
			'description'	=> 'honeyhome title',
			'icon'			=> get_template_directory_uri().'/acess/images/shortcodeimg/s.png',
			'category'		=> 'honeyHome',
			'params'		=> [
				[
					'param_name'		=> 'title_one',
					'type'				=> 'textfield',
					'heading'			=> 'Title Section One'

				],

				[
					'param_name'		=> 'title_two',
					'type'				=> 'textfield',
					'heading'			=> 'Title Section Two'

				],

				[
					'param_name'		=> 'border_align',
					'type'				=> 'dropdown',
					'value'			=> [

						'--Select--'			=> ' ',
						'Left Border'			=> 'left',
						'Right Border'			=> 'right'


					],

					'default'					=> 'right'


				],

				[
					'param_name'		=> 'descript',
					'type'				=> 'textarea',
					'heading'			=> 'Description'

				],



			]





			]);


		}



		







 ?>