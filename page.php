<?php get_header(); ?>

		<div class="row">
				<div class="col-xs-6"></div>
				<div id="navbar" class="col-xs-6 p-nav">
				  <div id="handlesw" class="handle"></div>
					<nav>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
					</nav><!-- #site-navigation -->
				</div><!-- #navbar -->
		</div>
		<div class="p-main row">
			<div id="content" class="p-content col-xs-8">
			  <div id="handlenw" class="handle"></div>
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
							<div class="entry-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<?php endif; ?>

							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
						</div><!-- .entry-content -->

					</article><!-- #post -->
				<?php endwhile; ?>
			</div>
			<div class="col-xs-4"></div>
			</div>
		</div>
<?php get_footer(); ?>