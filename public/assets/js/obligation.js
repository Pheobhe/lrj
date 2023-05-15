
$(document).ready(function() {

  // SELECT PICKER
  $('#selectOrganismo').selectpicker();
  //////////// ORGANISMOS \\\\\\\\\\\\
  $('#tableActividades').DataTable({
    "pagingType": "simple",
    "lengthMenu": [5],
    "aoColumns": [
      { "orderSequence": [ "asc", "desc" ] },
      { "orderSequence": [ "asc", "desc" ] },
      { "orderSequence": [ "asc", "desc" ] }],
      buttons: true,
    "language": {
      "search": "Buscar ",
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
  
  //$('.dataTables_length').addClass('bs-select');

  /* Inicializo el Filtro de Personas */
  // Saco select de cantidad de elementos
  $("#tablaActividades").find("#tableActividades_length").parent().hide();
  $("#tablaActividades").find("#tableActividades_length").parent().removeClass("col-sm-12 col-md-6");
  // Oculto buscador y doy espacio entre filtro y tabla
  $("#tablaActividades").find(".row").first().hide();
  $("#tablaActividades").find(".row").first().after("<br>");
  // Acomodo botones de paginacion
  $("#tablaActividades").find(".row").last().find(".col-md-5").removeClass("col-md-5").addClass("col-md-4");
  $("#tablaActividades").find(".row").last().find(".col-md-7").removeClass("col-md-7").addClass("col-md-1");
  $("#tablaActividades").find(".row").last().prepend('<div class="col-sm-12 col-md-7"></div>');
  // Ajusto ancho de tabla sacándole el col-sm-12 al div que tiene tableActividades
  $('#tableActividades').unwrap();

  /* Toggle del Filtro Persona */
  $("#dropdownFilterOrganismo").click(function() {
    $("#tablaActividades").find(".row").first().toggle();
  });

  //////////// OBLIGADOS \\\\\\\\\\\\
  $('#tableAgentes').DataTable({
    "ajax": {
      "url" : "getCumplimiento",
      "data" : function ( d ) {
        d.filtroAgentes = $('#filtroAgentes').serializeArray();
      }
    },
    "columns": [
			{ "data": "persona" },
			{ "data": "cargo" },
      { "data": "nombre" },
      { "data": "cuil" },
      { "data": "obligacion" },
      { "data": "presentacion", "defaultContent": "No presentó" },
      { "data": "actividad" },
      { "data": "subactividad" },
      { "data": "en_fecha" }
    ],
    "processing": true,
    "serverSide": true,
    "pagingType": "simple",
    "lengthMenu": [15],
    buttons: true,
    "language": {
      "search": "Buscar ",
      "info": "_START_ - _END_ de _TOTAL_",
      "infoEmpty": "",
      "loadingRecords": "Cargando...",
      "zeroRecords": "No hay resultados",
      "infoFiltered": "(Total de _MAX_ registros)",
      "paginate": {
        "next":       ">",
        "previous":   "<"
      },
      "processing": "Cargando...",
      "emptyTable": "No hay datos en la tabla"
    },

    /* Textos tabla OBLIGADOS */
    'drawCallback': function() {
      var celdas = $("#tableAgentes tbody").find("tr");
        celdas.each(function(index, tr){
          // Persona
          str = tr.cells[0];
          if(str){
            tr.cells[0].innerText = str.innerText.toLowerCase();
            tr.cells[0].style.textTransform = "capitalize";
          }
          // Cargo
          str = tr.cells[1];
          if(str){
            tr.cells[1].innerText = str.innerText.toLowerCase();
            tr.cells[1].style.textTransform = "capitalize";
          }
          // Nombre
          str = tr.cells[2];
          if(str){
            tr.cells[2].innerText = str.innerText.toLowerCase();
            tr.cells[2].style.textTransform = "capitalize";
          }
          // CUIL
          str = tr.cells[3];
          if(str){
            tr.cells[3].innerText = str.innerText.substr(0,2) + '-' + str.innerText.substr(2,8) + '-' + str.innerText.substr(10,1);
            tr.cells[3].style = "white-space: nowrap; overflow: hidden;";
          }
          // Obligación
          str = tr.cells[4]; 
          if(str){
            tr.cells[4].innerText = str.innerText.charAt(0).toUpperCase() + str.innerText.substr(1).toLowerCase();
          }
          // Presentación
          str = tr.cells[5];
          if(str){
            tr.cells[5].innerText = str.innerText.charAt(0).toUpperCase() + str.innerText.substr(1).toLowerCase();
          }
          // Actividad
          str = tr.cells[6];
          if(str){
            tr.cells[6].innerText = str.innerText.charAt(0).toUpperCase() + str.innerText.substr(1).toLowerCase();
          }
          // En Fecha
          str = tr.cells[8];
          if(str){
            tr.cells[8].innerText = str.innerText.charAt(0).toUpperCase() + str.innerText.substr(1).toLowerCase();
          }

        });
    },

  });
  /* Inicializo el Filtro de Agentes */
  // Saco select de cantidad de elementos
  $("#tablaAgentes").find("#tableAgentes_length").parent().hide();
  // Oculto filtro y doy espacio entre filtro y tabla
  $("#tablaAgentes").find(".row").first().hide();
  $("#filtroAgentes").hide();
  $("#tablaAgentes").find(".row").first().after("<br>");
  // Acomodo botones de paginacion
  $("#tablaAgentes").find(".row").last().find(".col-md-5").removeClass("col-md-5").addClass("col-md-3");
  $("#tablaAgentes").find(".row").last().find(".col-md-7").removeClass("col-md-7").addClass("col-md-1");
  $("#tablaAgentes").find(".row").last().prepend('<div class="col-sm-12 col-md-8"></div>');
  // Ajusto ancho de tabla sacándole el col-sm-12 al div que tiene tableAgentes
  $("#tableAgentes").unwrap();
  $("#tableActividades_filter").css({"margin-top": "1em", "margin-left": "49%"});
  
  /* Toggle del Filtro Agente */
  $("#dropdownFilterAgente").click(function() {
    $("#filtroAgentes").toggle();
  });

  /* Reload ajax al filtro */
  var tabla = $('#tableAgentes').DataTable();
  $('#filtroAgentes').submit(function(event){
    event.preventDefault();
    tabla.ajax.reload();
  });

  /* Boton Limpiar Filtro */
  $('#btnLimpiar').click(function(event) {
    event.preventDefault();
    $('#selectObligacion').selectpicker('deselectAll');
    $('#selectPresentacion').selectpicker('deselectAll');
    $('#selectOrganismo').selectpicker('deselectAll');
    $('#filtroAgentes')[0].reset();
    // Por bug si no se limpia el persona
    ('.filter-option-inner-inner')[0].innerText = "Ingrese o seleccione un persona";
  });

  
});