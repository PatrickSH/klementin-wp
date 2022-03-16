<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
if ( ! class_exists( 'Klementin_wp' ) ) {
	require_once __DIR__ . '/class-klementin-wp.php';
}
if ( ! class_exists( 'Klementin_wp_menu_point' ) ) {
	require_once __DIR__ . '/class-klementin-wp-menu-point.php';
}
if ( ! class_exists( 'Klementin_wp_sub_menu_point' ) ) {
	require_once __DIR__ . '/class-klementin-wp-sub-menu-point.php';
}

if ( ! class_exists( 'Klementin_wp_view' ) ) {
	require_once __DIR__ . '/class-klementin-wp-view.php';
}
if ( ! class_exists( 'Klementin_wp_ajax' ) ) {
	require_once __DIR__ . '/class-klementin-wp-ajax.php';
}

if ( ! class_exists( 'Klementin_wp_nonce' ) ) {
	require_once __DIR__ . '/class-klementin-wp-nonce.php';
}
if ( ! class_exists( 'Klementin_wp_plugin_dependency' ) ) {
	require_once __DIR__ . '/class-klementin-wp-plugin-dependency.php';
}

Klementin_wp::init();