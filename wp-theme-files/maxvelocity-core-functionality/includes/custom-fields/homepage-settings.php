<?php
/**
 * ACF fields
 * field settings for the homepage
 */
if(!defined('ABSPATH')){ exit; }

/**
 * Manuals Carousel
 */
acf_add_local_field_group(array(
	'key' => 'group_5d1a6970806fe',
	'title' => esc_html__('Manuals Carousel Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1a6985c140e',
			'label' => esc_html__('Manuals', 'maxvelocity'),
			'name' => 'manuals',
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
			'layout' => 'block',
			'button_label' => esc_html__('Add Manual Slide', 'maxvelocity'),
			'sub_fields' => array(
				array(
					'key' => 'field_5d1a69a4c140f',
					'label' => esc_html__('Manual Slide Content', 'maxvelocity'),
					'name' => 'manual_slide_content',
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
					'key' => 'field_5d1a69bac1410',
					'label' => esc_html__('Manual Link', 'maxvelocity'),
					'name' => 'manual_link',
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
					'key' => 'field_5d1a69cac1411',
					'label' => esc_html__('Manual Image', 'maxvelocity'),
					'name' => 'manual_image',
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
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '6',
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
 * Video Section Settings
 */
acf_add_local_field_group(array(
	'key' => 'group_5d1a6e163819b',
	'title' => esc_html__('Video Section Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1a6e262a2bb',
			'label' => esc_html__('Videos Section Content', 'maxvelocity'),
			'name' => 'videos_section_content',
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
			'key' => 'field_5d1a6e402a2bc',
			'label' => esc_html__('Video Section Display', 'maxvelocity'),
			'name' => 'video_section_display',
			'type' => 'select',
			'instructions' => esc_html__('Choose whether to display an embedded video or an image in this section.', 'maxvelocity'),
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Video' => esc_html__('Video', 'maxvelocity'),
				'Image' => esc_html__('Image', 'maxvelocity'),
			),
			'default_value' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'ui' => 0,
			'return_format' => 'value',
			'ajax' => 0,
			'placeholder' => '',
		),
		array(
			'key' => 'field_5d1a6e762a2bd',
			'label' => esc_html__('Video Embed Link', 'maxvelocity'),
			'name' => 'video_embed_link',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5d1a6e402a2bc',
						'operator' => '==',
						'value' => 'Video',
					),
				),
			),
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
			'key' => 'field_5d1a6e952a2be',
			'label' => esc_html__('Video Section Image', 'maxvelocity'),
			'name' => 'video_image',
			'type' => 'image',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5d1a6e402a2bc',
						'operator' => '==',
						'value' => 'Image',
					),
				),
			),
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
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '6',
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
 * Join Form section settings
 */
acf_add_local_field_group(array(
	'key' => 'group_5d1a6f89f0d12',
	'title' => esc_html__('Join Forum Section Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1a6f9273a57',
			'label' => esc_html__('Join Forum Section Content', 'maxvelocity'),
			'name' => 'join_forum_section_content',
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
			'key' => 'field_5d1a6faf73a58',
			'label' => esc_html__('Join Forum Section Background Image', 'maxvelocity'),
			'name' => 'join_forum_section_background_image',
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
		array(
			'key' => 'field_5d1a6fce73a59',
			'label' => esc_html__('Join Forum Section Background Image CSS', 'maxvelocity'),
			'name' => 'join_forum_section_background_image_css',
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
			'key' => 'field_5d1a6fde73a5a',
			'label' => esc_html__('Join Forum Link', 'maxvelocity'),
			'name' => 'join_forum_link',
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
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '6',
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