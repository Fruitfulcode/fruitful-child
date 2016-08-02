<?php
	function child_options($sections) {
	 	$sections['custom'] = array (
	 		'title'					=> __( 'Custom', 'fruitful' ),
			'id'					=> 'custom',
	 		'fields'				=> array(	
				    array(
						'id'		=> 'example_text',
						'label'		=> __('Text field','fruitful'),
						'info'		=> __('This is a information for the text input','fruitful'),
						'type'		=> 'text',
						'default'	=> 'Default value',			
					),	
				    array(
						'id'		=> 'example_textarea',
						'label'		=> __('Example Textarea Input','fruitful'),
						'info'		=> __('This is a information for the textarea input.','fruitful'),
						'type'		=> 'textarea',
						'default'	=> 'Default value',			
					),
				    array(
						'id' 			=> 'example_checkbox',
						'label'			=> __( 'Example Checkbox' , 'fruitful' ),
						'info'          => __( 'This is a information for the checkbox.', 'fruitful' ),
						'description'	=> __( 'This is a description for the checkbox.' , 'fruitful'),
						'type'			=> 'checkbox',
						'default'		=> 'on',		
					),	
				    array(
						'id'		=> 'example_select',
						'label'		=> __('Example Select','fruitful'),
						'info'		=> __('This is a information for the select.','fruitful'),
						'type'		=> 'select',
						'options'	=>  array( 
											'choice1' => __('Choice 1', 'fruitful'),
											'choice2' => __('Choice 2', 'fruitful'),
											'choice3' => __('Choice 3', 'fruitful'), 											
										),
						'default'	=> 'choice1',	
					),
					array(
						'id' 			=> 'example_image',
						'label'			=> __( 'Example image' , 'fruitful' ),
						'info'			=> __( 'This is a information for the upload image.', 'fruitful' ),					
						'type'			=> 'image',
						'class'			=> 'upload_btn'
					),	
					array(
						'id' 			=> 'example_color',
						'label'			=> __('Example color','fruitful'),
						'info'			=> __('This is a information for the color.','fruitful'),							
						'type'			=> 'color',
						'default'		=> '#000000',
					),	
					array(
						'id' 			=> 'example_font_family',
						'label'			=>  __( 'Example Fonts' , 'fruitful' ),
						'info'			=> __( 'This is a information for the fonts.', 'fruitful' ),						
						'type'			=> 'font',
						'options'		=> fruitful_fonts_list(),
						'default'		=> 'Open Sans, sans-serif',
					),
					array(	
						'id' 			=> 'example_combined_fields',
						'label'			=>  __( 'Combined fields' , 'fruitful' ),
						'info'			=> __( 'This is a information for the combined fields.', 'fruitful' ),	
						'fields'		=>  array (	
							array(
								'id' 			=> 'example_box1',
								'type'			=> 'text',
								'default'		=> 'Default value',
								'box-title'		=> __( 'This is a box-title for example box1.', 'fruitful' ),		
							),
							array(
								'id' 			=> 'example_box2',
								'type'			=> 'color',
								'box-title'		=> __( 'This is a box-title for example box2.', 'fruitful' ),		
								'default'		=> '#000000',	
							),	
						)	
					),	
			  )
		);
		return $sections;
	}
	add_filter('settings_fields', 'child_options');