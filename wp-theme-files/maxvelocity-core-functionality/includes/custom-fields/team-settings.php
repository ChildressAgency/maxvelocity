<?php
/**
 * ACF fields
 * team page settings
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5d1b7db999d7a',
	'title' => esc_html__('Team Page Settings', 'maxvelocity'),
	'fields' => array(
		array(
			'key' => 'field_5d1b7dc93aaa0',
			'label' => esc_html__('Team Members', 'maxvelocity'),
			'name' => 'team_members',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_5d1b7dda3aaa1',
			'min' => 0,
			'max' => 0,
			'layout' => 'row',
			'button_label' => esc_html__('Add Team Member', 'maxvelocity'),
			'sub_fields' => array(
				array(
					'key' => 'field_5d1b7dda3aaa1',
					'label' => esc_html__('Team Member Name and Title', 'maxvelocity'),
					'name' => 'team_member_name_and_title',
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
					'key' => 'field_5d1b7dec3aaa2',
					'label' => esc_html__('Team Member Image', 'maxvelocity'),
					'name' => 'team_member_image',
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
					'key' => 'field_5d1b7df63aaa3',
					'label' => esc_html__('Team Member Bio', 'maxvelocity'),
					'name' => 'team_member_bio',
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
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page',
				'operator' => '==',
				'value' => '143',
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