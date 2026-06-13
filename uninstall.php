<?php
/**
 * Plugin uninstall handler.
 *
 * @package MariuszKowalPortfolioPlugin
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

require_once __DIR__ . '/includes/class-mariuszkowal-portfolio-plugin.php';

MariuszKowal_Portfolio_Plugin::register_project_post_type();
MariuszKowal_Portfolio_Plugin::register_project_category_taxonomy();

// DELETE ALL PROJECT POSTS.
$project_posts = get_posts(
	array(
		'post_type'      => 'project',
		'post_status'    => 'any',
		'posts_per_page' => -1,
		'fields'         => 'ids',
	)
);

foreach ( $project_posts as $project_post_id ) {
	wp_delete_post( $project_post_id, true );
}

// DELETE ALL PROJECT CATEGORY TERMS.
$project_category_terms = get_terms(
	array(
		'taxonomy'   => 'project-category',
		'hide_empty' => false,
		'fields'     => 'ids',
	)
);

if ( ! is_wp_error( $project_category_terms ) ) {
	foreach ( $project_category_terms as $project_category_term_id ) {
		wp_delete_term( $project_category_term_id, 'project-category' );
	}
}

flush_rewrite_rules();
