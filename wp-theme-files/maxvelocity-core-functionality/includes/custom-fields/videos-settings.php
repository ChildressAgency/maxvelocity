<?php
/**
 * ACF fields
 * Videos page and cpt settings
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5d1b7f182eaad',
	'title' => esc_html__('Videos Page Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1b7f20b1540',
			'label' => esc_html__('YouTube Channel Link', 'maxvelocity'),
			'name' => 'youtube_channel_link',
			'type' => 'url',
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
		),
		array(
			'key' => 'field_5d1b7f5332861',
			'label' => esc_html__('Default Video Placeholder Image', 'maxvelocity'),
			'name' => 'default_video_placeholder_image',
			'type' => 'image',
			'instructions' => esc_html__('Optimal Size: 325px x 185px.', 'maxvelocity'),
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
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '13',
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

acf_add_local_field_group(array(
	'key' => 'group_5d1b7f85a131c',
	'title' => esc_html__('Videos Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1b7fa20bcde',
			'label' => esc_html__('Video Embed Link', 'maxvelocity'),
			'name' => 'video_embed_link',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
		array(
			'key' => 'field_5d1b7fe80bcdf',
			'label' => esc_html__('Video Placeholder Image', 'maxvelocity'),
			'name' => 'video_placeholder_image',
			'type' => 'image',
			'instructions' => esc_html__('Upload an image to display as a placeholder for the actual video. This helps with page performance.<br />Optimal size: 325px x 185px.', 'maxvelocity'),
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
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'videos',
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