<form role="search" id="searchform" class="input-group" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
	<input type="text" class="form-control" name="s" placeholder="<?php _e( 'Search...', 'sawana' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
	<span class="input-group-btn">
		<button class="btn btn-default"><i class="fa fa-search"></i></button>
	</span>
</form>