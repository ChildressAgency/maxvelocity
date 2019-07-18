<?php
/**
 * ACF fileds
 * custom fields for gutenberg blocks
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5d2f481b3cef7',
	'title' => esc_html__('Block - Bordered Box', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d2f48262dafb',
			'label' => esc_html__('Bordered Box Title', 'maxvelocity'),
			'name' => 'bordered_box_title',
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
			'key' => 'field_5d2f48322dafc',
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
	'location' => array(
		array(
			array(
				'param' => 'block',
				'operator' => '==',
				'value' => 'acf/bordered-box',
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