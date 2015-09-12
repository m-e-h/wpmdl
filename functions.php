<?php

//use Bempress\AttrTrumps;



add_action( 'after_setup_theme', 'wpmdl_setup' );
add_action( 'wp_enqueue_scripts', 'wpmdl_scripts' );







function wpmdl_setup() {
	attr_trumps( array(


		'body'                    => '',
		'site_container'          => 'mdl-layout__content',
		'container'               => '',
		'container_header'        => 'mdl-layout__header-row',
		'container_wide'          => 'mt0 container--full',
		'row'                     => '',
		'row_layout'              => 'mdl-grid',
		'row_layout_sidebar_l'    => 'mdl-grid grid--rev flex',
		'row_layout_sidebar_r'    => 'mdl-grid flex',

		// SITE HEADER
		'header'                  => 'mdl-layout__header is-casting-shadow',
		'branding'                => '',
		'site_title'              => 'mdl-layout-title color-inherit',
		//'site_description'        => 'h3 bold m0 muted',

		// CONTENT
		'content'                 => 'mdl-cell mdl-cell--12-col',
		'content_with_sidebar'    => 'mdl-cell mdl-cell--8-col',
		//'content_archive'         => 'flex flex-wrap flex-justify',
		// ENTRY
		'post'                    => '',
		//'post_archive'            => 'br bg-white mb2 mb3@md pb2 pb3@md flex-auto u-1/2@md',

		'page_header'             => 'u-1/1 center',

		'entry_title'             => 'h2 lh-1 px2 px3@md color-inherit muted',
		'page_title'    		  => 'h1 m0',
		'archive_description'     => '',

		'entry_header'            => 'container',
		'entry_content'           => 'py4 px3 mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800',
		'entry_content_wide'      => '',
		//'entry_summary'           => 'container px2 px3@md',
		//'entry_footer'            => 'container',

		'nav_single'              => '',
		'nav_archive'             => '',

		// ENTRY META
		'entry_author'            => 'inline-block px1',
		'entry_published'         => 'inline-block',
		'entry_terms'             => '',

		// NAVIGATION
		'menu_primary'            => 'mdl-navigation',

		// SIDEBAR
		'sidebar_primary'         => 'mdl-cell',
		'sidebar_footer'          => 'mdl-mega-footer--middle-section',
		'sidebar_horizontal'      => 'mdl-grid mdl-cell mdl-cell--12-col',
		'sidebar_right'           => 'mdl-cell--4-col',
		'sidebar_left'            => 'mdl-cell--4-col',

		// COMMENTS
		//'comments_area'           => 'bg-white br p2 p3@md mb2 mb3@md',

		// FOOTER
		'footer'                  => 'bg-1--light white color-inherit mdl-mega-footer',

		'menu_item'                 => 'mdl-navigation__link p0 color-inherit',
		'menu_link'                 => 'mdl-navigation__link',
		'current_page_item'         => 'is-active',
		'current_page_parent'       => 'is-active',
		'current_page_ancestor'     => 'is-active',
		'current-menu-item'         => 'is-active',
		'menu-item-has-children'    => 'has-dropdown js-dropdown',
		'sub-menu'                  => 'dropdown animated slideInUp',

		'gv_container'              => 'grid',
		'gv_entry'                  => 'inline-block u-1/3 u-1/4@md',

	));


	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'E9EBE7',
			'default-image' => '',
		)
	);
	add_filter( 'theme_mod_primary_color', 'wpmdl_primary_color' );
	add_filter( 'theme_mod_secondary_color', 'wpmdl_secondary_color' );
	add_filter( 'theme_mod_accent_color', 'wpmdl_accent_color' );

}



/**
 * Enqueue scripts and styles.
 */
function wpmdl_scripts() {
	wp_enqueue_style(
        'mdl-style',
        '//storage.googleapis.com/code.getmdl.io/1.0.4/material.indigo-teal.min.css'
    );


	// wp_enqueue_script(
    //     'mdl-script',
    //     'https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js',
    //     false, null, true
    // );


}


function wpmdl_primary_color( $hex ) {
    return $hex ? $hex : '#3F51B5';
}
function wpmdl_secondary_color( $hex ) {
    return $hex ? $hex : '#009688';
}
function wpmdl_accent_color( $hex ) {
    return $hex ? $hex : '#C62828';
}


//add_action( 'wp_enqueue_scripts', 'meh_remove_scripts', 20 );
function meh_remove_scripts() {
    wp_dequeue_style( 'parent' );
}

function abraham_widgets() {
    register_sidebar(array(
		'id'            => 'primary',
		'name'          => __( 'Primary', 'abraham' ),
		'before_title'  => '<h2 class="mdl-card__title widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<section class="mdl-card mdl-cell mdl-shadow--2dp">',
		'after_widget'  => '</section>',
	));

	register_sidebar(array(
		'id'            => 'footer',
		'name'          => __( 'Footer', 'abraham' ),
		'before_widget' => '<section class="mdl-mega-footer__drop-down-section"><div>',
		'before_title'  => '</div><input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked><h2 class="widget-title mdl-mega-footer--heading">',
		'after_title'   => '</h2><div class="mdl-mega-footer--link-list">',
		'after_widget'  => '</div></section>',
	));
}
add_action('widgets_init', 'abraham_widgets');
