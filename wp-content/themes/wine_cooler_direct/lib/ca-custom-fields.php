<?php 
if(function_exists("register_field_group")){
	register_field_group(array (
		'id' => 'acf_extra-page-data',
		'title' => 'Extra Page Data',
		'fields' => array (
			array (
				'key' => 'field_52fe540dcfd4a',
				'label' => 'Page Subtitle',
				'name' => 'page_subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	
	register_field_group(array (
		'id' => 'acf_branding',
		'title' => 'Branding',
		'fields' => array (
			array (
				'key' => 'field_532764ced2ade',
				'label' => 'Images',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_53274271edb4d',
				'label' => 'Main Logo',
				'name' => 'main_logo',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_53274284edb4e',
				'label' => 'Mobile Logo',
				'name' => 'mobile_logo',
				'type' => 'image',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
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
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	
	register_field_group(array (
		'id' => 'acf_header-information',
		'title' => 'Header Information',
		'fields' => array (
			array (
				'key' => 'field_5318cc6076551',
				'label' => 'Header Special Image',
				'name' => 'header_special_image',
				'type' => 'image',
				'instructions' => 'This is the image that populates the center area of the header',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5318cca776552',
				'label' => 'Header Banner',
				'name' => 'header_banner',
				'type' => 'image',
				'instructions' => 'This is the image that populates the area below the main menu',
				'save_format' => 'url',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5318cceb76553',
				'label' => 'Lightbox',
				'name' => 'lightbox',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_533edec222e2a',
				'label' => 'search query url',
				'name' => 'search_query_url',
				'type' => 'text',
				'instructions' => 'Please specific the search query url for the header site for this site',
				'default_value' => 'http://www.compactappliance.com/on/demandware.store/Sites-Appliance-Site/default/Search-Show',
				'placeholder' => 'http://www.compactappliance.com/on/demandware.store/Sites-Appliance-Site/default/Search-Show',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
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
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	
	register_field_group(array (
		'id' => 'acf_mega-section',
		'title' => 'Mega Dropdown',
		'fields' => array (
			array (
				'key' => 'field_53061b4c535bc',
				'label' => 'Columns',
				'name' => 'columns',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_53061b5e535bd',
						'label' => 'Heading',
						'name' => 'heading',
						'type' => 'text',
						'column_width' => '',
						'default_value' => 'Product Knowledge',
						'placeholder' => 'Product Knowledge',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53061b7f535be',
						'label' => 'Content',
						'name' => 'content',
						'type' => 'textarea',
						'column_width' => '',
						'default_value' => 'Ready to do some research? Learn everything there is to know before you buy.',
						'placeholder' => 'Ready to do some research? Learn everything		there is to know before you buy.',
						'maxlength' => '',
						'formatting' => 'br',
					),
					array (
						'key' => 'field_53061b9f535bf',
						'label' => 'Sub Heading',
						'name' => 'sub_heading',
						'type' => 'text',
						'column_width' => '',
						'default_value' => 'Start your research here',
						'placeholder' => 'Start your research here',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => 3,
				'row_limit' => 3,
				'layout' => 'row',
				'button_label' => 'Add Column',
			),
			array (
				'key' => 'field_53061bde535c0',
				'label' => 'Product Category',
				'name' => 'product_category',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_53061bf1535c1',
						'label' => 'Category Name',
						'name' => 'category_name',
						'type' => 'taxonomy',
						'column_width' => '',
						'taxonomy' => 'category',
						'field_type' => 'select',
						'allow_null' => 0,
						'load_save_terms' => 0,
						'return_format' => 'id',
						'multiple' => 0,
					),
					array (
						'key' => 'field_53061c58535c2',
						'label' => 'Category Link',
						'name' => 'category_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => 'http://www.compactappliance.com/',
						'placeholder' => 'http://www.compactappliance.com/',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Category',
			),
			array (
				'key' => 'field_530618c0b7015',
				'label' => 'Product Articles',
				'name' => 'product_articles',
				'type' => 'repeater',
				'instructions' => 'Choose which articles from the Product Knowledge Category you would like to place on the home page',
				'sub_fields' => array (
					array (
						'key' => 'field_530618ffb7017',
						'label' => 'Article',
						'name' => 'article',
						'type' => 'relationship',
						'column_width' => '',
						'return_format' => 'object',
						'post_type' => array (
							0 => 'post',
						),
						'taxonomy' => array (
							0 => 'category:1',
						),
						'filters' => array (
							0 => 'search',
						),
						'result_elements' => array (
							0 => 'post_title',
						),
						'max' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Article',
			),
			array (
				'key' => 'field_53061847a82ca',
				'label' => 'Lifestyle Articles',
				'name' => 'lifestyle_articles',
				'type' => 'repeater',
				'instructions' => 'Choose which articles from the Lifestyle Category you would like to place on the home page',
				'sub_fields' => array (
					array (
						'key' => 'field_53061888a82cb',
						'label' => 'Article',
						'name' => 'article',
						'type' => 'relationship',
						'column_width' => '',
						'return_format' => 'object',
						'post_type' => array (
							0 => 'post',
						),
						'taxonomy' => array (
							0 => 'category:2',
						),
						'filters' => array (
							0 => 'search',
						),
						'result_elements' => array (
							0 => 'post_title',
						),
						'max' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Article',
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
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 2,
	));
	
	register_field_group(array (
		'id' => 'acf_social-widgets',
		'title' => 'Social Widgets',
		'fields' => array (
			array (
				'key' => 'field_5339e38054d4e',
				'label' => 'Footer Left',
				'name' => 'footer-left',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5339e3b654d4f',
				'label' => 'Footer Center',
				'name' => 'footer-center',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
			),
			array (
				'key' => 'field_5339e3d054d50',
				'label' => 'Footer Right',
				'name' => 'footer-right',
				'type' => 'wysiwyg',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'no',
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
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 3,
	));
	
	register_field_group(array (
		'id' => 'acf_page-slider',
		'title' => 'Page Slider',
		'fields' => array (
			array (
				'key' => 'field_530233c8c4fa4',
				'label' => 'Slide',
				'name' => 'slide',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_530233e4c4fa5',
						'label' => 'Slide Image',
						'name' => 'slide_image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'instructions' => 'An image with a 2/1 ratio works best.  Something around 600px x 300px',
						'library' => 'all',
					),
					array (
						'key' => 'field_530233fec4fa6',
						'label' => 'Slide Description',
						'name' => 'slide_description',
						'type' => 'wysiwyg',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'basic',
						'media_upload' => 'no',
					),
					array (
						'key' => 'field_53023442c4fa7',
						'label' => 'Slide Link',
						'name' => 'slide_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => 'http://compactappliance.com',
						'placeholder' => 'http://compactappliance.com',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Slide',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'page',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
	
	register_field_group(array (
		'id' => 'acf_extra-category-data',
		'title' => 'Extra Category Data',
		'fields' => array (
			array (
				'key' => 'field_530b441d9a453',
				'label' => 'Category Subtitle',
				'name' => 'category_subtitle',
				'type' => 'text',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_530b44749a454',
				'label' => 'Featured Category?',
				'name' => 'featured_category',
				'type' => 'true_false',
				'message' => '',
				'default_value' => 0,
			),
			array (
				'key' => 'field_530b4de258273',
				'label' => 'Category Slider',
				'name' => 'category_slider',
				'type' => 'repeater',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_530b44749a454',
							'operator' => '==',
							'value' => '1',
						),
					),
					'allorany' => 'all',
				),
				'sub_fields' => array (
					array (
						'key' => 'field_530b4e2158274',
						'label' => 'Slide Image',
						'name' => 'slide_image',
						'type' => 'image',
						'column_width' => '',
						'save_format' => 'url',
						'preview_size' => 'thumbnail',
						'instructions' => 'An image with a 2/1 ratio works best.  Something around 600px x 300px',
						'library' => 'all',
					),
					array (
						'key' => 'field_530b4e3d58275',
						'label' => 'Slide Description',
						'name' => 'slide_description',
						'type' => 'wysiwyg',
						'column_width' => '',
						'default_value' => '',
						'toolbar' => 'basic',
						'media_upload' => 'no',
					),
					array (
						'key' => 'field_530b4e6958276',
						'label' => 'Slide Link',
						'name' => 'slide_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => 'http://compactappliance.com',
						'placeholder' => 'http://compactappliance.com',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
				),
				'row_min' => 0,
				'row_limit' => '',
				'layout' => 'row',
				'button_label' => 'Add Slide',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 1,
	));
}
