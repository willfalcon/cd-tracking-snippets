<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5b97d643d5cb4',
	'title' => 'Tracking Snippets',
	'fields' => array(
		array(
			'key' => 'field_5b983b60977a4',
			'label' => 'Snippets',
			'name' => 'snippets',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
        array(
          'key' => 'field_5b983b70972f6',
          'label' => 'Label',
          'name' => 'label',
          'type' => 'text',
          'instructions' => '',
          'required' => 0,
          'conditional_logic' => 0,
          'wrapper' => array(
            'width' => '25',
            'class' => '',
            'id' => '',
          ),
          'default_value' => '',
          'placeholder' => ''
        ),
				array(
					'key' => 'field_5b983b70977a5',
					'label' => 'Code',
					'name' => 'code',
					'type' => 'textarea',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '50',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => 4,
					'new_lines' => '',
				),
				array(
					'key' => 'field_5b983b92977a6',
					'label' => 'Location',
					'name' => 'location',
					'type' => 'select',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'choices' => array(
						'head' => 'Top of Head',
						'body' => 'Top of Body',
						'foot' => 'Bottom of Body',
					),
					'default_value' => array(
						0 => 'foot',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'ui' => 0,
					'return_format' => 'value',
					'ajax' => 0,
					'placeholder' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'cd-tracking-snippets',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;
