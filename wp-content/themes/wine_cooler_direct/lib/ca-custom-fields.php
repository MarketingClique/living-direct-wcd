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
				'default_value' => 'http://www.winecoolerdirect.com/on/demandware.store/Sites-WCD-Site/default/Search-Show',
				'placeholder' => 'http://www.winecoolerdirect.com/on/demandware.store/Sites-WCD-Site/default/Search-Show',
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
		'id' => 'acf_mega-nav-columns',
		'title' => 'Mega Nav Columns',
		'fields' => array (
			array (
				'key' => 'field_53a46783a4cb2',
				'label' => 'Column',
				'name' => 'ca_column',
				'type' => 'repeater',
				'sub_fields' => array (
					array (
						'key' => 'field_53a467a2a4cb3',
						'label' => 'Column Heading',
						'name' => 'column_heading',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a467c1a4cb4',
						'label' => 'Column subhead',
						'name' => 'column_subhead',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a467d4a4cb5',
						'label' => '"See all" label',
						'name' => 'see_all_label',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a467e8a4cb6',
						'label' => '"See all" link',
						'name' => 'see_all_link',
						'type' => 'text',
						'column_width' => '',
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'formatting' => 'none',
						'maxlength' => '',
					),
					array (
						'key' => 'field_53a4680ea4cb7',
						'label' => 'Column Link',
						'name' => 'column_link',
						'type' => 'repeater',
						'column_width' => '',
						'sub_fields' => array (
							array (
								'key' => 'field_53a46849a4cb8',
								'label' => 'Link Text',
								'name' => 'link_text',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
							array (
								'key' => 'field_53a46855a4cb9',
								'label' => 'Link URL',
								'name' => 'link_url',
								'type' => 'text',
								'column_width' => '',
								'default_value' => '',
								'placeholder' => '',
								'prepend' => '',
								'append' => '',
								'formatting' => 'none',
								'maxlength' => '',
							),
						),
						'row_min' => 0,
						'row_limit' => '',
						'layout' => 'row',
						'button_label' => 'Add Link',
					),
				),
				'row_min' => 0,
				'row_limit' => 3,
				'layout' => 'row',
				'button_label' => 'Add Column',
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
						'default_value' => 'http://winecoolerdirect.com',
						'placeholder' => 'http://winecoolerdirect.com',
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
						'default_value' => 'http://winecoolerdirect.com',
						'placeholder' => 'http://winecoolerdirect.com',
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

