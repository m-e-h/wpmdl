<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
                  mdl-textfield--floating-label mdl-textfield--align-right">
    <label class="mdl-button mdl-js-button mdl-button--icon" for="sample6">
      <i class="material-icons">search</i>
    </label>
    <div class="mdl-textfield__expandable-holder">
      <input class="mdl-textfield__input p0 border-none bg-lighten-3" type="search" value="<?= get_search_query(); ?>" name="s" id="sample6" />
    </div>
  </div>
</form>
