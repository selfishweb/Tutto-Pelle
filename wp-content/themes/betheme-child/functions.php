<?php

/* ---------------------------------------------------------------------------
 * Child Theme URI | DO NOT CHANGE
 * --------------------------------------------------------------------------- */
define( 'CHILD_THEME_URI', get_stylesheet_directory_uri() );


/* ---------------------------------------------------------------------------
 * Define | YOU CAN CHANGE THESE
 * -------------------------------------------------------------------------------------- */

// White Label --------------------------------------------
define( 'WHITE_LABEL', false );

// Static CSS is placed in Child Theme directory ----------
define( 'STATIC_IN_CHILD', false );


/* ---------------------------------------------------------------------------
 * Enqueue Style
 * --------------------------------------------------------------------------- */
add_action( 'wp_enqueue_scripts', 'mfnch_enqueue_styles', 101 );
function mfnch_enqueue_styles() {

	// Enqueue the parent stylesheet
// 	wp_enqueue_style( 'parent-style', get_template_directory_uri() .'/style.css' );		//we don't need this if it's empty

	// Enqueue the parent rtl stylesheet
	if ( is_rtl() ) {
		wp_enqueue_style( 'mfn-rtl', get_template_directory_uri() . '/rtl.css' );
	}

	// Enqueue the child stylesheet
	wp_dequeue_style( 'style' );
	wp_enqueue_style( 'style', get_stylesheet_directory_uri() .'/style.css' );

}


/* ---------------------------------------------------------------------------
 * Load Textdomain
 * --------------------------------------------------------------------------- */
add_action( 'after_setup_theme', 'mfnch_textdomain' );
function mfnch_textdomain() {
    load_child_theme_textdomain( 'betheme',  get_stylesheet_directory() . '/languages' );
    load_child_theme_textdomain( 'mfn-opts', get_stylesheet_directory() . '/languages' );
}


//SLIDER

/**
 * Proper way to enqueue scripts and styles.
 */

function theme_name_scripts() {

	wp_enqueue_style( 'OwlStyle', get_stylesheet_directory_uri().'/owl.carousel.min.css' );
	wp_enqueue_style( 'OwlStyleDefault', get_stylesheet_directory_uri().'/owl.theme.default.min.css' );
	wp_enqueue_script( 'OwlSlider', get_stylesheet_directory_uri().'/owl.carousel.min.js ', array( 'jquery' ) );
	wp_enqueue_script( 'sliderConfig', get_stylesheet_directory_uri().'/sliderconfig.js ', array( 'OwlSlider' ) );
	wp_enqueue_script( 'topBox', get_stylesheet_directory_uri().'/topbox.js ', array( 'OwlSlider' ) );

	if ( is_product() ) {


      /*
      wp_localize_script('ajaxComposiciones', 'ajaxvars', ['ajaxurl'=>admin_url('admin-ajax.php')]);
      */
	    //wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
	}
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

//Obtener el modulo del que es parte el producto

/**
 * Get the first parent of simple product, WIP until better solution: https://github.com/woocommerce/woocommerce/issues/14217
 * @param  int $prod_id id of simple product
 * @param  bool $plain_id return id or post object
 * @return post or id of grouped product
 */

function wc_get_first_parent($prod_id, $plain_id = true) {
  $group_args = array(
    'post_type' => 'product',
    'meta_query' => array(
      array(
        'key' => '_children',
        'value' => 'i:' . $prod_id . ';',
        'compare' => 'LIKE',
      )
    )
   );
  $parents = get_posts( $group_args );
  $ret_prod = count($parents) > 0 ? array_shift($parents) : false;
  if ($ret_prod && $plain_id) {
    $ret_prod = $ret_prod->ID;
  }
  return $ret_prod;
}


//VARIACIONES

function variation_dropdown() {

  global $product;
//echo $product->get_type();
  if( $product->is_type( 'variable' )  ) {

  wp_enqueue_script('wc-add-to-cart-variation');

  $attribute_keys = array_keys( $product->get_attributes() );

  ?>

  <form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->id ); ?>" data-product_variations="<?php echo htmlspecialchars( json_encode( $product->get_available_variations() ) ) ?>">
    <?php do_action( 'woocommerce_before_variations_form' ); ?>

    <?php if ( empty( $product->get_available_variations() ) && false !== $product->get_available_variations() ) : ?>
      <p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
    <?php else : ?>
      <table class="variations" id="variation-to-search" cellspacing="0">
        <tbody>
          <?php foreach ( $product->get_variation_attributes() as $attribute_name => $options ) : ?>

            <tr>
              <td class="label"><label for="<?php echo sanitize_title( $attribute_name ); ?>"><?php echo wc_attribute_label( $attribute_name ); ?></label></td>
              <td class="value" id="value-to-search" onchange="calculatePriceByCat()">
                <?php
                  $selected = isset( $_REQUEST[ 'attribute_' . sanitize_title( $attribute_name ) ] ) ? wc_clean( urldecode( $_REQUEST[ 'attribute_' . sanitize_title( $attribute_name ) ] ) ) : $product->get_variation_default_attribute( $attribute_name );
                  wc_dropdown_variation_attribute_options( array( 'options' => $options, 'attribute' => $attribute_name, 'product' => $product, 'selected' => $selected ) );
                  echo end( $attribute_keys ) === $attribute_name ? apply_filters( 'woocommerce_reset_variations_link', '<a class="reset_variations" href="#">' . __( 'Clear', 'woocommerce' ) . '</a>' ) : '';
                ?>
              </td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
	  <div id="ajaxspace"></div>
	  <p>
		  
		  <? 
	  	//Jorge    
	  //echo wc_price($product->get_price()); ?>
	  </p>
      <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

      <div class="single_variation_wrap">
        <style>
          .quantity{
            display: none !important;
          }
        </style>
        <?php
          /**
           * woocommerce_before_single_variation Hook.
           */
          do_action( 'woocommerce_before_single_variation' );

          /**
           * woocommerce_single_variation hook. Used to output the cart button and placeholder for variation data.
           * @since 2.4.0
           * @hooked woocommerce_single_variation - 10 Empty div for variation data.
           * @hooked woocommerce_single_variation_add_to_cart_button - 20 Qty and cart button.
           */


          do_action( 'woocommerce_single_variation' );

          /**
           * woocommerce_after_single_variation Hook.
           */
          do_action( 'woocommerce_after_single_variation' );
        ?>
      </div>
  	  <style>
	  	.woocommerce-variation-price {
			display: block;
		}
		  span.price {
			position: relative;
			float: right !important;
			bottom: 0;
			right: 0;
			margin-bottom: 12px;
			display: flex;
			padding: 18px;
			background: #f7f7f7;
		}
		 .woocommerce-variation-add-to-cart {
				display: block;
		}
		  p.stock.in-stock {
			  padding: 30px 0 0 0;
		  }
	  </style>
      <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

    <?php endif; ?>

    <?php do_action( 'woocommerce_after_variations_form' ); ?>
  </form>

  <?php
  }else {

	  /*echo '<pre>';
	  print_r($product);
	  echo '</pre>';*/
	  $priceregular = $product->regular_price;
	  $price = $product->price;
	  $pricesale = $product->sale_price;
	  $quantydis = $product->stock_quantity;

	  if($quantydis == "" || $quantydis == "0"){

	  }else{
	  echo '<div class="woocommerce-variation-availability">
	  			<p class="stock in-stock">
					'. $quantydis .' disponibles
				</p>
			</div>';
	  }

		echo '<div class="preciocat">';
			if ($product->get_sale_price()){
				echo "<span class='precio-descuento'>" . wc_price($product->get_regular_price()) . "</span>";
				$additionaldiscount = types_render_field( 'descuento-adicional', array( 'post_id' => $product_id, 'output' => 'raw') );
				if( $additionaldiscount == ""){
					echo "<span class='precio'>" . wc_price($product->get_sale_price()) . "</span>";
				}else{
						$preciofinal = $product->get_sale_price()-(($product->get_sale_price()*$additionaldiscount)/100);
						//echo "<span class='precio-descuento'>" . wc_price($product->get_sale_price()) . "</span>";
						echo "<span class='precio'>" . wc_price($preciofinal) . "</span>";
						// echo "<span>-" . $additionaldiscount . "% adicional</span>";
				}
			}
			else{
				echo "<span class='precio'>" . wc_price($product->get_regular_price()) . "</span>";
			}
		echo '</div>';

	  echo  '<hr>';
	  echo sprintf( '<a rel="nofollow" href="%s" data-quantity="%s" data-product_id="%s" data-product_sku="%s" class="%s">COMPRAR</a>',
		  esc_url( $product->add_to_cart_url() ),
		  esc_attr( isset( $quantity ) ? $quantity : 1 ),
		  esc_attr( $product->id ),
		  esc_attr( $product->get_sku() ),
		  esc_attr( isset( $class ) ? $class : 'comprarbtn' )
		);

	  ?>
		<style>
			a.comprarbtn {
				width: 100%;
				display: block;
			}
			.woocommerce-variation-availability p {
				margin: 0;
			}
			.woocommerce-variation-availability {
				width: 35% !important;
				display: inline-block;
				margin-top: 50px;
			}
		</style>
	  <?php

  	}

}

//CAMBIAR TEXTO DE BOTON DE AGREGAR A CARRITO
add_filter('woocommerce_product_single_add_to_cart_text','customize_add_to_cart_button_woocommerce');
function customize_add_to_cart_button_woocommerce(){
  return __('COMPRAR', 'woocommerce');
}

add_filter( 'woocommerce_get_price_html', 'cw_change_product_price_display' );
add_filter( 'woocommerce_cart_item_price', 'cw_change_product_price_display' );
function cw_change_product_price_display( $price ) {
    // Your additional text in a translatable string
    $text = '<p style="font-size: 0.8em;">PRECIO:</p>';

    // returning the text before the price
    return $text . ' ' . $price;
}

//Encontrar la variación del producto (usado en calculo de preció de las composiciones / productos agrupados)

function find_matching_product_variation_id($product_id, $attributes)
{
    return (new \WC_Product_Data_Store_CPT())->find_matching_product_variation(
        new \WC_Product($product_id),
        $attributes
    );
}


add_action('wp_ajax_nopriv_ajaxcomposiciones', 'ajaxcomposiciones');
add_action('wp_ajax_ajaxcomposiciones', 'ajaxcomposiciones');

function ajaxcomposiciones() {

    //Leemos las variables que nos mandan, selected es la categoria de piel y modulos es el array con los modulos de la composicion actual
    $selected = $_POST['selected'];
    $modulos = $_POST['modulos'];
    $leproductid = $_POST['productid'];

    //Iteramos a través de los módulos para ir sumando el costo total (y el NO rebajado si hay)
    $precio = 0;
    $precio_completo = 0;

    //Iniciamos la URL para el boton de comprar
    $btncomprarhref = "/?add-to-cart=".$leproductid;

    foreach ($modulos as $moduloid) {

      $leproduct = wc_get_product( $moduloid[0] );


      //Si el ID ya es de una variacion
      $esvariacion = $leproduct instanceof WC_Product_Variation;

      if ( $esvariacion == 1 ){
      	if ( $leproduct->get_price() ){
            if ( $leproduct->get_sale_price() ){
            	$precio += $leproduct->get_sale_price() * $moduloid[1] ;
              	$precio_completo +=  $leproduct->get_regular_price() * $moduloid[1];
            }
			else{
              $precio +=  $leproduct->get_price() * $moduloid[1];
            }
        }

        //agregamos al link la variacion del modulo y la cantidad
        $btncomprarhref .= "&quantity[".$moduloid[0]."]=".$moduloid[1];
      }
	  else{

        $tienepiel = $leproduct->get_attribute('pa_categoria-color');
        if ( ! empty( $tienepiel ) ){

  		    //Obtenemos la variacion segun el atributo
  		    $losattributes = array(
  		    	'attribute_pa_categoria-color' => $selected
  		    );

        	$variacionid = find_matching_product_variation_id($moduloid[0], $losattributes);
  	 			$variacionobj = new WC_Product_Variation($variacionid);

  		    //Checamos el precio y lo sumamos
  		    if( $variacionobj->get_price() ){

  		        if ( $variacionobj->get_sale_price() ){
  		            $precio +=  $variacionobj->get_sale_price() * $moduloid[1];
  		            $precio_completo +=  $variacionobj->get_regular_price() * $moduloid[1];
  		        }
				else{
  		            $precio +=  $variacionobj->get_price() * $moduloid[1];
  		        }
  		    }

  		    //agregamos al link la variacion del modulo y la cantidad
        	$btncomprarhref .= "&quantity[".$variacionid."]=".$moduloid[1]."&precio=".$precio."&preciocompleto=".$precio_completo;
        }
		else{

        if ( $leproduct->is_type( 'variable' ) ){

				$variations = $leproduct->get_available_variations();
				$variations_id = wp_list_pluck( $variations, 'variation_id' );

				$variation = wc_get_product( $variations_id[0] );

				if ( $variation->get_price() ){

					if ( $variation->get_sale_price() ){

						$precio += $variation->get_sale_price() * $moduloid[1] ;
						$precio_completo +=  $variation->get_regular_price() * $moduloid[1];

					}
					else{
						$precio +=  $variation->get_price() * $moduloid[1];
					}
				}

				//agregamos al link la variacion del modulo y la cantidad
				$btncomprarhref .= "&quantity[".$variations_id[0]."]=".$moduloid[1];

        	}
			else if ( $leproduct->is_type( 'simple' ) ){

        		if ( $leproduct->get_price() ){

					if ( $leproduct->get_sale_price() ){
						$precio += $leproduct->get_sale_price() * $moduloid[1] ;
						$precio_completo +=  $leproduct->get_regular_price() * $moduloid[1];
					}
					else{
						$precio +=  $leproduct->get_price() * $moduloid[1];
					}
            	}

  	      	//agregamos al link la variacion del modulo y la cantidad
  	      	$btncomprarhref .= "&quantity[".$leproduct->get_id()."]=".$moduloid[1];

        	}
        }
      }
    }

    $el_html;

    if ($precio_completo > $precio){
      $el_html = '<div class="preciocat">
                  <span class="price">
                    <p style="font-size: 0.8em;">
                      PRECIO:
                    </p>
                    <del>
                      <span class="woocommerce-Price-amount amount">
                        <bdi>
                          <span class="woocommerce-Price-currencySymbol">
                            $
                          </span>
                          '. number_format($precio_completo) . ".00". '
                        </bdi>
                      </span>
                    </del>
                    <ins>
                      <span class="woocommerce-Price-amount amount">
                        <bdi>
                          <span class="woocommerce-Price-currencySymbol">
                            $
                          </span>
                          '. number_format($precio) . ".00". '
                        </bdi>
                      </span>
                    </ins>
                  </span>
                </div>' ;
    }
	else{
      $el_html = '<div class="preciocat">
                  <span class="price">
                    <ins>
                      <span class="woocommerce-Price-amount amount">
                        <bdi>
                          <span class="woocommerce-Price-currencySymbol">
                            $
                          </span>
                          '. number_format($precio) . ".00". '
                        </bdi>
                      </span>
                    </ins>
                  </span>
                </div>';
    }

    $btncomprar = '<br><hr><a href="'.$btncomprarhref.'"><div class="comprarbtn">COMPRAR COMPOSICIÓN</div></a>';
    $btnmodulo = '<div class="moduloslink" onClick="abrirModulos()" >AGREGAR MÓDULOS</div>';

    //Regresamos el resultado al AJAX
    echo $el_html.$btncomprar.$btnmodulo;

    // this is required to return a proper result after an AJAX call in WP
    die();
}

add_action('wp_ajax_nopriv_ajaxvariablecat', 'ajaxvariablecat');
add_action('wp_ajax_ajaxvariablecat', 'ajaxvariablecat');

function ajaxvariablecat() {

    //Leemos las variables que nos mandan, selected es la categoria de piel y modulos es el array con los modulos de la composicion actual
    $modules = $_POST['modules'];
    $values = $_POST['values'];
    $leproductid = $_POST['productid'];
	
	$product = wc_get_product( $leproductid );
	
	$categories = $product->get_categories();
	
	foreach($values as $value){
		empty($value)?$value_bool=false:$value_bool=true;
		if($value_bool==false){
			break;
		}
	}

	if(!empty($modules) and $value_bool){
		//Iteramos a través de los módulos para ir sumando el costo total (y el NO rebajado si hay)
		$precio = 0;
		$precio_completo = 0;

				
		/*foreach( $modules as $index => $module ) {
   			$losattributes[$index] = array( $module => $values[$index] );
		}*/
 		
		$losattributes = array_combine($modules,$values);
		
		$variations = $product->get_available_variations();
		
		$variacionid = find_matching_product_variation_id($leproductid, $losattributes);
		$variacionobj = new WC_Product_Variation($variacionid);

		//Checamos el precio y lo sumamos
		if( $variacionobj->get_price() ){

			if ( $variacionobj->get_sale_price() ){
				$precio +=  $variacionobj->get_sale_price();
				$precio_completo +=  $variacionobj->get_regular_price();
			}
			else{
				$precio +=  $variacionobj->get_price() * $moduloid[1];
			}
		}

		$el_html;

		if ($precio_completo > $precio){
		  $el_html = '<div class="preciocat">
					  <span class="price">
						<p style="font-size: 0.8em;">
						  PRECIO:
						</p>
						<del>
						  <span class="woocommerce-Price-amount amount">
							<bdi>
							  <span class="woocommerce-Price-currencySymbol">
								$
							  </span>
							  '. number_format(ceil($precio_completo)) . ".00". '
							</bdi>
						  </span>
						</del>
						<ins>
						  <span class="woocommerce-Price-amount amount">
							<bdi>
							  <span class="woocommerce-Price-currencySymbol">
								$
							  </span>
							  '. number_format(ceil($precio)) . ".00". '
							</bdi>
						  </span>
						</ins>
					  </span>
					</div>' ;
		}
		else{
		  $el_html = '<div class="preciocat">
					  <span class="price">
						<ins>
						  <span class="woocommerce-Price-amount amount">
							<bdi>
							  <span class="woocommerce-Price-currencySymbol">
								$
							  </span>
							  '. number_format(ceil($precio)) . ".00". '
							</bdi>
						  </span>
						</ins>
					  </span>
					</div>';
		}

		echo $el_html;
	}
	die();
}


add_action('wp_ajax_nopriv_ajaxdesde', 'ajaxdesde');
add_action('wp_ajax_ajaxdesde', 'ajaxdesde');

function ajaxdesde() {

    //Leemos las variables que nos mandan, selected es la categoria de piel y modulos es el array con los modulos de la composicion
    $selected = $_POST['selected'];
    $modulos = $_POST['modulos'];
    $leproductid = $_POST['productid'];

		$pr =  wc_get_product( $leproductid );
		$prx = $leproductid;

    //Iteramos a través de los módulos para ir sumando el costo total (y el NO rebajado si hay)
    $precio = 0;
    $precio_completo = 0;

    foreach ($modulos as $moduloid) {

      $leproduct = wc_get_product( $moduloid[0] );

      //Si el ID ya es de una variacion
      $esvariacion = $leproduct instanceof WC_Product_Variation;

      if ( $esvariacion == 1 ){
      	if ( $leproduct->get_price() ){
            if ( $leproduct->get_sale_price() ){
            	$precio += $leproduct->get_sale_price() * $moduloid[1] ;
              	$precio_completo +=  $leproduct->get_regular_price() * $moduloid[1];
            }
			else{
              $precio +=  $leproduct->get_price() * $moduloid[1];
            }
        }
        //agregamos al link la variacion del modulo y la cantidad
        $btncomprarhref .= "&quantity[".$moduloid[0]."]=".$moduloid[1];
      }
	  else{
        $tienepiel = $leproduct->get_attribute('pa_categoria-color');
        if ( ! empty( $tienepiel ) ){

  		    //Obtenemos la variacion segun el atributo
  		    $losattributes = array(
  		    	'attribute_pa_categoria-color' => $selected
  		    );

        	$variacionid = find_matching_product_variation_id($moduloid[0], $losattributes);
  	 		$variacionobj = new WC_Product_Variation($variacionid);

  		    //Checamos el precio y lo sumamos
  		    if( $variacionobj->get_price() ){

  		        if ( $variacionobj->get_sale_price() ){
  		            $precio +=  $variacionobj->get_sale_price() * $moduloid[1];
  		            $precio_completo +=  $variacionobj->get_regular_price() * $moduloid[1];
  		        }
				else{
  		            $precio +=  $variacionobj->get_price() * $moduloid[1];
  		        }
  		    }

  		    //agregamos al link la variacion del modulo y la cantidad
        	$btncomprarhref .= "&quantity[".$variacionid."]=".$moduloid[1]."&precio=".$precio."&preciocompleto=".$precio_completo;
        }
		else{

        	if ( $leproduct->is_type( 'variable' ) ){

				$variations = $leproduct->get_available_variations();
				$variations_id = wp_list_pluck( $variations, 'variation_id' );

				$variation = wc_get_product( $variations_id[0] );

				if ( $variation->get_price() ){

					if ( $variation->get_sale_price() ){

						$precio += $variation->get_sale_price() * $moduloid[1] ;
						$precio_completo +=  $variation->get_regular_price() * $moduloid[1];

					}
					else{
						$precio +=  $variation->get_price() * $moduloid[1];
					}
				}

				//agregamos al link la variacion del modulo y la cantidad
				$btncomprarhref .= "&quantity[".$variations_id[0]."]=".$moduloid[1];

        	}
			else if ( $leproduct->is_type( 'simple' ) ){

        		if ( $leproduct->get_price() ){

					if ( $leproduct->get_sale_price() ){
						$precio += $leproduct->get_sale_price() * $moduloid[1] ;
						$precio_completo +=  $leproduct->get_regular_price() * $moduloid[1];
					}
					else{
						$precio +=  $leproduct->get_price() * $moduloid[1];
					}
            	}

  	      	//agregamos al link la variacion del modulo y la cantidad
  	      	$btncomprarhref .= "&quantity[".$leproduct->get_id()."]=".$moduloid[1];

        	}
        }
      }
    }

    $el_html;

    if ($precio_completo > $precio){
      $el_html = '
                  <span class="desde">
                    <p style="font-size: 0.8em;">
                      DESDE:
                    </p>
                    <del>
                      <span class="woocommerce-Price-amount amount">
                        <bdi>
                          <span class="woocommerce-Price-currencySymbol">
                            $
                          </span>
                          '. number_format($precio_completo) . ".00". '
                        </bdi>
                      </span>
                    </del>
                    <ins>
                      <span class="woocommerce-Price-amount amount">
                        <bdi>
                          <span class="woocommerce-Price-currencySymbol">
                            $
                          </span>
                          '. number_format($precio) . ".00". '
                        </bdi>
                      </span>
                    </ins>
                  </span>' ;
    }
	else{
      $el_html = '<div class="preciocat">
                  <span class="price">
                    <ins>
                      <span class="woocommerce-Price-amount amount">
                        <bdi>
                          <span class="woocommerce-Price-currencySymbol">
                            $
                          </span>
                          '. number_format($precio) . ".00". '
                        </bdi>
                      </span>
                    </ins>
                  </span>
                </div>';
    }

    //Regresamos el resultado al AJAX
    //echo $el_html;

		echo $prx;

    // this is required to return a proper result after an AJAX call in WP
    die();
}






//Hacemos disponible la direccion de AJAX de Wordpress en la pagina de producto
add_action('wp_head', 'myplugin_ajaxurl');

function myplugin_ajaxurl() {
  if ( is_product() ) {
   echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
  }
}



//ROQUE*
//Obtención de Pieles

add_shortcode('wp_ajax_pieles', 'ajax_pieles');

function ajax_pieles() {
global $product;

	//Obtención de los terminos de un atributto
	$categories = get_terms(['taxonomy' => 'pa_categoria-color', 'hide_empty' => false ]);
	//var_dump($categories);
	$categoriaspieles = array();

	foreach ( $categories as $category ){

		$category_id = $category->term_id; // The ID
		$category_name = $category->name;
		$category_slug = $category->slug;
		$category_taxonomy = $category->taxonomy;
		$category_description = $category->description;

		//Obtención de la imagen del atributo
		$url_img = $imgurl = z_taxonomy_image_url($category_id);

		//Separamos el slug para comparaciones de organizacion del array de pieles
		$arrayslug = explode("-", $category_slug);

		// OBJETO con el array de info de la piel en específico
		$piel = array(
			"term_id" => $category_id,
			"piel" => $arrayslug[1],
			"descripcion" => $category_description,
			'name' => $category_name,
			'slug' => $category_slug
		);

		//Rellenamos el array checando si existe categoría y subcategoría para organizar
		$catletterss = preg_replace('/[^a-zA-Z]/', '', $arrayslug[0]);
		//if ($catletterss == "categoria"){
			if (array_key_exists($arrayslug[0], $categoriaspieles)){
				if (array_key_exists($arrayslug[2], $categoriaspieles[$arrayslug[0]])){
					array_push($categoriaspieles[$arrayslug[0]][$arrayslug[2]], $piel);
				}else{
					$categoriaspieles[$arrayslug[0]][$arrayslug[2]] = array($piel);
				}
			}else{
				$categoriaspieles[$arrayslug[0]][$arrayslug[2]] = array($piel);
			}
		//}
	}

	foreach ($categoriaspieles as $categoria) {

		$a = 0;
		$catkey = array_search ($categoria, $categoriaspieles);
		$numbers = preg_replace('/[^0-9]/', '', $catkey);
		$letters = preg_replace('/[^a-zA-Z]/', '', $catkey);

		if ($letters == "categoria") {
			echo "<div class='catpiel' id='".$catkey."'><h2 class='tit-piel'>Categoría 0" . $numbers."</h2>";
		}
		else{
			echo "<div class='catpiel' id='".$catkey."'><h2 class='tit-piel'>" . $letters . $numbers."</h2>";
		}


		foreach ($categoria as $subcategoria) {
			$key = array_search ($subcategoria, $categoria);

			//$subcatnum = count($categoria);

			echo "<div class='subcatpiel'><h4>".$key."</h4>";
			echo "<p>".$subcategoria[0]['descripcion']."</p>";

			foreach ($subcategoria as $lapiel) {
				$a ++;
				$imgurl = z_taxonomy_image_url($lapiel['term_id']);
				if ($a == 5 || $a == 10){
					echo "<hr>";
				}

            ?>
            <div class="contpiel" id="linkpiel-<?php echo $lapiel['term_id']; ?>">
            	<img id="" class="pielimg" src="<?php echo $imgurl ; ?>">
            	<p><?php
            				$nombrepiel = explode("/", $lapiel['name']);
            				echo $nombrepiel[1]; ?>
            	</p>
            </div>
			<script>
			jQuery(function($){
				 $('#linkpiel-<?php echo $lapiel['term_id']; ?>').click(function() {
					 $('#overlay-inner').html('<img class="big-pielimg" src="<?php echo $imgurl ; ?>">');
					 $('#overlay').fadeIn();
				 });
				 $('#close-overlay').click(function(){
					 $('#overlay').fadeOut();
				 });
			});
			</script>
            <?php
  		}
			echo "</div>";
		}
		echo "</div><hr>";
	}

}

add_shortcode('wp_menu_pieles','menu_pieles');

function menu_pieles(){

	$categories = get_terms(['taxonomy' => 'pa_categoria-color']);
	$categoriaspieles = array();
	?>

	<a id="clickmenucats" class="" href="#"><h4 style="color: #898989;"><? echo do_shortcode("[icon type='icon-menu-fine']"); ?> CATEGORÍAS</h4></a>
	<div id="menucats" style="display: none;">
	<?php
	foreach ( $categories as $category ){

		$category_id = $category->term_id; // The ID
		$category_name = $category->name;
		$category_slug = $category->slug;
		$category_taxonomy = $category->taxonomy;
		$category_description = $category->description;

		//Separamos el slug para comparaciones de organizacion del array de pieles
		$arrayslug = explode("-", $category_slug);
		//var_dump($arrayslug);

		// OBJETO con el array de info de la piel en específico
		$piel = array(
			"term_id" => $category_id,
			"piel" => $arrayslug[1],
			"descripcion" => $category_description,
			'name' => $category_name,
			'slug' => $category_slug
		);

		//Rellenamos el array checando si existe categoría y subcategoría para organizar
		$catletters = preg_replace('/[^a-zA-Z]/', '', $arrayslug[0]);
		if ($catletters == "categoria"){
			if (array_key_exists($arrayslug[0], $categoriaspieles)){

				//var_dump($categoriaspieles);
				if (array_key_exists($arrayslug[2], $categoriaspieles[$arrayslug[0]])){
					array_push($categoriaspieles[$arrayslug[0]][$arrayslug[2]], $piel);
				}else{
					$categoriaspieles[$arrayslug[0]][$arrayslug[2]] = array($piel);
				}
			}else{
				$categoriaspieles[$arrayslug[0]][$arrayslug[2]] = array($piel);
			}
		}

	}

	foreach ($categoriaspieles as $categoria) {

		$catkey = array_search ($categoria, $categoriaspieles) ;
		$numbers = preg_replace('/[^0-9]/', '', $catkey);
		$letters = preg_replace('/[^a-zA-Z]/', '', $catkey);

		echo "<a class='botonpiel' id='link" . $catkey . "'>".$letters  . ' 0' . $numbers."</a>";
		?>

		<?php
		if ( $catkey == "categoria3"){
			?>
			<script>
			 jQuery(function($){
				$('#link<? echo $catkey; ?>').click(function ( e ){
					e.preventDefault();
					$('html, body').animate({
						scrollTop: $('#<? echo $catkey; ?>').offset().top-200
					}, 800);
				});
			 });
			</script>
		<?php
		}
		else{
			?>
			<script>
			 jQuery(function($){
				$('#link<? echo $catkey; ?>').click(function ( e ){
					e.preventDefault();
					$('html, body').animate({
						scrollTop: $('#<? echo $catkey; ?>').offset().top-105
					}, 800);
				});
			 });
			</script>
		<?php
		}
		?>

	<?
	}
	?>
	</div>

	<script>
		jQuery(function($){
			$('#clickmenucats').click(function(e) {
				e.preventDefault();
				$('#menucats').slideToggle("fast");
			});
		});
	</script>
	<?
}


//	ALEX *
// Submenu La Colezzione

add_shortcode('menu_lacollezzione', 'fn_menu_lacollezzione');

function fn_menu_lacollezzione() {

	global $product;

	// Obtención de los terminos de un atributto
	// [0] para categorias, [1...] para subcategorias
	$c_categories = array(
						array (600, 601, 599),
						array (1486, 602, 1746, 1052, 1339),
						array (1301, 1561),
						array (1053, 1046, 1317, 1339, 1313),
						array (604, 1000, 1489, 1313),
						array (1491, 1052, 1078, 1492, 1187, 1345)
						);

	$c_output = "<div class='menu_lacollezzione'>";

	foreach ( $c_categories as $c_category ){

		$tc_category = get_term( $c_category[0], 'product_cat' );
		$c_output .= "<div class='colezzione-subcat " . $tc_category->slug . "'>";
		$c_output .= "<a href='https://tuttopelle.mx/categoria-producto/" . $tc_category->slug . "'><h4>" . $tc_category->name . "</h4></a>";

		foreach ( array_slice($c_category, 1) as $c_subcategory ){
			$tc_subcategory = get_term( $c_subcategory, 'product_cat' );
			$c_output .= "<a href='https://tuttopelle.mx/categoria-producto/" . $tc_category->slug . "/" . $tc_subcategory->slug . "'>" . $tc_subcategory->name . "</a>";
		}
		$c_output .= "</div>";
	}
	$c_output .= "</div>";

	echo $c_output;
}

// ALEX *
// Custom order / orderby / sort for specific categories
/*
function custom_woocommerce_get_catalog_ordering_args( $args ) {
  $orderby_value = isset( $_GET['orderby'] ) ? wc_clean( $_GET['orderby'] ) : apply_filters( 'woocommerce_default_catalog_orderby', get_option( 'woocommerce_default_catalog_orderby' ) );
  if ( is_product_category( array( 'salas' )) ) {
    $args['orderby'] = array(
      'title'      => 'ASC',
      'menu_order' => 'DESC'
    );
  }
  return $args;
}
add_filter( 'woocommerce_get_catalog_ordering_args', 'custom_woocommerce_get_catalog_ordering_args' );
*/

// Redondear precios hacia arriba

function round_up_raw_woocommerce_price( $price ){
    return ceil( $price );
}

add_filter( 'raw_woocommerce_price', 'round_up_raw_woocommerce_price' );


// ALEX *
// Custom wp section to manage quantity of grouped products


// ALEX *
// Custom wp sectio to manage quantity of grouped products

function my_admin_menu() {
	add_menu_page(
		__( 'Productos Agrupados', 'cantidad-productos-agrupados' ),
		__( 'Productos Agrupados', 'cantidad-productos-agrupados'  ),
		'manage_options',
		'sample-page',
		'my_admin_page_contents',
		'dashicons-schedule',
		3
	);
}


add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_page_contents() {
		?>
			<h1><?php esc_html_e( 'Productos agrupados.', 'cantidad-productos-agrupados' ); ?></h1>
			<p>Gestiona la cantidad de productos individuales para los productos agrupados.</p>
		<?php

		global $wpdb;

		$query = $wpdb->prepare("SELECT * FROM wp3h_cantidad_productos_en_agrupados");
		$result = $wpdb->get_results ($query);

		echo "<table id='tabla-resultados'>";
		echo "<th>ID Producto agrupado</th><th>ID Producto</th><th>Cantidad</th>";

		foreach($result as $row){
			echo "<tr>";
			echo "<td>". $row->id_producto_agrupado . "</td>";
			echo "<td>". $row->id_producto_hijo . "</td>";
			echo "<td>". $row->cantidad . "</td>";
			echo "</tr>";
		}
		echo "</table>";

		?>

		<div id="add_cantidad_agrupados_wrapper">
			<form>
				<h2>Agregar cantidad a producto hijo de producto agrupado</h2>
				<input type="text" id="agrupado" placeholder="ID Producto agrupado">
				<input type="text" id="hijo" placeholder="ID Producto hijo">
				<input type="text" id="ca" placeholder="Cantidad">
				<a class="button" id="add">Agregar</a>
			</form>
		</div>

		<div id="mensaje" style="margin: 20px 0 0 0px;"></div>

		<script>
		jQuery(function($){
				$( "#add" ).click(function() {
					var agrupado = $('#agrupado').val();
					var hijo = $('#hijo').val();
					var cantidad = $('#ca').val();

					$.ajax({

						type : "POST",
						dataType : "json",
						url : "/wp-admin/admin-ajax.php",
						data : {
								'action': 'call_add_cantidad_agrupados',
								'agrupado': agrupado,
								'hijo': hijo,
								'cantidad': cantidad
							},
						beforeSend: function(){
							//$('.products').empty();
							console.log();
						},
						success: function(response) {
							//console.log(response);
							//$('#add_cantidad_agrupados_wrapper').hide();
							$('#agrupado').val('');
							$('#hijo').val('');
							$('#ca').val('');
							$('#mensaje').append("Se ha agregado la cantidad exitosamente.");
						}
					});
				});
		});
		</script>

<?php
}


function dojson() {

		global $wpdb;
		$query = $wpdb->prepare("SELECT * FROM wp3h_cantidad_productos_en_agrupados");
		$result = $wpdb->get_results ($query);
		$productos_agrupados = array();

		foreach($result as $row){
			$productos_agrupados_info = [$row->id_producto_agrupado, $row->id_producto_hijo, $row->cantidad];
			array_push($productos_agrupados, $productos_agrupados_info);
		}

		$data = json_encode($productos_agrupados);
		echo $data;
}

add_action( 'rest_api_init', function () {
	register_rest_route( 'cantidad-productos-agrupados/v1', '/data/',
		array(
			'methods' => 'GET',
			'callback' => 'dojson'
		)
	);
});


add_action('wp_ajax_call_add_cantidad_agrupados', 'add_cantidad_agrupados');
add_action('wp_ajax_nopriv_call_add_cantidad_agrupados', 'add_cantidad_agrupados');

function add_cantidad_agrupados(){

	global $wpdb;

	$agrupado = $_POST['agrupado'];
	$hijo = $_POST['hijo'];
	$cantidad = $_POST['cantidad'];

	$wpdb->insert('wp3h_cantidad_productos_en_agrupados', array(
		'id_producto_agrupado' => $agrupado,
		'id_producto_hijo' => $hijo,
		'cantidad' => $cantidad,
	));

	// in the end, returns success json data
	wp_send_json_success( [ $agrupado ] );

	// or, on error, return error json data
	wp_send_json_error([/* some data here */]);

}

// ALEX *
// Add an additional discount (sale category) -> Toolset custom field dependent

get_template_part('descuento-adicional');
