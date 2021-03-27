<?php

// bodyタグのクラス属性にスラッグ名
function add_page_slug_class_name( $classes ) {
  if ( is_page() ) {
    $page = get_post( get_the_ID() );
    $classes[] = $page->post_name;
  }
  return $classes;
}
add_filter( 'body_class', 'add_page_slug_class_name' );

// MWWPFORMでビジュアルエディタ無効
function my_off_ve_in_page(){
    global $typenow;
    if( in_array( $typenow, array( 'mw-wp-form' ) ) ){
        add_filter('user_can_richedit', 'my_off_ve_filter');
    }
}
function my_off_ve_filter(){
    return false;
}
add_action( 'load-post.php', 'my_off_ve_in_page' );
add_action( 'load-post-new.php', 'my_off_ve_in_page' );

// パス置換
function replaceImagePath($arg) {
	$content = str_replace( '"./assets/img/', '"' . get_template_directory_uri() . '/assets/img/', $arg );
	return $content;
}
add_action( 'the_content', 'replaceImagePath' );

	
// アイキャッチ画像の有効化
add_theme_support( 'post-thumbnails' );