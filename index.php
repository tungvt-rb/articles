<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">

	<title>Creative Boom - Blogs</title>

	<meta name="description" content="Landing page template design.">
	<meta name="keywords" content="design, html, css, responsive, template.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="Tungvt">
	<link rel="icon" type="favicon" href="#">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="wrapper">
		<div class="g-row">
			<div class="one-third">
				<h1 class="logo"><a href="#">Creative Boom</a></h1>
			</div>
			<div class="two-thirds">
				<ul class="nav">
					<li><a href="#">About</a></li>
					<li><a href="#">Inspiration</a></li>
					<li><a href="#">Tips</a></li>
					<li><a href="#">Resources</a></li>
					<li><a href="#">Features</a></li>
				</ul><!-- .nav -->
			</div>
			<div class="clear"></div>

			<div class="post-container">
				<?php
					$post_types = array('article', 'tutorial', 'product');
					$images = array('infinite-scrolling-featured.jpg', 
									'timeless-design.jpg', 
									'website-layout-ideas.png', 
									'hd-design.png',
									'species-pieces.jpg',
									'speed.png',
									'tooltip.jpg',
									'robot-sculptures.jpg',
									'featured-list-icons-columns-preview.png',
									'featured-hover-details-panel.jpg',
									'css-specificity.jpg'
								);
					$count = 0;
					for($i=0;$i<6;$i++) {
						$count++;
						$post_type = $post_types[mt_rand(0, count($post_types) - 1)];
						$image = $images[rand(0, count($images) - 1)];
				?>
				<div class="one-third post-wrapper <?php echo $post_type ?>">
					<div class="post-thumb-wrapper">
						<a href="articles/5-website-layout-ideas-that-never-get-old/5-website-layout-ideas-that-never-get-old.html" class="thumb">
							<img src="images/<?php echo $image ?>">
							<div class="thumb-overlay">
								<span class="thumb-overlay-btn"><span class="fa fa-link"></span> View</span>
							</div>
							<div class="image-cover"></div>
						</a>
					</div><!-- .post-thumb-wrapper -->
					<div class="post-title">
							<h2>
								<a href="articles/5-website-layout-ideas-that-never-get-old/5-website-layout-ideas-that-never-get-old.html">
									<i class="fa fa-video-camera post-title-icon"></i>
									5 website layout ideas that never get old
								</a>
							</h2>
					</div><!-- .post-title -->
					<div class="post-info">
						<p>In this article, we will discuss:<br>
						Lorem ipsum dolor set amit, consectetur adipiscing elit. In cursus tincidunt magna, vel varius urna fringilla a.</p>
					</div><!-- .post-info -->
					<div class="post-meta">
						<ul>
							<li><a href="#"><i class="fa fa-user-circle"></i>Frank Jr.</a></li>
							<li><a href="#"><i class="fa fa-calendar"></i>Nov 16, 2017</a></li>
							<li><a href="#"><i class="fa fa-comments"></i>Comments</a></li>
						</ul>
					</div><!-- .post-meta -->
				</div><!-- .post-wrapper -->

				<?php
						echo ($count%3==0) ? '<div class="clear"></div>' : '';
					}
				?>

				<div class="full-width">
					<div class="pagination">
						Showing 21-40 of 47 item(s)
						<span class="divider-vertical">|</span>
						<strong>Page:</strong>
						<a href="#" title="Go to page 1" class="prev"><span><i class="fa fa-angle-double-left"></i> Previous</span></a>
						<a href="#" title="Go to page 1" class="page-number"><span>1</span></a>
						<span class="page-number current-page">2</span>
						<a href="#" title="Go to page 3" class="page-number"><span>3</span></a>
						<a href="#" title="Go to page 3" class="next"><span>Next <i class="fa fa-angle-double-right"></i></span></a>
					</div><!-- .pagination -->
				</div>
			</div><!-- .post-container -->

		</div>
	</div><!-- .wrapper -->
</body>
</html>