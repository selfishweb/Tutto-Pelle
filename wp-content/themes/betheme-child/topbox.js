jQuery(function($){
	$(document).ready(function(){

		//Deshabilitar mostrar opciones de las variaciones y cambiarlo por mostrar popup
		$('#pa_categoria-color').on('mousedown', function(e) {
            e.preventDefault();
            $('.seleccionar-topbox').css('visibility','visible').hide().fadeIn(500);
        });

        //Solo habilitar cerrar el popup si dan click fuera del contenido
        $('.topbox-container').click(function(e){
			e.stopPropagation();
		});

		//$('.descripcion-topbox').hide();
		//$('.seleccionar-topbox').hide();
		//$('.modulos-topbox').hide();
		
		$('.detalles-btn').click(function(e){
			$('.descripcion-topbox').css('visibility','visible').hide().fadeIn(500);
		});

		$('.politicas-btn').click(function(e){
			$('.politicas-topbox').css('visibility','visible').hide().fadeIn(500);
		});
		
		$('.topbox-close').click(function(e){
			$('.background-topbox').fadeOut(500);
		});
		
		$('.background-topbox').click(function(e){
			$('.background-topbox').fadeOut(500);
		});
		
	});

});