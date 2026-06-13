<?php
/**
 * Main plugin class.
 *
 * @package MariuszKowalPortfolioPlugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * MAIN PLUGIN SHELL.
 */
class MariuszKowal_Portfolio_Plugin {
	/**
	 * REGISTER PLUGIN HOOKS.
	 */
	public function init() {
		add_action( 'init', array( $this, 'register_project_post_type' ) );
		add_action( 'init', array( $this, 'register_project_category_taxonomy' ) );
	}

	/**
	 * RUN PLUGIN ACTIVATION.
	 */
	public static function activate() {
		self::register_project_post_type();
		self::register_project_category_taxonomy();
		flush_rewrite_rules();
	}

	/**
	 * RUN PLUGIN DEACTIVATION.
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}

	/**
	 * REGISTER PROJECT CUSTOM POST TYPE.
	 */
	public static function register_project_post_type() {
		$labels = array(
			'name'                  => 'Projekty',
			'singular_name'         => 'Projekt',
			'menu_name'             => 'Portfolio',
			'name_admin_bar'        => 'Projekt',
			'add_new'               => 'Dodaj nowy',
			'add_new_item'          => 'Dodaj nowy projekt',
			'new_item'              => 'Nowy projekt',
			'edit_item'             => 'Edytuj projekt',
			'view_item'             => 'Zobacz projekt',
			'all_items'             => 'Wszystkie projekty',
			'search_items'          => 'Szukaj projektow',
			'parent_item_colon'     => 'Projekt nadrzedny:',
			'not_found'             => 'Nie znaleziono projektow.',
			'not_found_in_trash'    => 'Nie znaleziono projektow w koszu.',
			'archives'              => 'Archiwum projektow',
			'attributes'            => 'Atrybuty projektu',
			'insert_into_item'      => 'Wstaw do projektu',
			'uploaded_to_this_item' => 'Przeslano do tego projektu',
			'featured_image'        => 'Obrazek wyrozniajacy projektu',
			'set_featured_image'    => 'Ustaw obrazek wyrozniajacy',
			'remove_featured_image' => 'Usun obrazek wyrozniajacy',
			'use_featured_image'    => 'Uzyj jako obrazka wyrozniajacego',
			'filter_items_list'     => 'Filtruj liste projektow',
			'items_list_navigation' => 'Nawigacja listy projektow',
			'items_list'            => 'Lista projektow',
		);

		$args = array(
			'labels'             => $labels,
			'description'        => 'Portfolio projektow dla motywu MARIUSZKOWAL - WordPress.',
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'portfolio' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 26,
			'menu_icon'          => 'dashicons-portfolio',
			'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
			'can_export'         => true,
			'delete_with_user'   => false,
		);

		register_post_type( 'project', $args );
	}

	/**
	 * REGISTER PROJECT CATEGORY TAXONOMY.
	 */
	public static function register_project_category_taxonomy() {
		$labels = array(
			'name'                       => 'Kategorie projektów',
			'singular_name'              => 'Kategoria projektu',
			'menu_name'                  => 'Kategorie projektów',
			'all_items'                  => 'Wszystkie kategorie',
			'edit_item'                  => 'Edytuj kategorie',
			'view_item'                  => 'Zobacz kategorie',
			'update_item'                => 'Zaktualizuj kategorie',
			'add_new_item'               => 'Dodaj nowa kategorie',
			'new_item_name'              => 'Nazwa nowej kategorii',
			'parent_item'                => 'Kategoria nadrzędna',
			'parent_item_colon'          => 'Kategoria nadrzędna:',
			'search_items'               => 'Szukaj kategorii',
			'popular_items'              => 'Popularne kategorie',
			'separate_items_with_commas' => 'Oddziel kategorie przecinkami',
			'add_or_remove_items'        => 'Dodaj lub usun kategorie',
			'choose_from_most_used'      => 'Wybierz sposrod najczesciej uzywanych',
			'not_found'                  => 'Nie znaleziono kategorii.',
			'no_terms'                   => 'Brak kategorii',
			'items_list_navigation'      => 'Nawigacja listy kategorii',
			'items_list'                 => 'Lista kategorii',
			'back_to_items'              => 'Powrot do kategorii',
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'hierarchical'       => true,
			'show_ui'            => true,
			'show_admin_column'  => true,
			'show_in_nav_menus'  => true,
			'show_tagcloud'      => false,
			'show_in_rest'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'project-category' ),
		);

		register_taxonomy( 'project-category', array( 'project' ), $args );
	}
}
