<?php
if (has_nav_menu('primary')) : ?>
<div class="mdl-layout__header-row mdl-layout__header-row--bottom">
  <!-- Navigation -->

        <nav <?php hybrid_attr('menu', 'primary'); ?>>

            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container'      => '',
                    'depth'          => 2,
                    'menu_id'        => 'menu-primary__list',
                    'menu_class'     => 'menu__list menu-primary__list',
                    'fallback_cb'    => '',
                    'items_wrap'     => '%3$s'
                ));
            ?>
        </nav>
<i class="material-icons scrollindicator scrollindicator--right">keyboard_arrow_right</i>
<i class="material-icons scrollindicator scrollindicator--left">keyboard_arrow_left</i>
</div>
<?php
endif;
