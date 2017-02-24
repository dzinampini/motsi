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

	<div class="blog-masthead">
		<div class="container">
			<nav class="blog-nav">
				<?php // wp_list_pages( '&title_li=');  ?> <!-- what originally should be there to cover for menu-->

				<!-- my navigationbar starts -->
				<div class="navbar navbar-fixed-top navbar-default" role="navigation">
					<div class="container">
						<div class="navbar-header">
							<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon icon-bar"></span>
								<span class="icon icon-bar"></span>
								<span class="icon icon-bar"></span>
							</button>
							<a href="#" class="navbar-brand"><img src="resources/images/logo.jpg" class="img-responsive" alt="MyTechCompany logo"></a>
						</div>
						<div class="collapse navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#" class="smoothScroll">Home</a></li>
								<li><a href="#" class="smoothScroll">About</a></li>
								<li><a href="#" class="smoothScroll dropdown" data-toggle="dropdown" class="dropdown-toggle">Solutions <i class="fa fa-chevron-down"></i></a>
									<ul class="dropdown-menu">
			                            <li><a href="#">Service 1</a></li>
			                            <li><a href="#">Service 2</a></li>
			                            <li><a href="#">Service 3</a></li>
			                            <li><a href="#">Service 4</a></li>
			                            <li><a href="#">Service 5</a></li>
		                        	</ul>
								</li>
								<li><a href="#" class="smoothScroll">Contact</a></li>
								<li><a href="#" class="smoothScroll">Blog</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end navigation -->

				<div class="clear_space"></div>
			</nav>
		</div>
	</div>

	<div class="container main_content">

		<!--what a real wp author would put-->

		<!-- <div class="blog-header">
			<h1 class="blog-title">
				<a href="<?php bloginfo('wpurl');?>"><?php // echo get_bloginfo( 'name' ); ?></a>
			</h1>
			<p class="lead blog-description">
				<?php // echo get_bloginfo( 'description' ); ?>
			</p>
		</div> -->


		
