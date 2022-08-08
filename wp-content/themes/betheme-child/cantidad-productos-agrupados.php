<?php

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
		/*
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
		*/
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
	register_rest_route( 'cantidad-productos-agrupados/v2', '/data/',
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




?>
