<?php
if (has_nav_menu('logged-in')) : ?>

<div class="mdl-layout__drawer">
    <nav <?php hybrid_attr('menu', 'logged-in'); ?>>

        <?php
            wp_nav_menu(array(
                'theme_location' => 'logged-in',
                'container'      => '',
                'depth'          => 2,
                'menu_id'        => 'menu-logged-in__list',
                'menu_class'     => 'menu__list menu-logged-in__list inline-block',
                'fallback_cb'    => '',
                'items_wrap'     => '%3$s'
            ));
        ?>
        <?php get_search_form(); ?>
    </nav>
</div>
<?php
endif;
