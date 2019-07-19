<?php 
/**
 * ACF fields
 * Shop page settings
 */
if(!defined('ABSPATH')){ exit; }

acf_add_local_field_group(array(
	'key' => 'group_5d31cc93cffa0',
	'title' => 'Custom Shop Options',
	'fields' => array(
		array(
			'key' => 'field_5d31cc9cdc562',
			'label' => esc_html__('Featured Section Shortcode', 'maxvelocity'),
			'name' => 'featured_section_shortcode',
			'type' => 'text',
			'instructions' => 'Enter a <a href="https://docs.woocommerce.com/document/woocommerce-shortcodes/" target="_blank">Woocommerce shortcode</a> to show in the featured section above the first page in the shop.	Ex: enter: [products limit="3" columns="3" best_selling="true"] to show the 3 best selling products.',
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
			'key' => 'field_5d31ce1e27e1f',
			'label' => esc_html__('Featured Section Title', 'maxvelocity'),
			'name' => 'featured_section_title',
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
	'location' => array(
		array(
			array(
				'param' => 'options_page',
				'operator' => '==',
				'value' => 'general-settings',
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