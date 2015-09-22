<?php

//use Bempress\AttrTrumps;



add_action( 'after_setup_theme', 'wpmdl_setup' );
add_action( 'wp_enqueue_scripts', 'wpmdl_scripts' );
add_action( 'tha_header_after', 'logged_in_drawer' );
add_action( 'tha_header_bottom', 'mdl_search_form' );
add_action( 'tha_header_before', 'header_right_widget' );





function wpmdl_setup() {
	attr_trumps( array(


		'body'                    	=> '',
		'site_container'          	=> 'mdl-layout mdl-js-layout mdl-layout--fixed-header',
		'site_container_loggedin' 	=> 'mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-drawer',
		'layout_container'       	=> 'mdl-layout__content',
		'layout_container_wide'   	=> 'mdl-layout__content',
		'layout'              		=> 'u-p0 mdl-grid u-max-width',
		'layout_wide'              	=> 'u-p0 mdl-grid',
		'layout_sidebar_l'    		=> 'u-p0 mdl-grid u-max-width u-flex-rev',
		'layout_sidebar_r'    		=> 'u-p0 mdl-grid u-max-width',

		// SITE HEADER
		'header'                  	=> 'u-flex-justify-end u-static mdl-layout__header mdl-layout__header--waterfall',
		'branding'                	=> 'mdl-layout__header-row',
		'site_title'              	=> 'mdl-layout-title color-inherit u-fixed@md',
		//'site_description'        => 'h3 bold m0 muted',

		// CONTENT
		'content'                 	=> 'mdl-cell mdl-grid u-m0 u-p0 u-1/1',
		'content_with_sidebar'    	=> 'mdl-cell mdl-grid u-m0 u-p0 u-1/1 u-2/3@md',
		//'content_archive'         => 'flex flex-wrap flex-justify',
		// ENTRY
		'post'                    	=> 'mdl-cell mdl-cell--12-col mdl-shadow--4dp mdl-card u-py4 u-px3 u-text-gray',
		'post_archive'            	=> 'mdl-cell--6-col-desktop',

		'page_header'             	=> 'u-1/1 u-text-center',

		'entry_title'             	=> 'mdl-card__title-text',
		'page_title'    		  	=> 'u-h1 u-m0 u-py3',
		'archive_description'     	=> '',

		'entry_header'            	=> 'mdl-card__title u-pt0 u-mxn2',
		'entry_content'           	=> '',
		'entry_content_wide'      	=> '',
		'entry_summary'           	=> 'container px2 px3@md',
		'entry_footer'            	=> 'container',

		'nav_single'              	=> '',
		'nav_archive'             	=> '',

		// ENTRY META
		'entry_author'            	=> '',
		'entry_published'         	=> '',
		'entry_terms'             	=> '',

		// NAVIGATION
		'menu_all'                	=> 'mdl-navigation',
		'menu_primary'            	=> 'u-ml-auto',

		// SIDEBAR
		'sidebar_primary'         	=> 'mdl-cell mdl-grid u-m0 u-p0',
		'sidebar_footer'          	=> 'mdl-mega-footer--middle-section',
		'sidebar_horizontal'      	=> 'mdl-grid mdl-cell u-1/1',
		'sidebar_right'           	=> 'u-1/1 u-1/3@md',
		'sidebar_left'            	=> 'u-1/1 u-1/3@md',

		// COMMENTS
		'comments_area'           	=> '',

		// FOOTER
		'footer'                  	=> 'u-bg-light-1 u-text-white u-color-inherit mdl-mega-footer',

		'menu_item'                 => 'u-list-reset u-p0 u-color-inherit',
		'menu_link'                 => 'u-hover-frost-2 u-opacity1 mdl-navigation__link',
		'current_page_item'         => 'is-active',
		'current_page_parent'       => 'is-active',
		'current_page_ancestor'     => 'is-active',
		'current-menu-item'         => 'is-active',
		'menu-item-has-children'    => 'has-dropdown js-dropdown',
		'sub-menu'                  => 'dropdown animated slideInUp',

		'gv_container'              => 'mdl-grid',
		'gv_entry'                  => 'mdl-cell mdl-cell--4-col mdl-card mdl-shadow--2dp',

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
	wp_enqueue_script(
        'mdl-script',
        '//storage.googleapis.com/code.getmdl.io/1.0.4/material.min.js',
        false, null, true
    );

	wp_enqueue_script(
        'abraham_js',
        trailingslashit(get_stylesheet_directory_uri())."assets/js/main.js",
        false, false, true
    );
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
		'before_title'  => '<div class="mdl-card__title u-mtn2 u-mxn2"><h2 class="mdl-card__title-text widget-title">',
		'after_title'   => '</h2></div>',
		'before_widget' => '<section class="mdl-card mdl-cell mdl-cell--12-col mdl-shadow--2dp u-p2 u-list-reset">',
		'after_widget'  => '</section>',
	));

	register_sidebar(array(
		'id'            => 'header-right',
		'name'          => __( 'Header Right', 'abraham' ),
		'before_title'  => '<h3 class="h2 widget-title mt0">',
		'after_title'   => '</h3>',
		'before_widget' => '<section ' .hybrid_get_attr('widgets', 'header-right').'>',
		'after_widget'  => '</section>',
	));

	register_sidebar(array(
		'id'            => 'footer',
		'name'          => __( 'Footer', 'abraham' ),
		'before_widget' => '<section class="mdl-mega-footer__drop-down-section u-p2"><div>',
		'before_title'  => '</div><input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked><h2 class="widget-title u-mt0 mdl-mega-footer--heading">',
		'after_title'   => '</h2><div class="mdl-mega-footer--link-list">',
		'after_widget'  => '</div></section>',
	));

	register_sidebar(array(
		'id'            => 'drawer',
		'name'          => __( 'Drawer Widgets', 'abraham' ),
		'before_title'  => '<h3 class="mdl-card__title-text widget-title">',
		'after_title'   => '</h3>',
		'before_widget' => '<section class="u-p2 u-list-reset %2$s">',
		'after_widget'  => '</section>',
		'class'         => '',
	));
}
add_action('widgets_init', 'abraham_widgets');

function logged_in_drawer() {
	hybrid_get_sidebar('drawer');
}

function mdl_search_form() {
?>
<form class="u-ml-auto" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<!--label for="s" class="assistive-text"><?php _e( 'Search', 'my-theme' ); ?></label-->
	<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
  mdl-textfield--floating-label mdl-textfield--align-right">
		<label class="mdl-button mdl-js-button mdl-button--icon u-m0" for="header-s">
			<i class="material-icons">search</i>
		</label>
		<div class="mdl-textfield__expandable-holder">
			<input type="text" name="header-s" id="header-s" class="u-lh-2 search-field u-p0 u-border0 u-text-white u-bg-frost-1 mdl-textfield__input" />
			<label class="u-m0 u-text-white u-opacity mdl-textfield__label" for="header-s"><?php _e( 'Search', 'my-theme' ); ?></label>
		</div><!-- /.mdl-textfield__expandable-holder -->
	</div><!-- /.mdl-textfield -->
</form>
<?php
}


function header_right_widget() {
	return hybrid_get_sidebar('header-right');
}
