<?php
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 150, 150, true );
