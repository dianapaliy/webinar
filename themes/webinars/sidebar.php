
<?php if ( is_active_sidebar( 'sidebar-left' ) ) { ?>
    <div class="sidebar">
        <?php dynamic_sidebar( 'sidebar-left' ); ?>
    </div>
<?php }
	else {
		echo 'Dont work sidebar';
	}
 ?>