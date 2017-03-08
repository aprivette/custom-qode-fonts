<?php
if(function_exists("register_field_group"))
{
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page();
	}
	register_field_group(array (
		'id' => 'acf_custom-fonts',
		'title' => 'Custom Fonts',
		'fields' => array (
			array (
				'key' => 'field_58bdf6a061da6',
				'label' => 'Fonts',
				'name' => 'fonts',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_58bdf6c161da7',
						'label' => 'Name',
						'name' => 'name',
						'type' => 'text',
						'required' => 1,
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_58bed1d6f630e',
						'label' => 'Files',
						'name' => 'files',
						'type' => 'repeater',
						'column_width' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_58bed2aef6314',
								'label' => 'Style',
								'name' => 'style',
								'type' => 'select',
								'required' => 1,
								'column_width' => '',
								'choices' => array (
									'normal' => 'Normal',
									'italic' => 'Italic',
									'oblique' => 'Oblique',
								),
								'default_value' => 'normal',
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								'key' => 'field_58bed1ddf630f',
								'label' => 'Weight',
								'name' => 'weight',
								'type' => 'select',
								'required' => 1,
								'column_width' => '',
								'choices' => array (
									100 => 100,
									200 => 200,
									300 => 300,
									400 => 400,
									500 => 500,
									600 => 600,
									700 => 700,
									800 => 800,
									900 => 900,
								),
								'default_value' => 400,
								'allow_null' => 0,
								'multiple' => 0,
							),
							array (
								'key' => 'field_58bed1fff6310',
								'label' => 'EOT File Path',
								'name' => 'eot_file_path',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_58bed22bf6311',
								'label' => 'TTF File Path',
								'name' => 'ttf_file_path',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_58bed247f6312',
								'label' => 'WOFF File Path',
								'name' => 'woff_file_path',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_58bed26af6313',
								'label' => 'WOFF2 File Path',
								'name' => 'woff2_file_path',
								'type' => 'text',
								'required' => 1,
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
						'row_min' => '',
						'row_limit' => '',
						'layout' => 'table',
						'button_label' => 'Add Row',
					),
				),
				'row_min' => '',
				'row_limit' => '',
				'layout' => 'table',
				'button_label' => 'Add Row',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}


?>