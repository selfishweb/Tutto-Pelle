jQuery(function($){
	$(document).ready(function(){

		console.log( 'composiciones js cargado' );

		$(".pieles_modulo").change(function(){
		  var seleccion = $(this).val();
		  console.log( seleccion );
		}); 
		

		//otros_atributos
		//categoriaspieles_modulo

	});

	function agregarModulo( moduloid ){
		console.log( 'AGREGAMODULO' );
	}

});