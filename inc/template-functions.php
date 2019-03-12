<?php

function getSinglePagination( $in_same_term = false, $excluded_terms = '', $previous = true, $taxonomy = 'category' ) {
	$content = '';
	$post    = $previous ?
		get_adjacent_post()
		: get_adjacent_post( $in_same_term, '', false, $taxonomy );
	$id      = $post->ID;
	$date    = get_the_date( '', $post );
	$title   = get_the_title($id);
	$link    = get_permalink( $id );
	$image   = get_the_post_thumbnail( $post, 'thumbnail', [ 'class' => 'preview-article__image' ] );

	if ( $previous ) {
		$content = '<div class="article-pagination__block pagination-prev-left">
                <a href="' . $link . '" class="article-pagination__link">
                  <i class="icon icon-angle-double-left"></i>
                  Предыдущая статья
                </a>
                <div class="wrap-pagination-preview pagination-prev-left">
                  <div class="preview-article__img">
                  '.$image.'
                  </div>
                  <div class="preview-article__content">
                    <div class="preview-article__info"><a href="#" class="post-date">' . $date . '</a></div>
                    <div class="preview-article__text">' . $title . '</div>
                  </div>
                </div>
              </div>';
	} else {
		$content = '<div class="article-pagination__block pagination-prev-right">
<a href="' . $link . '" class="article-pagination__link">Сдедующая статья
<i class="icon icon-angle-double-right"></i></a>
                <div class="wrap-pagination-preview pagination-prev-right">
                  <div class="preview-article__img">
                    '.$image.'
                  </div>
                  <div class="preview-article__content">
                    <div class="preview-article__info"><a href="#" class="post-date">' . $date . '</a></div>
                    <div class="preview-article__text">' . $title . '</div>
                  </div>
                </div>
              </div>';
	}


	return $content;


}