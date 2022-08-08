<?php
function woocommerce_subcats_from_parentcat_by_ID($parent_cat_ID) {

	$category = get_queried_object($parent_cat_ID);

	$category_slug = $category->name;
	$category_id = $category->term_id;
	$category_slug_nospaces = str_replace(" ", "-", $category_slug);

	$acentos = array("á", "é", "í", "ó", "ú");
	$noacentos   = array("a", "e", "i", "o", "u");
	$category_slug_sin_acentos = str_replace($acentos, $noacentos, $category_slug_nospaces);

	switch ($category_id) {
		case 601:
			$numimg = 1;
			break;
		case 599:
			$numimg = 2;
			break;
		case 602:
			$numimg = 3;
			break;
		case 1323:
			$numimg = 4;
			break;
		case 1301:
			$numimg = 5;
			break;
		case 1317:
			$numimg = 6;
			break;
		case 1046:
			$numimg = 7;
			break;
		case 1489:
			$numimg = 8;
			break;
		case 1313:
			$numimg = 9;
			break;
		case 1000:
			$numimg = 10;
			break;
		case 1490:
			$numimg = 11;
			break;
	}

    $args = array(
       'hierarchical' => 1,
       'show_option_none' => '',
       'hide_empty' => 1,
       'parent' => $parent_cat_ID,
       'taxonomy' => 'product_cat'
    );

    $subcats = get_categories($args);

    echo '<ul class="linea-subcategorias">';

    foreach ($subcats as $sc) {

		$my_query_args_of_two_cats = array(
			'post_type' => 'product',
			'tax_query' => array(
				'relation' => 'AND',
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => $category_slug
				),
				array(
					'taxonomy' => 'product_cat',
					'field' => 'slug',
					'terms' => $sc->name
				)
			),

		);
		//var_dump($my_query_args_of_two_cats);
		$my_query_of_two_cats = new WP_Query( $my_query_args_of_two_cats );
		if ( $my_query_of_two_cats->have_posts() ) {

			$scthumbnail_id = get_woocommerce_term_meta( $sc->term_id, 'thumbnail_id', true );
			$scimage = wp_get_attachment_url( $scthumbnail_id );
			echo '<a href="'. get_site_url() . '/categoria-producto/'. $sc->slug .'+'. $category_slug_sin_acentos .'"><li class="linea-item subcategoria">';
			$image_url_cmi = Categories_Multiple_Images::get_image( $sc->term_id, $numimg, "large", false);
			if ( isset($image_url_cmi)){
				echo '<img src="'. $image_url_cmi .'" alt="Tutto Pelle La collezione '.$sc->name.'"></img>';
			}
			else{
				echo '<img src="http://3.140.40.26/wp-content/uploads/woocommerce-placeholder.png" alt="Tutto Pelle La collezione"></img>';
			}

			echo '<h4>'.$sc->name.'</h4>';
			echo '</li></a>';
		}
		wp_reset_postdata();
    }
    echo '</ul>';
}
?>
