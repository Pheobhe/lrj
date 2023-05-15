$(document).ready(function() {

	 //////////// USUARIOS \\\\\\\\\\\\
	 $('#tableUsuarios').DataTable({
		"pagingType": "simple",
		"lengthChange": false,
		// "searching" : false,
    "lengthMenu": [10],
    "aoColumns": [
      { "orderSequence": [ "asc", "desc" ] },
      { "orderSequence": [ "asc", "desc" ] },
			{ "orderSequence": [ "asc", "desc" ] },
			{ "orderSequence": [ "asc", "desc" ] },
			{ "orderSequence": [ "asc", "desc" ] },
			{ "orderSequence": [ "asc", "desc" ] }
		],
      buttons: true,
    "language": {
      "search": "Buscar",
      "info": "_START_ - _END_ de _TOTAL_",
      "infoEmpty": "",
      "loadingRecords": "Cargando...",
      "zeroRecords": "No hay resultados",
      "infoFiltered": "(Total de _MAX_ registros)",
      "paginate": {
        "next":       ">",
        "previous":   "<"
      },
      "emptyTable": "No hay datos en la tabla"
    },
	});

	// Oculto buscador y doy espacio entre filtro y tabla
	$("#tablaUsuarios").find(".row").first().after("<br>");
	$("#tablaUsuarios").find(".row").first().hide();
	// Acomodo botones de paginacion
	var numeros_paginas = $("#tablaUsuarios").find(".row").last().find(".col-md-5");
	numeros_paginas.removeClass("col-md-5").addClass("col-md-4");
	$('#tableUsuarios_info').addClass("float-right");
  $("#tablaUsuarios").find(".row").last().find(".col-md-7").removeClass("col-md-7").addClass("col-md-1");
	$("#tablaUsuarios").find(".row").last().prepend('<div class="col-sm-12 col-md-7"></div>');
	

	/* Filtros */
	var table = $('#tableUsuarios').DataTable();
	$("#inputUsuario").on('keyup', function() {
		table.columns(0).search(this.value).draw();
	});
	$("#inputApellido").on('keyup', function() {
		table.columns(1).search(this.value).draw();
	});
	$("#inputNombre").on('keyup', function() {
		table.columns(2).search(this.value).draw();
	});
	
});


/* Toggle del Filtro Usuario */
$("#dropdownFilterUsuario").click(function() {
	$("#filtroUsuarios").toggle();
});
