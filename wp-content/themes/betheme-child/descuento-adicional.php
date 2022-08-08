<?php

// Utility function to change the prices with a multiplier (number)
/*
function get_additional_discount() {
}
*/

// Simple, grouped and external products
add_filter('woocommerce_product_get_price', 'custom_price', 99, 2 );
add_filter('woocommerce_product_get_regular_price', 'custom_price', 99, 2 );

// Variations
add_filter('woocommerce_product_variation_get_regular_price', 'custom_price', 99, 2 );
add_filter('woocommerce_product_variation_get_price', 'custom_price', 99, 2 );

function custom_price( $price, $product ) {
    if ( is_archive() || is_product() ){
      return (float) $price;
    }else{
      $product_id = $product->get_id();
      $additionaldiscount = types_render_field( 'descuento-adicional', array( 'post_id' => $product_id, 'output' => 'raw') );
      if($additionaldiscount !== ""){
        $additionaldiscount = (100 - $additionaldiscount) / 100;
        return (float) $price * $additionaldiscount;
      }
      else{
        return (float) $price;
      }
    }
}

// Variable (price range)
add_filter('woocommerce_variation_prices_price', 'custom_variable_price', 99, 3 );
add_filter('woocommerce_variation_prices_regular_price', 'custom_variable_price', 99, 3 );
function custom_variable_price( $price, $variation, $product ) {
    // Delete product cached price  (if needed)
    // wc_delete_product_transients($variation->get_id());
    $product_id = $product->get_id();
    $additionaldiscount = types_render_field( 'descuento-adicional', array( 'post_id' => $product_id, 'output' => 'raw') );
    if($additionaldiscount !== ""){
      $additionaldiscount = (100 - $additionaldiscount) / 100;
      return (float) $price * $additionaldiscount;
    }
    else{
      return (float) $price;
    }
}

// Handling price caching (see explanations at the end)
add_filter( 'woocommerce_get_variation_prices_hash', 'add_price_multiplier_to_variation_prices_hash', 99, 3 );
function add_price_multiplier_to_variation_prices_hash( $price_hash, $product, $for_display ) {
    $product_id = $product->get_id();
    $additionaldiscount = types_render_field( 'descuento-adicional', array( 'post_id' => $product_id, 'output' => 'raw') );
    if($additionaldiscount !== ""){
      $additionaldiscount = (100 - $additionaldiscount) / 100;
      $price_hash[] = $additionaldiscount;
    }
    return $price_hash;
}

?>
