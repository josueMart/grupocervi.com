<?php
add_theme_support('post-thumbnails');

function register_my_menu(){
	register_nav_menu('top-menu',__('Menú Superior'));
}
add_action('init', 'register_my_menu');
?>

