<form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="d-flex flex-column">
        <label class="screen-reader-text" for="s"><?php esc_attr_x( 'Search for:', 'label', 'aweco' ); ?></label>
        <input class="form-control mb-3 rounded-pill p-2" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
        <input class="btn btn-outline-success mx-auto" type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button', 'aweco' ); ?>" />
    </div>
</form>

