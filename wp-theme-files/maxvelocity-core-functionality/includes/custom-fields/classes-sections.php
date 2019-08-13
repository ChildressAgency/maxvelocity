<?php
/**
 * ACF fields
 * training and classes sections settings
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5d1a6c1957245',
	'title' => esc_html__('Training Options Section Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1a6c2589e3d',
			'label' => esc_html__('Training Options Section Title', 'maxvelocity'),
			'name' => 'training_options_section_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d1a6c7589e3e',
			'label' => esc_html__('Training Options', 'maxvelocity'),
			'name' => 'training_options',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5d1a6c8889e3f',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => esc_html__('Add Training Option', 'maxvelocity'),
			'sub_fields' => array(
				array(
					'key' => 'field_5d1a6c8889e3f',
					'label' => esc_html__('Training Option Title', 'maxvelocity'),
					'name' => 'training_option_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5d1a6c9789e40',
					'label' => esc_html__('Training Option Content', 'maxvelocity'),
					'name' => 'training_option_content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'tabs' => 'all',
					'toolbar' => 'full',
					'media_upload' => 1,
					'delay' => 0,
				),
				array(
					'key' => 'field_5d1a6ca789e41',
					'label' => esc_html__('Training Option Link', 'maxvelocity'),
					'name' => 'training_option_link',
					'type' => 'link',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
				),
				array(
					'key' => 'field_5d1a6cb389e42',
					'label' => esc_html__('Training Option Image', 'maxvelocity'),
					'name' => 'training_option_image',
					'type' => 'image',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'return_format' => 'array',
					'preview_size' => 'full',
					'library' => 'all',
					'min_width' => '',
					'min_height' => '',
					'min_size' => '',
					'max_width' => '',
					'max_height' => '',
					'max_size' => '',
					'mime_types' => '',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '10',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

/**
 * Training Classes page settings
 */
acf_add_local_field_group(array(
	'key' => 'group_5d1b76b4cfa16',
	'title' => esc_html__('Training Classes Page Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1b76c8345cf',
			'label' => esc_html__('Classes offered section intro', 'maxvelocity'),
			'name' => 'classes_offered_section_intro',
			'type' => 'wysiwyg',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'tabs' => 'all',
			'toolbar' => 'full',
			'media_upload' => 1,
			'delay' => 0,
		),
		array(
			'key' => 'field_5d1b76de345d0',
			'label' => esc_html__('Classes Offered', 'maxvelocity'),
			'name' => 'classes_offered',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5d1b76ed345d1',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => esc_html__('Add Class Category', 'maxvelocity'),
			'sub_fields' => array(
				array(
					'key' => 'field_5d1b76ed345d1',
					'label' => esc_html__('Class Category', 'maxvelocity'),
					'name' => 'class_category',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5d1b76fd345d2',
					'label' => esc_html__('Classes', 'maxvelocity'),
					'name' => 'classes',
					'type' => 'repeater',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'collapsed' => 'field_5d1b770d345d3',
					'min' => 0,
					'max' => 0,
					'layout' => 'row',
					'button_label' => esc_html__('Add Class', 'maxvelocity'),
					'sub_fields' => array(
						array(
							'key' => 'field_5d1b770d345d3',
							'label' => esc_html__('Class Title', 'maxvelocity'),
							'name' => 'class_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d1b772f345d4',
							'label' => esc_html__('Class Description', 'maxvelocity'),
							'name' => 'class_description',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d1b7740345d5',
							'label' => esc_html__('Class Link', 'maxvelocity'),
							'name' => 'class_link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
						array(
							'key' => 'field_5d1b7746345d6',
							'label' => esc_html__('Class Image', 'maxvelocity'),
							'name' => 'class_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
				),
			),
		),
		array(
			'key' => 'field_5d1b7796345d7',
			'label' => esc_html__('Prerequisites', 'maxvelocity'),
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d1b77a2345d8',
			'label' => esc_html__('Prerequisites Title', 'maxvelocity'),
			'name' => 'prerequisites_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d1b77b4345d9',
			'label' => esc_html__('Prerequisites Description', 'maxvelocity'),
			'name' => 'prerequisites_description',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'wpautop',
		),
		array(
			'key' => 'field_5d1b77ce345da',
			'label' => esc_html__('Prerequisites Image', 'maxvelocity'),
			'name' => 'prerequisites_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5d1b77d9345db',
			'label' => esc_html__('Accommodations', 'maxvelocity'),
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d1b77e4345dc',
			'label' => esc_html__('Accommodations Title', 'maxvelocity'),
			'name' => 'accommodations_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d1b77fa345dd',
			'label' => esc_html__('Accommodations Description', 'maxvelocity'),
			'name' => 'accommodations_description',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'wpautop',
		),
		array(
			'key' => 'field_5d1b780a345de',
			'label' => esc_html__('Accommodations Image', 'maxvelocity'),
			'name' => 'accommodations_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5d1b7818345df',
			'label' => esc_html__('Camping', 'maxvelocity'),
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'key' => 'field_5d1b7821345e0',
			'label' => esc_html__('Camping Title', 'maxvelocity'),
			'name' => 'camping_title',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5d1b782a345e1',
			'label' => esc_html__('Camping Description', 'maxvelocity'),
			'name' => 'camping_description',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'wpautop',
		),
		array(
			'key' => 'field_5d1b783c345e2',
			'label' => esc_html__('Camping Image', 'maxvelocity'),
			'name' => 'camping_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
		),
		array(
			'key' => 'field_5d1b7846345e3',
			'label' => '',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 1,
		),
		array(
			'key' => 'field_5d1b785999c09',
			'label' => esc_html__('Classes Disclaimer', 'maxvelocity'),
			'name' => 'classes_disclaimer',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'wpautop',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '10',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

/**
 * Training Template settings
 */
acf_add_local_field_group(array(
	'key' => 'group_5d1b7a8f7bb0f',
	'title' => esc_html__('Training Template Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1b7a9a3b131',
			'label' => esc_html__('Page Section', 'maxvelocity'),
			'name' => 'page_section',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_5d1b7aad465da' => array(
					'key' => 'layout_5d1b7aad465da',
					'name' => 'standard_content',
					'label' => esc_html__('Standard Content Editor', 'maxvelocity'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d1b7adeb1bf9',
							'label' => esc_html__('Standard Content', 'maxvelocity'),
							'name' => 'content_standard',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5d1b7aefb1bfa' => array(
					'key' => 'layout_5d1b7aefb1bfa',
					'name' => 'class_overview_table',
					'label' => esc_html__('Class Overview Table', 'maxvelocity'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d1b7b16b1bfb',
							'label' => esc_html__('Table Title', 'maxvelocity'),
							'name' => 'table_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d1b7b1eb1bfc',
							'label' => esc_html__('Table Content', 'maxvelocity'),
							'name' => 'table_content',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => 'field_5d1b7b27b1bfd',
							'min' => 0,
							'max' => 0,
							'layout' => 'table',
							'button_label' => esc_html__('Add Table Row', 'maxvelocity'),
							'sub_fields' => array(
								array(
									'key' => 'field_5d1b7b27b1bfd',
									'label' => esc_html__('Table Row Title', 'maxvelocity'),
									'name' => 'table_row_title',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_5d1b7b30b1bfe',
									'label' => esc_html__('Table Row Content', 'maxvelocity'),
									'name' => 'table_row_content',
									'type' => 'text',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5d1b7b50fb4f5' => array(
					'key' => 'layout_5d1b7b50fb4f5',
					'name' => 'bordered_box',
					'label' => esc_html__('Bordered Box', 'maxvelocity'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d1b7b5afb4f6',
							'label' => esc_html__('Bordered Box Title', 'maxvelocity'),
							'name' => 'border_box_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_5d1b7b68fb4f7',
							'label' => esc_html__('Bordered Box Content', 'maxvelocity'),
							'name' => 'bordered_box_content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5d1b7b8731229' => array(
					'key' => 'layout_5d1b7b8731229',
					'name' => 'callout_section',
					'label' => esc_html__('Callout Section', 'maxvelocity'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d1b7b8e3122a',
							'label' => esc_html__('Callout Section Content', 'maxvelocity'),
							'name' => 'callout_section_content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5d1b7baba42be' => array(
					'key' => 'layout_5d1b7baba42be',
					'name' => 'more_info_links',
					'label' => esc_html__('More Info Links', 'maxvelocity'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d1b7bbba42bf',
							'label' => esc_html__('Left Side Link', 'maxvelocity'),
							'name' => 'left_side_link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
						array(
							'key' => 'field_5d1b7bd1a42c0',
							'label' => esc_html__('Left Side Image', 'maxvelocity'),
							'name' => 'left_side_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5d1b7bd8a42c1',
							'label' => esc_html__('Right Side Link', 'maxvelocity'),
							'name' => 'right_side_link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
						array(
							'key' => 'field_5d1b7be0a42c2',
							'label' => esc_html__('Right Side Image', 'maxvelocity'),
							'name' => 'right_side_image',
							'type' => 'image',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_5d1b7c2282192' => array(
					'key' => 'layout_5d1b7c2282192',
					'name' => 'equipment_section',
					'label' => esc_html__('Equipment Details Section', 'maxvelocity'),
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d1b7c3382193',
							'label' => esc_html__('Equipment Details Content', 'maxvelocity'),
							'name' => 'equipment_details_content',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
						array(
							'key' => 'field_5d1b7c4182194',
							'label' => esc_html__('Shop Now Link', 'maxvelocity'),
							'name' => 'shop_now_link',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
						array(
							'key' => 'field_5d1b7c4c82195',
							'label' => esc_html__('Equipment Gallery', 'maxvelocity'),
							'name' => 'equipment_gallery',
							'type' => 'gallery',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'insert' => 'append',
							'library' => 'all',
							'min' => '',
							'max' => '',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_5d1b7c6582196',
							'label' => esc_html__('Other Equipment Content', 'maxvelocity'),
							'name' => 'other_equipment_content',
							'type' => 'wysiwyg',
							'instructions' => esc_html__('Displays under the equipment gallery.', 'maxvelocity'),
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 1,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
        ),
        'layout_5d2f2df4e621e' => array(
					'key' => 'layout_5d2f2df4e621e',
					'name' => 'disclaimer_box',
					'label' => 'Disclaimer Box',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_5d2f2e0ae621f',
							'label' => 'Disclaimer',
							'name' => 'disclaimer',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => 4,
							'new_lines' => 'wpautop',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => esc_html__('Add Section', 'maxvelocity'),
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'templates/template-classes.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));