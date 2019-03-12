<?php
require 'inc/bem-menu.php';
require 'inc/custom-post-type.php';
require 'inc/template-functions.php';
add_theme_support('post-thumbnails', ['post', 'page']);
add_theme_support('menus');

register_nav_menu('top-menu', 'primary site menu');

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
