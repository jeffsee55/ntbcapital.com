<form role="search" method="get" class="pull-right form-inline" action="<?= esc_url(home_url('/')); ?>">
  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Search</label>
    <div class="input-group">
      <div class="input-group-addon search-addon"><i class="material-icons">search</i></div>
      <input type="text" class="search-input form-control" value="<?= get_search_query(); ?>" name="s" placeholder="<?php _e('Search', 'sage'); ?> <?php bloginfo('name'); ?>" required>
    </div>
    <input type="submit" class="sr-only form-control btn btn-default"></input>
  </div>
</form>
