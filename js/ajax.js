$(function(){
	$('#search').focus();
	$('#search_form').submit(function(e){
		e.preventDefault();
	})

	$('#search').keyup(function(){
		var envio = $('#search').val();

		$('#resultados').html('<h4><img src="img/Circulo.gif" width="50" position="center" alt="" />Cargando</h4>');

		$.ajax({
			type: 'POST',
			url:'php/buscador.php',
			data: ('search='+envio),
			success: function(resp){
				if(resp!=""){
					$('#resultados').html(resp);
				}
			}
		})
	})
})