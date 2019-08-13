<?php
/**
 * ACF fields
 * Field for the custom page title
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5d1a68070ac75',
	'title' => esc_html__('Page Title Setting', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1a6811a0312',
			'label' => esc_html__('Page Title', 'maxvelocity'),
			'name' => 'page_title',
			'type' => 'text',
			'instructions' => esc_html__('Use the field to customize the displayed page title. Leave this field blank to use the actual page title.', 'maxvelocity'),
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
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'review',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'videos',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));