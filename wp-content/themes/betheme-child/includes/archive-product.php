<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version 	3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );

// GET Category ID
$category = get_queried_object();
$category_id = $category->term_id;
?>

<style>
	.archive .entry-content{
    	margin: 25px auto;
    	width: 1240px;
	}
	#filters-sf {
		border: none;
		padding: 10px;
		margin: -10px 1% 12px;
		background: #fbfbfb;
		z-index: 99!important;
		width: calc(98% - 22px);
	}
	.linea-item h3{ text-transform: uppercase; margin: 0; }
	.term-description{ padding:0; }
	li.isotope-item.product.type-product {
    	min-height: 250px !important;
	}
	.archive.tax-product_cat #Content {
		padding-top: 0px !important;
	}
	.archive.tax-product_cat h1.title {
    	padding-top: 20px;
	}
	.archive.tax-product_cat header.woocommerce-products-header {
		width: 65%;
		padding-top: 30px;
	}
	.archive.tax-product_cat #Subheader .container {
    	max-height: 240px !important;
	}
	.linea-subcategorias {
		list-style: none outside;
		display: grid;
		grid-template-columns: 4fr 4fr 4fr;
		column-gap: 10px;
		row-gap: 10px;
	}
	.contpiel {
		text-align: left;
		float: left;
		margin: 0 4px;
		max-width: calc(25% - 8px);
	}

	.woocommerce-content{ padding: 30px 0; }

	.woocommerce ul.products li.product h4, .woocommerce-page ul.products li.product h4 {
		margin-bottom: 0;
	}

	.shop-filters{ display: none; }
	.woocommerce.columns-3 ul.products li.product, .woocommerce ul.products.columns-3 li.product {
		width: calc(33.3% - 16px);
		margin: 0 8px 10px;
	}

	.subsubcat-wrapper{
		width: 50%;
		float: left;
	}
.woocommerce ul.products li.product, .woocommerce .products.related ul.products li.product, .woocommerce .products.upsells.up-sells ul.products li.product{ background: #fff; }
.woocommerce ul.products li.product .price p{ display: none; }
.product-item{ cursor: pointer; }
.product-title{ font-family: 'Futura' !important; font-size: 14px !important; text-transform: uppercase; font-weight: 600; }
.product-excerpt {
    font-family: 'Futura Light' !important;
    font-size: 13px !important;
    font-weight: 300 !important;
    letter-spacing: 1px !important;
    line-height: 1.4 !important;
    height: 80px !important;
    text-align: justify !important;
}
.woocommerce ul.products li.product h4, .woocommerce-page ul.products li.product h4 {
    margin-bottom: 0;
    line-height: 1.6;
}
.product-price{ font-family: 'Futura Light' !important; font-size: 14px !important; text-transform: uppercase !important; font-weight: 600; }
.woocommerce ul.products li.product a {
    text-decoration: none;
    font-family: 'Futura' !important;
    font-size: 9px !important;
    text-transform: uppercase;
    font-weight: 600;
}
.woocommerce ul.products li.product .desc {
    background: #fff;
    padding: 10px; text-align: left;
    height: 44px;
}
	.woocommerce ul.products li.product .desc h5 {
    font-size: 9px;
    line-height: 25px;
    font-weight: 400;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #888 !important;
    line-height: 1.3;
    margin: 0 !important;
}
.woocommerce ul.products li.product .desc .price .woocommerce-Price-amount:last-child{ display: none; }
.woocommerce ul.products li.product .desc .price .woocommerce-Price-amount:only-child{ display: block; }

.woocommerce ul.products li.product .excerpt, .woocommerce-page ul.products li.product .excerpt {
    margin: 10px 0;
    font-family: 'Futura Light' !important;
    font-size: 14px !important;
    font-weight: 300 !important;
    letter-spacing: 1px !important;
    line-height: 1.4 !important;
    text-align: justify !important;
}
.woocommerce ul.products li.product .price, .woocommerce-page ul.products li.product .price {
    margin-bottom: 0;
    font-family: 'Futura Light' !important;
    font-size: 9px !important;
    text-transform: uppercase !important;
    font-weight: 600; color: #FFF !important;
}

.price .woocommerce-Price-amount{ text-decoration: none !important; color: #666; font-size: 9px; font-weight: 600; }
.woocommerce ul.products li.product .price ins { text-decoration: auto !important ; }
bdi { text-decoration: auto !important ; }

.single_variation .price {
    font-size: 25px!important;
    margin-right: 10px;
    padding: 16px !important;
}

.desde{
    margin: 4px 3px 0 0;
    display: inline-block;
    float: left;
    line-height: 1;
    text-transform: uppercase;
    font-size: 9px; font-weight: 600;
}
	.badge-reclinable {
		width: 60px;
		right: 10px;
		top: 10px;
		position: absolute;
		font-weight: 100;
		padding: 6px 6px 3px 6px;
	}


/* Filtros */

.widget>h3 {
    font-size: 12px;
    line-height: 22px;
}
.product-search input[type="text"].product-search-field, .product-search input[type="text"].product-filter-field {
    display: inline-block;
    font-size: 11px;
    letter-spacing: 1px;
}
.product-search-filter-search form.product-search-form {
    margin-bottom: 0px !important;
}
input[type="text"].product-search-filter-price-field {
	width: 45% !important;
    display: inline-block;
    font-size: 12px;
    letter-spacing: 1px;
}

.woocommerce span.soldout {
    left: 0;
    position: absolute;
    top: 0;
    transform: none;
    text-align: center;
    background: #00000040;
    padding: 0;
    width: 100%;
    color: #fff !important;
    height: 124%;
    display: table;
}
.woocommerce span.soldout h4 {
    font-size: 16px;
    line-height: 1;
    border: none !important;
    padding: 0;
		color: #fff;
    border-radius: 0 !important;
    height: 100%;
    display: table-cell;
    width: 100%;
    vertical-align: middle;
}

	#filters-sf .element{
		padding: 10px;
		border: #666 solid 1px;
		position: absolute;
		width: 600px;
		background: #fff;
		z-index: 22;
		margin: 10px 0 0 -11px;
		display: none;
	}
	#filters-sf .widget {
		padding-bottom: 0px;
		margin-top: 0px;
		margin-bottom: 0px;
		position: relative;
	}
	#filters-sf .widgettitle { display: none; }
	#filters-sf a{
    	margin: 0 10px 0 0;
	}
	#filters-sf .widget .product-search-filter-search form.product-search-form {
    	margin-bottom: 0 !important;
	}
	.product-search-filter-search-heading, .product-search-filter-price-heading, .product-search-filter-terms-heading, .product-search-filter-extras-heading, .product-search-filter-reset-heading {
    	display: none;
	}
	.product-search-filter-terms ul li a{ display: none; }
	.product-search-filter-terms ul li ul { display: block; }
	.product-search-filter-terms ul li ul li{ display: block; }
	.product-search-filter-terms ul li ul li a{ display: block; }
	.subcategoria h4{ font-weight: 400; text-align: center;  font-size: 11px;}

	.numdescuento {
    position: absolute;
    bottom: 20px;
    right: 10px;
    background: #dc2727;
		width: 45px;
		height: 45px;
    border-radius: 50%;
}
	.numdescuento p {
		margin: 0 !important;
		padding: 6px 6px 6px 9px;
		color: #fff;
		font-weight: 900;
		font-size: 12px;
		line-height: 2.9;
}




@media only screen and (max-width: 768px) {

	.archive .entry-content {
	    margin: 20px auto;
	    width: 100%;
	}

	.archive.tax-product_cat header.woocommerce-products-header {
	    width: auto;
	    padding-top: 16px;
	}

	#filters-sf {
	    border: none;
	    padding: 0;
	    margin: 0px 0 10px 0;
	    background: #fbfbfb;
	    z-index: 99!important;
	    width: 100%;
	    position: relative;
	}
	#filters-sf .element {
	    padding: 10px;
	    border: #666 solid 1px;
	    position: absolute;
	    width: 90%;
	    background: #fff;
	    z-index: 22;
	    margin: 10px 0 0 0;
	    display: none;
	}
	.linea-item {
	    width: calc(100% - 12px);
	    float: left;
	    margin: 6px 0;
	    padding: 0 6px;
	    height: 130px;
	}

	.woocommerce ul.products.columns-3 li.product {
	    width: 100% !important;
	    margin: 6px 0px !important;
	}
li.isotope-item.product.type-product {
    min-height: 190px!important;
}
.woocommerce-content {
    padding: 30px 0px 0px 0px;
}
.widget {
    padding-bottom: 20px;
    margin-top: 30px;
    position: relative;
}

	.linea-subcategorias {
		list-style: none outside;
		display: grid;
		grid-template-columns: 2fr 2fr;
		column-gap: 10px;
		row-gap: 5px;
	}


}

</style>

<div id="filters-sf">
	<a href="#" class="option" id="click-buscar">BUSCAR <?php echo do_shortcode('[icon type="icon-down-open"]'); ?></a>
	<a href="#" class="option" id="click-precio">PRECIO <?php echo do_shortcode('[icon type="icon-down-open"]'); ?></a>
	<a href="#" class="option" id="click-categoria" style="display: none;">CATEGORÍA <?php echo do_shortcode('[icon type="icon-down-open"]'); ?></a>
	<!--<a href="#" class="option" id="click-rating">RATING <?php //echo do_shortcode('[icon type="icon-down-open"]'); ?></a>-->
	<div id="filters-sf-buscar" class="element">
		<?php echo do_shortcode('[widget id="woocommerce_product_search_filter_widget-3"]'); ?>
	</div>
	<div id="filters-sf-precio" class="element">
		<?php echo do_shortcode('[widget id="woocommerce_product_search_filter_price_widget-3"]'); ?>
	</div>

		<?php
		$c_categories = array(
							array (600, 601, 599),
							array (1486, 602, 1746, 1052, 1339),
							array (1301, 1561),
							array (1053, 1046, 1317, 1339, 1313),
							array (604, 1000, 1489, 1313),
							array (1491, 1052, 1078, 1492, 1187, 1345)
							);

		foreach ( $c_categories as $c_category ){
			if ( $category_id == $c_category[0] ) {
				?>
				<style>
					#click-categoria{ display: inline-block !important;}
				</style>
				<div id="filters-sf-categoria" class="element">
					<?php
					foreach ( array_slice($c_category, 1) as $c_subcategory ){
						$tc_subcategory = get_term( $c_subcategory, 'product_cat' );
						echo "<a style='display: block;' href='https://tuttopelle.mx/categoria-producto/" . $tc_category->slug . "/" . $tc_subcategory->slug . "'>" . $tc_subcategory->name . "</a>";
					}
					?>
			 	</div>
			<?php
			}
		}
		?>

	<!--<div id="filters-sf-rating" class="element">
		<?php //echo do_shortcode('[widget id="woocommerce_product_search_filter_rating_widget-2"]'); ?>
	</div>-->
	<script>
	jQuery(function($){
		$( "#click-buscar" ).click(function(e) {
			e.preventDefault();
			$( "#filters-sf-precio, #filters-sf-categoria" ).hide();
		  	$( "#filters-sf-buscar" ).slideToggle( "medium", function() { });
		});
		$( "#click-precio" ).click(function(e) {
			e.preventDefault();
			$( "#filters-sf-buscar, #filters-sf-categoria" ).hide();
		  	$( "#filters-sf-precio" ).slideToggle( "medium", function() { });
		});
		$( "#click-categoria" ).click(function(e) {
			e.preventDefault();
			$( "#filters-sf-buscar, #filters-sf-precio" ).hide();
		 	$( "#filters-sf-categoria" ).slideToggle( "medium", function() { });
		});
		$(document).ajaxStop(function(){
			$( "#filters-sf-buscar, #filters-sf-precio, #filters-sf-categoria" ).hide();
		});
	});
	</script>
</div>

<div id="sort">
	SORT BY:
	<select id="sortselect">
		<option value="a-z">A-Z</option>
		<option value="z-a">Z-A</option>
	</select>

	<script>
	jQuery(function($){
		$('#sortselect').change(function (event) {
			var sort = $(this).val();
		});
	});
	</script>
</div>


<?php
/*
if( $category_id==599 || $category_id==600 || $category_id==601 || $category_id==602 ){
	woocommerce_subcats_from_parentcat_by_ID(1497);
	?>
	<style>
		#filters-sf{ display: none; }
	</style>
<?php
}
else */


if( $category_id==1053 ){
	echo do_shortcode('[products category="1053, 1046, 1317, 1339, 1313"]');
}
else if ( have_posts() ) {

	echo '<div class="shop-filters">';
		/**
		 * Hook: woocommerce_before_shop_loop.
		 *
		 * @hooked wc_print_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action( 'woocommerce_before_shop_loop' );
	echo '</div>';

	if (strpos($_SERVER['REQUEST_URI'], "+") !== false){
		echo "<h3 style='margin: 0 0 30px 0;'>SELECCIONA UNA COMPOSICIÓN</h3>";
	}

	woocommerce_product_loop_start();

	// WC < 3.3 backward compatibility
	if( version_compare( WC_VERSION, '3.3', '<' ) ){
		woocommerce_product_subcategories();
	}

	// División de sucats en dos columnas (depreciado por cliente)
	/*
	if ( $category_id == 1561 ){
		$args = array(
		   'hierarchical' => 2,
		   'show_option_none' => '',
		   'hide_empty' => 1,
		   'parent' => $category_id,
		   'taxonomy' => 'product_cat'
		);
		$subcats = get_categories($args);

		foreach ($subcats as $sc) {
			echo '<div id="subsubcat-'. $sc->slug .'" class="subsubcat-wrapper">';
				echo '<h4>'. $sc->name .'</h4>';
				echo do_shortcode('[products category="'. $sc->slug .'" columns="2"]');
			echo '</div>';
		}
	}
	*/

	while ( have_posts() ) {
		the_post();

		/**
			 * Hook: woocommerce_shop_loop.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
		do_action( 'woocommerce_shop_loop' );

		wc_get_template_part( 'content', 'product' );
	}



	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );

} else {

	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );

}

/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

?>

<div class="section mcb-section mcb-section-8aks3iqwc no-margin-h no-margin-v" id="catalogo" style="padding-top:80px;padding-bottom:80px;background-color:#f0f0f0"><div class="section_wrapper mcb-section-inner" style="display: block; margin: 0 auto; max-width: 1240px;"><div class="wrap mcb-wrap mcb-wrap-yxbs2zcx0 one  valign-top clearfix" style=""><div class="mcb-wrap-inner"><div class="column mcb-column mcb-item-pz7juafuk one column_column"><div class="column_attr clearfix align_center" style=""><h3>Descargar Catálogo 2021</h3>
	<? echo do_shortcode('[contact-form-7 id="7631" title="Catálogo"]'); ?>
</div></div></div></div></div></div>

<?

/**
 * Hook: woocommerce_sidebar.
 *
 * @hooked woocommerce_get_sidebar - 10
 */
do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );
