<?php
if ( ! function_exists( 'simone_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function simone_posted_on() {
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string .= '<time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date( _x('F jS, Y', 'Public posted on date', 'simone') ) ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date( _x('F jS, Y', 'Public modified on date', 'simone') ) )
	);
	
	if( get_field('contributor')){
		$the_contributor = get_field('contributor');	
		$contributor = sprintf( ' and <span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( $the_contributor[ID] ) ),
			esc_html( $the_contributor[display_name] )
		);
	}
        // Translators: Text wrapped in mobile-hide class is hidden on wider screens.
	printf( _x( '<span class="byline">Written by %1$s' . $contributor . '</span><span class="mobile-hide"> on </span><span class="posted-on">%2$s</span><span class="mobile-hide">.</span>', 'mobile-hide class is used to hide connecting elements like "on" and "." on wider screens.', 'simone' ),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s">%2$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_html( get_the_author() )
		),
                sprintf( '<a href="%1$s" rel="bookmark">%2$s</a>',
			esc_url( get_permalink() ),
			$time_string
		)
	);
}
endif;

?>

<?php 

define( 'ACF_LITE', true );

include_once('advanced-custom-fields/acf.php');

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_post-info-box',
		'title' => 'Post Info Box',
		'fields' => array (
			array (
				'key' => 'field_55d78c55f4982',
				'label' => 'Add contributor',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_55d774d00d96d',
				'label' => 'Contributor',
				'name' => 'contributor',
				'type' => 'user',
				'instructions' => 'Add the co author for the post.',
				'role' => array (
					0 => 'author',
				),
				'field_type' => 'select',
				'allow_null' => 0,
			),
			array (
				'key' => 'field_55d78c6df4983',
				'label' => 'Add info box',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_55d75df164600',
				'label' => 'Info box title',
				'name' => 'info_box_title',
				'type' => 'text',
				'instructions' => 'This is the title for the information box.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_55d75e1964601',
				'label' => 'Info box content',
				'name' => 'info_box_content',
				'type' => 'wysiwyg',
				'instructions' => 'This is the description for the Information box.',
				'default_value' => '',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_55d78c80f4984',
				'label' => 'Add related posts',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_55d78cb1f4985',
				'label' => 'Related post message',
				'name' => '',
				'type' => 'message',
				'message' => 'This is the related post message description for related posts.',
			),
			array (
				'key' => 'field_55d77ee0b881a',
				'label' => 'Related posts',
				'name' => 'related_posts',
				'type' => 'relationship',
				'instructions' => 'Add upto 3 related posts here!',
				'return_format' => 'object',
				'post_type' => array (
					0 => 'all',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'filters' => array (
					0 => 'search',
				),
				'result_elements' => array (
					0 => 'featured_image',
					1 => 'post_type',
					2 => 'post_title',
				),
				'max' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
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
}

?>