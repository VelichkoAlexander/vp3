<?php
get_header();

?>


    <div class="content-wrapper">
        <div class="content">
            <h1 class="title-page"><?php the_title(); ?></h1>
			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					the_content();
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'test' ),
						'after'  => '</div>',
					) );
				}
			}
			echo paginate_links();
			?>
<!--            <div class="page-navigation">-->
<!--                <div class="page-navigation-wrap"><a href="#" class="page-navigation__prev-page"><i-->
<!--                                class="icon icon-angle-double-left"></i>Предыдущая статья</a></div>-->
<!--                <div class="page-navigation-wrap"><a href="#" class="page-navigation__next-page">Сдедующая статья<i-->
<!--                                class="icon icon-angle-double-right"></i></a></div>-->
<!--            </div>-->
        </div>

		<?php get_sidebar(); ?>
    </div>
<?php get_footer();
