$(document).ready(function () {
	console.log("pagina pronta");

	$('#btn-somar').click(function (evento) {
		console.log(evento);

		evento.preventDefault();

		var a = $('#num-a').val(), 
			b = $('#num-b').val();

		console.log(a);
		console.log(b);

		$.ajax({
			url: 'somador.json.php',
			method: 'GET',
			data: {
				'a': a,
				'b': b
			},
			success: function (resultado) {
				console.log(resultado);

				$('#a').html(resultado.a);
				$('#b').html(resultado.b);
				$('#c').html(resultado.c);
			}
		});

		return false;
	});

	var nome = "Mundo";

	$.ajax({
		url: 'ola.json.php',
		method: 'GET',
		data: {
			'nome': nome
		},
		success: function (resultado) {
			console.log(resultado);

			$('#ola').html(resultado.ola);
		}
	});

});