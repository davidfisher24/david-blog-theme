<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>

	<?php wp_head();?>
</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top page_header animated">
	  <div class="container">
	  	<a class="navbar-brand page_logo" href="<?php bloginfo('wpurl');?>">
	  		<?php echo get_bloginfo( 'name' ); ?>
	  	</a>
		<nav class="blog-nav navbar-nav">
			<?php wp_list_pages( '&title_li='); ?>
		</nav>
	  </div>
	</nav>

	



	<div class="container">

		<div class="blog-header">
			<h1 class="blog-title"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
			<p class="lead blog-description">
				<?php echo get_bloginfo( 'description' ); ?>
			</p>
		</div>
