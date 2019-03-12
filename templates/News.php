<?php
/**
 * Template Name: Новости
 */

get_header();
?>
	<!-- header_end-->
	<div class="main-content">
		<div class="content-wrapper">
			<div class="content">
				<h1 class="title-page"><?php the_title();?></h1>
				<div class="posts-list">
					<?php
					$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
					query_posts(
						[
							'post_type' => ['post'],
							'paged' => $paged,
						]
					);

					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							?>
							<!-- post-mini-->
							<div class="post-wrap">
								<div class="post-thumbnail">
									<?= get_the_post_thumbnail( get_the_ID(), 'medium', [ 'class' => 'thumbnail__image' ] ); ?>
								</div>
								<div class="post-content">
									<div class="post-content__post-info">
										<div class="post-date"><?= get_the_date(); ?></div>
									</div>
									<div class="post-content__post-text">
										<div class="post-title">
											<?= get_the_title(); ?>
										</div>
										<p>
											<?php the_excerpt(); ?>
										</p>
									</div>
									<div class="post-content__post-control"><a href="<?= get_permalink(); ?>"
									                                           class="btn-read-post">Читать
											далее
											>></a></div>
								</div>
							</div>
							<!-- post-mini_end-->
						<?php } // end while

					} // end if
					?>
				</div>
				<div class="pagenavi-post-wrap">

					<?php echo paginate_links( [
						'prev_text' => '<i class="icon icon-angle-double-left"></i>',
						'next_text' => '<i class="icon icon-angle-double-right"></i>'
					] ); ?>
				</div>

			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer();