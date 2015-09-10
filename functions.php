<?php

//use Bempress\AttrTrumps;



add_action( 'after_setup_theme', 'wpmdl_setup' );
add_action( 'wp_enqueue_scripts', 'wpmdl_scripts' );







function wpmdl_setup() {
	attr_trumps( array(
		//'site_container'          => 'mt2 mt3@md block mdl-layout__content',
		// 'container'               => '',
		// 'container_header'        => 'flex flex-column@sm flex-justify flex-center',
		// 'container_wide'          => 'container--wide',
		// 'row'                     => '',
		//'row_layout'              => 'grid page-content',
		// 'row_layout_sidebar_l'    => 'grid grid--rev mxn3@md',
		//'row_layout_sidebar_r'    => 'grid mxn3@md page-content',
		//
		// // SITE HEADER
		'header'                  => 'mdl-layout__header bg-1 flex',
		'branding'                => 'mdl-layout__header-row',
		'site_title'              => 'mdl-layout-title',
		// 'site_description'        => 'h3 bold m0 muted',
		//
		// // CONTENT
		// 'content'                 => 'grid__item',
		// 'content_with_sidebar'    => 'grid__item px3@md u-2/3@md',
		//
		// // ENTRY
		// 'post'                    => '',
		'post_archive'            => 'mdl-shadow--2dp',
		//
		//'page_header'             => 'u-1/1 center',
		//
		// 'entry_title'             => 'h2 mt0 color-inherit muted',
		// 'page_title'    		  => 'h1 m0',
		// 'archive_description'     => '',
		//
		// 'entry_header'            => 'container mb2',
		'entry_content'           => 'mdl-shadow--4dp',
		'entry_summary'           => 'static',
		// 'entry_footer'            => 'container',
		//
		// 'nav_single'              => '',
		// 'nav_archive'             => '',
		//
		// // ENTRY META
		// 'entry_author'            => 'inline-block px1',
		// 'entry_published'         => 'inline-block',
		// 'entry_terms'             => '',
		//
		// // NAVIGATION
		'menu_primary'            => 'flex-justify-end mdl-layout__header-row',
		//
		// // SIDEBAR
		// 'sidebar_primary'         => 'grid__item',
		// 'sidebar_footer'          => 'pt2 pt3@md',
		// 'sidebar_horizontal'      => 'flex flex-wrap flex-justify',
		// 'sidebar_right'           => 'u-1/3@md',
		// 'sidebar_left'            => 'u-1/3@md',
		//
		// 'widgets'                 => 'widget br mb2 mb3@md p2 ml1 mr1 list-reset flex-auto',
		'primary_widgets'         => 'bg-white mdl-shadow--2dp',
		// 'footer_widgets'          => 'bg-darken-1',
		//
		// // COMMENTS
		'comments_area'           => 'bg-white p3 p4@md mb2 mb3@md mdl-shadow--2dp',
		//
		// // FOOTER
		// 'footer'                  => 'bg-2',
		//
		// 'menu_link'                 => 'btn'
	));
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
