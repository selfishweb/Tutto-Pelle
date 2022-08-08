<?php
/**
 * The Header for our theme.
 *
 * @package Betheme
 * @author Muffin group
 * @link https://muffingroup.com
 */
?><!DOCTYPE html>
<?php
	if ($_GET && key_exists('mfn-rtl', $_GET)):
		echo '<html class="no-js" lang="ar" dir="rtl">';
	else:
?>
<html <?php language_attributes(); ?> class="no-js<?php echo esc_attr(mfn_user_os()); ?>"<?php mfn_tag_schema(); ?>>
<?php endif; ?>

<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<?php do_action('mfn_hook_top'); ?>

	<?php get_template_part('includes/header', 'sliding-area'); ?>

	<?php
		if (mfn_header_style(true) == 'header-creative') {
			get_template_part('includes/header', 'creative');
		}
	?>

	<div id="Wrapper">

		<?php

			// featured image: parallax

			$class = '';
			$data_parallax = array();

			if (mfn_opts_get('img-subheader-attachment') == 'parallax') {
				$class = 'bg-parallax';

				if (mfn_opts_get('parallax') == 'stellar') {
					$data_parallax['key'] = 'data-stellar-background-ratio';
					$data_parallax['value'] = '0.5';
				} else {
					$data_parallax['key'] = 'data-enllax-ratio';
					$data_parallax['value'] = '0.3';
				}
			}
		?>

		<?php
			$shop_id = wc_get_page_id('shop');

			if (mfn_header_style(true) == 'header-below') {
				if (is_shop() || (mfn_opts_get('shop-slider') == 'all')) {
					echo mfn_slider($shop_id);
				}
			}
		?>

		<div id="Header_wrapper" class="<?php echo esc_attr($class); ?>" <?php if ($data_parallax) {
			printf('%s="%.1f"', $data_parallax['key'], $data_parallax['value']);
		} ?>>

			<?php
				if ('mhb' == mfn_header_style()) {

					// mfn_header action for header builder plugin

					do_action('mfn_header');
					if (is_shop() || (mfn_opts_get('shop-slider') == 'all')) {
						echo mfn_slider($shop_id);
					}

				} else {

					echo '<header id="Header">';
					if (mfn_header_style(true) != 'header-creative') {
						get_template_part('includes/header', 'top-area');
					}
					if (mfn_header_style(true) != 'header-below') {
						if (is_shop() || (mfn_opts_get('shop-slider') == 'all')) {
							echo mfn_slider($shop_id);
						}
					}
					echo '</header>';

				}
			?>

			<?php
				function mfn_woocommerce_show_page_title()
				{
					return false;
				}
				add_filter('woocommerce_show_page_title', 'mfn_woocommerce_show_page_title');

				$subheader_advanced = mfn_opts_get('subheader-advanced');

				if (! mfn_slider_isset($shop_id) || is_product() || (is_array($subheader_advanced) && isset($subheader_advanced['slider-show']))) {

					// subheader

					$subheader_options = mfn_opts_get('subheader');

					if (is_array($subheader_options) && isset($subheader_options['hide-subheader'])) {
						$subheader_show = false;
					} elseif (get_post_meta(mfn_ID(), 'mfn-post-hide-title', true)) {
						$subheader_show = false;
					} else {
						$subheader_show = true;
					}

					// breadcrumbs

					if (is_array($subheader_options) && isset($subheader_options['hide-breadcrumbs'])) {
						$breadcrumbs_show = false;
					} else {
						$breadcrumbs_show = true;
					}
					
					// title

					if (is_array($subheader_options) && isset($subheader_options[ 'hide-title' ])) {
						$title_show = false;
					} else {
						$title_show = true;
					}
					
					// output

					if ($subheader_show) {
						
						// Get Category image and display as BG
						$cat = $wp_query->get_queried_object();
						$catname = $cat->name;
						$thumbnail_id = get_term_meta( $cat->term_id, 'thumbnail_id', true ); 
						$imageshbg = wp_get_attachment_url( $thumbnail_id );

						echo '<div id="Subheader" style="background: url('. $imageshbg .');">';
							echo '<div class="container">';
								echo '<div class="column one">';
									if (is_product()){
										if ($title_show) {
											$title = get_the_title();
											$v = "-";
											$pos = strpos($title, $v);

											if ($pos === false) {
												?>
												<h1><?php echo $title; ?></h1> 
											<?
											}
											else{
												$titleexp = explode(" ", $title);
												$removed = array_pop($titleexp);
												$titlefinal = implode(" ", $titleexp);
												?>
												<h1 style="margin: 0;"><?php echo $titlefinal; ?></h1>
											<?
											}
										}
									}
									else {
										if($catname == "Sale"){
											?>
											<h1 style="margin: 0; color: #e30613;"><?php echo $catname; ?></h1>
											<?
										}
										else{
											?>
											<h1 style="margin: 0;"><?php echo $catname; ?></h1>
											<?
										}
									} 
									
									if ($breadcrumbs_show) {
										$home = mfn_opts_get('translate') ? mfn_opts_get('translate-home', 'Home') : __('Home', 'betheme');
										$woo_crumbs_args = apply_filters('woocommerce_breadcrumb_defaults', array(
											'delimiter' => false,
											'wrap_before' => '<ul class="breadcrumbs woocommerce-breadcrumb">',
											'wrap_after' => '</ul>',
											'before' => '<li>',
											'after' => '<span><i class="icon-right-open"></i></span></li>',
											'home' => esc_html($home),
										));

										woocommerce_breadcrumb($woo_crumbs_args);
									}
						
									
									?>
									<header class="woocommerce-products-header">
										<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
											<h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
										<?php endif; ?>

										<div class="category-description">
											<?php
											/**
											 * Hook: woocommerce_archive_description.
											 *
											 * @hooked woocommerce_taxonomy_archive_description - 10
											 * @hooked woocommerce_product_archive_description - 10
											 */
											do_action( 'woocommerce_archive_description' );
											?>
										</div>	
									</header>
									<?

									

								echo '</div>';
							echo '</div>';
						echo '</div>';
					}
				}
			?>

		</div>
<?
		
$category = get_queried_object();
$category_id = $category->term_id;

		
/*$url_dom = get_site_url() . '/categoria-producto/sale/';
$url_compl = get_permalink();*/

if ( $category_id == 1493){
	?>
		<style>
			h1.title {
				color: red !important;
			}
		</style>
	<?
}
?>
		
		<?php do_action('mfn_hook_content_before');
