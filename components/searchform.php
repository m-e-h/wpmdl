<form role="search" method="get" class="search-form mdl-textfield mdl-js-textfield mdl-textfield--expandable" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="mdl-button mdl-js-button mdl-button--icon" for="s">
        <i class="material-icons">search</i>
    </label>
    <label class="mdl-textfield__expandable-holder">
        <span class="screen-reader-text"><?php _ex( 'Search for:', 'label', 'bempress' ); ?></span>
        <input type="search" id="s" class="search-field p0 border-none bg-lighten-3 mdl-textfield__input" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'bempress' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
    </label>
</form>
