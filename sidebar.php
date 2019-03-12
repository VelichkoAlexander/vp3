<!-- sidebar-->
<div class="sidebar">
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Теги</div>
        <div class="sidebar-item__content">
            <ul class="tags-list">
				<?php
				$args              = array(
					'taxonomy'   => 'post_tag',
					'hide_empty' => 0
				);
				$tags              = get_terms( $args );
				$class_name_for_a  = 'tags-list__item__link';
				$class_name_for_li = 'tags-list__item';


				if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
					shuffle( $tags );
					foreach ( array_slice( $tags, 0, 6 ) as $tag ) {
						printf( '<li class="%1$s"><a class="%2$s" href="%3$s">%4$s</a></li>',
							sanitize_html_class( $class_name_for_li ),
							sanitize_html_class( $class_name_for_a ),
							get_tag_link( $tag->term_id ),
							sprintf( __( '%s' ), $tag->name )
						);
					}
				}
				?>
            </ul>
        </div>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="category-list">
				<?php
				wp_list_categories( array(
					'orderby'    => 'name',
					'show_count' => 0,
					'echo'       => 1,
					'title_li'   => ''
				) );
				?>

            </ul>
        </div>
    </div>
    <div class="sidebar__sidebar-item">
        <div class="sidebar-item__title">Календарь</div>
        <?php if ( is_active_sidebar( 'home_right_1' ) ) : ?>
        <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'home_right_1' ); ?>
        </div><!-- #primary-sidebar -->
        <?php endif; ?>
    </div>
</div>