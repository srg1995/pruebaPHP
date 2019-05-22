$( document ).ready(function() {
	$(".mensaje").hide();
	$("#btn-ajax").on("click", enviarLista);

	$("#btn-ordenacion").on("click", ordenarLista);
});


function enviarLista() {
    // URLs de las peticiones ajax
    var url = "http://192.168.64.2/indraPHP/ayuda/registrarProducto";

    var misDatos = [
			{
				"nombre": "camdsaffa",
				"codigo": "001",
				"descripcion": "cama de 135"
			},
			{
				"nombre": "armario",
				"codigo": "002",
				"descripcion": "armario doble",
			},
			{
				"nombre": "silla",
				"codigo": "003",
				"descripcion": "silla de cocina"
			},
			{
				"nombre": "mesa",
				"codigo": "004",
				"descripcion": "mesa de salon"
			},
			{
				"nombre": "plato",
				"codigo": "005",
				"descripcion": "plato grande"
			},
			{
				"nombre": "vaso",
				"codigo": "006",
				"descripcion": "vaso de cristal",
			}]
		;
    //Peticion ajax
	$.ajax({
		type: "POST",
		url: url,
		data: JSON.stringify(misDatos),
		dataType: 'text',
		timeout: 10000,
		contentType: 'application/json; charset=utf-8',
		async: true,
		success: function(data) {
			if(data === "ok"){
				$(".mensaje").show();
				$(".mensaje").html("Los productos se registraron correctamente");
				$(".mensaje").css("color","green");
				setTimeout(function(){
					window.location.href = "http://192.168.64.2/indraPHP/ayuda";
				}, 500);

			}
			else{
				$(".mensaje").show();
				$(".mensaje").html("Los productos ya estan registrados");
				$(".mensaje").css("color","red");
				setTimeout(function(){
					window.location.href = "http://192.168.64.2/indraPHP/ayuda";
				}, 500);
			}
			//deshabilito el boton para que no se pueda volver a pulsar
			$('#btn-ajax').attr("disabled", true);
			console.log(data)

		},
		error: function(xhr, status, error) {
			console.log("errorrr"+error);
		}
	});
}

function ordenarLista() {
	// URLs de las peticiones ajax
	var url = "http://192.168.64.2/indraPHP/ayuda/ordenarProductos";

	var misDatos;
	//Peticion ajax
$.ajax({
	type: "POST",
	url: url,
	data: JSON.stringify(misDatos),
	dataType: 'text',
	timeout: 10000,
	contentType: 'application/json; charset=utf-8',
	async: true,
	success: function(data) {
		window.location.href = "http://192.168.64.2/indraPHP/ayuda/ordenarProductos";
		console.log(data);
	},
	error: function(xhr, status, error) {
		console.log("errorrr"+error);
	}
});
}