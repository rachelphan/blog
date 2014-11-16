<?php
/**
 * Enqueues child theme stylesheet, loading first the parent theme stylesheet.
 */
function enqueue_child_theme_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', 11 );
?>

<?php
/**
 * Register the sidebar
 */

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {
	register_sidebar(
		array(
			'id' => 'sidebar-right',
			'name' => __( 'Right Sidebar' ),
			'description' =>__( 'Appears in the right side of the blog posts.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
?>
