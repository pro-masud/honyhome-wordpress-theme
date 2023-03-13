<?php 

		add_shortcode('honeyhome_contect_section','honeyhome_contect_section');

		function  honeyhome_contect_section($one,$two){

			$honeyhome_about 	=  shortcode_atts([

				'contect_name'						=> '',
				'contect_email'						=> '',
				'contect_subject'					=> '',
				'contect_textarea'						=> '',





			],$one);



			ob_start();
		?>

          <div class="row">
            <div class="col-md-12">
              <div class="contactboxed">
                <form id="contact-form">
                  <div class="row">
                    <div class="col-md-6">

                    <?php if($honeyhome_about['contect_name']) : ?>

                      <div class="form-group">
                        <label for="name"><?php echo $honeyhome_about['contect_name']; ?></label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name"
                          required="required"/>
                      </div>
                  <?php endif; ?>

                      <?php if($honeyhome_about['contect_email']) : ?>
                      <div class="form-group">
                        <label for="email"><?php echo $honeyhome_about['contect_email']; ?></label>
                        <div class="input-group">
                          <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                          </span>
                          <input type="email" class="form-control" id="email"
                            placeholder="Enter email" required="required"/>
                        </div>
                        <?php endif; ?>
                      </div>

                  

                 <?php if($honeyhome_about['contect_subject']) : ?>
                      <div class="form-group">
                        <label for="name"><?php echo $honeyhome_about['contect_subject']; ?></label>
                        <input type="text" class="form-control" id="subject" placeholder="Enter subject"
                          required="required"/>
                      </div>
                    </div>
                  <?php endif; ?>
                     


                     <?php if($honeyhome_about['contect_textarea']) : ?>
                    <div class="col-md-6">
                    	
	                      <div class="form-group">
	                        <label for="name"><?php echo $honeyhome_about['contect_textarea']; ?></label>
	                        <textarea name="message" id="message" class="form-control" rows="9" cols="25"
	                          required="required" placeholder="Message">
	                        </textarea>
	                      </div>
	                      <button type="submit" class="btn pull-right" id="btnContactUs">Send Message</button>
                       
                    </div>

                    <?php endif; ?>

                    
                  </div>
                </form>
              </div>
            </div>
          </div>

		<?php 
			return ob_get_clean();

		}




		add_action('vc_before_init','vc_honeyhome_contect');


		function vc_honeyhome_contect(){



			vc_map([

			'name'			=> 'Contect Us',
			'base'			=> 'honeyhome_contect_section',
			'description'	=> 'honeyhome Slider',
			'icon'			=> get_template_directory_uri().'/acess/images/shortcodeimg/s.png',
			'category'		=> 'honeyHome',
			'params'		=> [
				[
					'param_name'		=> 'contect_name',
					'type'				=> 'textfield',
					'heading'			=> 'Input Name'

				],

				[
					'param_name'		=> 'contect_email',
					'type'				=> 'textfield',
					'heading'			=> 'Input Email'

				],

				[
					'param_name'		=> 'contect_subject',
					'type'				=> 'textfield',
					'heading'			=> 'Input Subject'

				],

				[
					'param_name'		=> 'contect_textarea',
					'type'				=> 'textfield',
					'heading'			=> 'Textarea'

				],



			]


			]);


		}



		







 ?>