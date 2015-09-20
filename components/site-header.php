<?php
tha_header_before(); ?>

    <header <?php hybrid_attr('header'); ?>>

        <?php tha_header_top(); ?>

            <div <?php hybrid_attr('branding'); ?>>

                <?php if( '1' == get_theme_mod( 'svg_logo' ) ) { ?>
                    <a class="logo-image" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php get_template_part( 'images/svg', 'logo' ); ?>
                    </a>
                <?php } ?>
                <?php hybrid_site_title(); ?>
                <?php hybrid_site_description(); ?>


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

            </div>

            <?php hybrid_get_menu('primary'); ?>

        <?php tha_header_bottom(); ?>

    </header>

<?php tha_header_after(); ?>
