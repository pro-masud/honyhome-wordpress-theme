<?php 




	add_action('cmb2_init','amader_cmb2_box');


		function amader_cmb2_box(){



			//Sidebar width Customaization 

			$page_header 		=  	new_cmb2_box([

				'title'			=> 'Sidebar Customaization',
				'id'			=> 'pg',
				'object_types'	=> ['page'],
			]);




			$page_header -> add_field([
				'name'			=> 'Sidebar Options',
				'id'			=> 'pwc',
				'type'			=> 'select',
				'options'			=> [
					'1'				=> 'Full Width',
					'2'				=> 'Left Sidebar',
					'3'				=> 'Right Sidebar',
				],
			]);



			$honeyhome_project		=  new_cmb2_box([
				'title'				=> 'Project Section',
				'id'				=> 'rs',
				'object_types'		=> ['honeyhome_project']

			]);

			$honeyhome_project -> add_field([
				'name'			=> 'Project Image',
				'id'			=> 'pimg',
				'type'			=> 'file'

			]);


			$honeyhome_project -> add_field([
				'name'			=> 'Project Description',
				'id'			=> 'pdes',
				'type'			=> 'wysiwyg'

			]);






		
		}










 ?>