<?php
/**
 * ACF fields
 * contact page custom fields
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5d1a763c48e60',
	'title' => esc_html__('Emergency Phone Section Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1a764ef4ed5',
			'label' => esc_html__('Emergency Phone Section Content', 'maxvelocity'),
			'name' => 'emergency_phone',
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
				'param' => 'page',
				'operator' => '==',
				'value' => '15',
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