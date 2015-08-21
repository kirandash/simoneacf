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