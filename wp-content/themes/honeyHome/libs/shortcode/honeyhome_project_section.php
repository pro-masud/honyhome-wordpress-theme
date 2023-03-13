<?php 

		add_shortcode('honeyhome_project_section','honeyhome_project_section');

		function  honeyhome_project_section($one,$two){

			$honeyhome_about 	=  shortcode_atts([

				'widget_title'					=> '',
			],$one);



			ob_start();
		?>

    <section id="project" class="home-section text-center">
        <div class="heading-about">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <!-- ISO section -->
              <div class="iso-section">
                <ul class="filter-wrapper clearfix">

                	


                  <li><a href="#" data-filter="*" class="selected opc-main-bg">ALL</a></li>

                  <?php 

                			$project = get_terms('honeyhome_text');


                			foreach( $project as $jectpro ) :
                	 ?>

                  <li><a href="#" class="opc-main-bg" data-filter=".<?php echo $jectpro -> slug ?>"><?php echo $jectpro -> name ?></a></li>

              <?php  endforeach; ?>
                </ul>
                <div class="iso-box-section">
                  <div class="iso-box-wrapper col4-iso-box">

                  	<?php

                  		$honey_project 		= new WP_Query([
                  			'post_type'			=> 'honeyhome_project',
                  			'posts_per_page'		=> 8

                  		]);


                  		$i = 1;
                  	while( $honey_project -> have_posts() ) : $honey_project ->  the_post() ?>

                  		

                  		<?php 
                  				if( $i == 4 OR  $i == 5 ){

                  					$putin 	= 'col-md-6 col-sm-6 col-xs-12';

                  				}else{

                  					$putin 	= 'col-md-4 col-sm-4 col-xs-12';
                  				}

                  				$i++;


                  		 ?>
                    <div class="iso-box <?php 

                  				$project_slug 		=  get_the_terms(get_the_ID(),'honeyhome_text');

                  				foreach( $project_slug as $jectpro ){
                  					echo $jectpro -> slug . " ";
                  				}?>
                  		 <?php echo $putin; ?>">
                      <div class="view view-first">
                        <a href="<?php echo get_post_meta( get_the_ID(), 'pimg', true); ?>" data-lightbox-gallery="portfolio-gallery">
                          <img src="<?php echo get_post_meta( get_the_ID(), 'pimg', true); ?>" class="img-responsive"
                            alt="portfolio "/>
                          <div class="mask">
                            <div class="info">View</div>
                            <p><?php echo get_post_meta( get_the_ID(), 'pdes', true); echo $i; ?></p>
                          </div>
                        </a>
                      </div>
                    </div>

                <?php endwhile; ?>

                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </section>






      

		<?php 
			return ob_get_clean();

		}




		add_action('vc_before_init','vc_honeyhome_project');


		function vc_honeyhome_project(){



			vc_map([

			'name'			=> 'Project',
			'base'			=> 'honeyhome_project_section',
			'description'	=> 'honeyhome Project',
			'icon'			=> get_template_directory_uri().'/acess/images/shortcodeimg/s.png',
			'category'		=> 'honeyHome',
			'params'		=> [
				[
					'param_name'		=> 'widget_title',
					'type'				=> 'textfield',
					'heading'			=> 'Widget Title'

				],

			]


			]);


		}



 ?>