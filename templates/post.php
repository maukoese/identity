
<title><?php echo( $post -> name ); ?> - <?php showOption( 'name' ); ?></title>
	<header>
		<span class="avatar"><img src="<?php echo( $post -> avatar ); ?>" height="100%" ></span>
		<h1><?php echo( $post -> name ); ?></h1>
		<article>
			<?php echo( $post -> details ); ?>
		</article>
	</header>