$categoriaspieles = array();

$product_child = wc_get_product( $product->children[0] );

foreach( $product_child->get_variation_attributes() as $taxonomy => $terms_slug ){
    // To get the attribute label (in WooCommerce 3+)

  //$terms_slug = get_the_terms( $post, 'pa_categoria-color' );

    foreach($terms_slug as $term){
      // Getting the term object from the slug
        $term_obj  = get_term_by('slug', $term, $taxonomy);

        $term_id   = $term_obj->term_id; // The ID
        $term_name = $term_obj->name; // The Name
        $term_slug = $term_obj->slug; // The Slug
        $term_description = $term_obj->description; // The Description

        $precio = 0;
        $precio_completo = 0;

        //Buscamos los precios y los sumamos por composición
        foreach ($product->children as $moduloid) {

          $leproduct = wc_get_product( $moduloid );

        $tienepiel = $leproduct->get_attribute('pa_categoria-color');

        if ( ! empty( $tienepiel ) ){

            $losattributes = array(
              'attribute_pa_categoria-color' => $term_slug
            );

            $variacionid = find_matching_product_variation_id($moduloid, $losattributes);

            $variacionobj =new WC_Product_Variation($variacionid);

            if($variacionobj->get_price()){
              if ($variacionobj->get_sale_price()){
                $precio +=  $variacionobj->get_sale_price();
                $precio_completo +=  $variacionobj->get_regular_price();
              }else{
                $precio +=  $variacionobj->get_price();
              }
            }

          }else{

            if ( $leproduct->is_type( 'variable' ) ){

              $variations = $leproduct->get_available_variations();
              $variations_id = wp_list_pluck( $variations, 'variation_id' );

              $variation = wc_get_product( $variations_id[0] );

              if ( $variation->get_price() ){

                if ( $variation->get_sale_price() ){

                  $precio += $variation->get_sale_price();
                    $precio_completo +=  $variation->get_regular_price();

                }else{

                  $precio +=  $variation->get_price();

                }
              }

            }else if ( $leproduct->is_type( 'simple' ) ){

              if ( $leproduct->get_price() ){

                if ( $leproduct->get_sale_price() ){

                  $precio += $leproduct->get_sale_price();
                    $precio_completo +=  $leproduct->get_regular_price();

                }else{

                  $precio +=  $leproduct->get_price();

                }
              }

            }
          }
        }


        //Separamos el slug para comparaciones de organizacion del array de pieles
        $arrayslug = explode("-", $term_slug);

        // OBJETO con el array de info de la piel en específico
        if ($precio_completo > $precio){

          $piel = array(
              "term_id" => $term_id,
              "piel" => $arrayslug[1],
              "descripcion" => $term_description,
              'name' => $term_name,
                'slug' => $term_slug,
                'precio' => $precio,
                'precio_completo' => $precio_completo
              );
        }else{
          $piel = array(
              "term_id" => $term_id,
              "piel" => $arrayslug[1],
              "descripcion" => $term_description,
              'name' => $term_name,
                'slug' => $term_slug,
                'precio' => $precio
              );
        }

        if ($minpricesetted == false){
          $minprice = $precio;
          $minpricesetted = true;
        }


        //Rellenamos el array checando si existe categoría y subcategoría para organizar
        if (array_key_exists($arrayslug[0], $categoriaspieles)){

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

$catkey = array_search ($categoria, $categoriaspieles);

echo "<div class='catpiel'><h3 class='titulocat'>".$catkey."</h3>";

  foreach ($categoria as $subcategoria) {
    $key = array_search ($subcategoria, $categoria);

    //$subcatnum = count($categoria);

    echo "<div class='subcatpiel'><h4>".$key."</h4>";
    echo "<p>".$subcategoria[0]['descripcion']."</p>";

    foreach ($subcategoria as $lapiel) {
      $imgurl = z_taxonomy_image_url($lapiel['term_id']);
    ?>
      <div class="contpiel" onClick=select_piel(<?php echo "'".$lapiel['slug']."'"; ?>)>
        <img class='pielimg' src=<?php echo '"'.$imgurl.'"'; ?> >
        <p><?php
        $nombrepiel = explode("/", $lapiel['name']);
        echo $nombrepiel[1]; ?>
        </p>
      </div>
    <?php
    }
    if ($subcategoria[0]['precio_completo']){ ?>

      <div class='preciocat'>
      <span class="price"><label>PRECIO:</label>
        <del>
          <span class="woocommerce-Price-amount amount">
            <bdi>
              <span class="woocommerce-Price-currencySymbol">
                $
              </span>
              <?php echo number_format($subcategoria[0]['precio_completo']) . ".00"; ?>
            </bdi>
          </span>
        </del>
        <ins>
          <span class="woocommerce-Price-amount amount">
            <bdi>
              <span class="woocommerce-Price-currencySymbol">
                 $
              </span>
              <?php echo " ". number_format($subcategoria[0]['precio']) . ".00"; ?>
            </bdi>
          </span>
        </ins>
      </span>

    <?php }else{ ?>
      <div class='preciocat'>
      <span class="price"><label>PRECIO:</label>
        <ins>
          <span class="woocommerce-Price-amount amount">
            <bdi>
              <span class="woocommerce-Price-currencySymbol">
                $
              </span>
              <?php echo " ". number_format($subcategoria[0]['precio']) . ".00"; ?>
            </bdi>
          </span>
        </ins>
      </span>
    <?php }
    echo "</div></div>";
  }
echo "</div><hr>";
}
?>
</div>
</div>
</div>

<?php } ?>
