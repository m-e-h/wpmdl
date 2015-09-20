<?php
if (!is_user_logged_in()) {
    return;
} ?>

<div class="logged-in-drawer mdl-layout__drawer u-bg-dark-1 u-text-white u-color-inherit">
    <header class="drawer-header u-text-right">
        <div class="account-dropdown u-flex u-flex-center u-px1">
            <?php
            $current_user = wp_get_current_user();

            echo '<div class="u-py3">' . $current_user->user_email . '</div>';
            ?>
        </div>

        <?php


        if (class_exists('SimpleFavorites')) {
            global $wp_query;
            $post_id = $wp_query->get_queried_object_id();
            $post_link = get_permalink($post_id);
            ?>
        <?php the_favorites_button($post_id); ?>
        <button id="accbtn" class="u-ml-auto mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
            <i class="material-icons" role="presentation">arrow_drop_down</i>
            <span class="visuallyhidden">Accounts</span>
        </button>
        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="accbtn">

<?php            // Method 1: simple foreach loop
$favorites = get_user_favorites();
if ( $favorites ) : // This is important: if an empty array is passed into the WP_Query parameters, all posts will be returned
$favorites_query = new WP_Query(array(
	'post_type' => array('post', 'page'),
	'posts_per_page' => -1,
	'post__in' => $favorites
));
if ( $favorites_query->have_posts() ) : while ( $favorites_query->have_posts() ) : $favorites_query->the_post();?>
	<a href="<?php the_permalink(); ?>" class="u-text-gray mdl-menu__item"><?php the_title(); ?></a>
<?php
endwhile;
endif;
wp_reset_postdata();
endif;
?>
        </ul>
        <?php } ?>

    </header>
    <aside class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
        <?php hybrid_get_menu('logged-in'); ?>
        <?php dynamic_sidebar('drawer'); ?>
        <div class="mdl-layout-spacer"></div>
        <?php get_search_form(); ?>
    </aside>
</div>