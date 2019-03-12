<?php
get_header();
?>
<div class="main-content">
    <div class="content-wrapper">
		<?php
		if ( have_posts() ) {
		while ( have_posts() ) {
		the_post();
		?>
        <div class="content">
            <div class="article-title title-page">
				<?php the_title(); ?>
            </div>
            <div class="article-image">
				<?php the_post_thumbnail(); ?>
            </div>
            <div class="article-info">
                <div class="post-date"><?php the_date(); ?></div>
            </div>
            <div class="article-text">
				<?php the_content(); ?>
            </div>
            <div class="article-pagination">
				<?php
				echo getSinglePagination( true );
				echo getSinglePagination( true, '', false );
				?>
            </div>
			<?php
			}

			}
			?>
        </div>
		<?php get_sidebar(); ?>
    </div>
</div>


<?php get_footer(); ?>
