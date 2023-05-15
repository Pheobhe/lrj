$(document).ready(function() {
  //////////// Voluntarios \\\\\\\\\\\\
  $('#tableVoluntarios').DataTable({
    "pagingType": "simple",
    "lengthMenu": [15],
    "ajax": {
      "url" : "getVoluntarios",
      "data" : function ( d ) {
        d.filtroAgentes = $('#filtroAgentes').serializeArray();
      }
    },
    "columns": [
        { "data": "persona" },
        { "data": "full_name" },
        { "data": "cuil" },
        { "data": "presentado" }
    ],
    "processing": true,
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
      "processing": "Cargando...",
      "emptyTable": "No hay datos en la tabla"
    },

    /* Textos tabla OBLIGADOS */
    'drawCallback': function() {
      var celdas = $("#tableVoluntarios tbody").find("tr");
        celdas.each(function(index, tr){
          // Nombre
          str = tr.cells[1];
          if(str){
            tr.cells[1].innerText = str.innerText.toLowerCase();
            tr.cells[1].style.textTransform = "capitalize";
          }
            // CUIL
          str = tr.cells[2];
          if(str){
            tr.cells[2].innerText = str.innerText.substr(0,2) + '-' + str.innerText.substr(2,8) + '-' + str.innerText.substr(10,1);
            tr.cells[2].style = "white-space: nowrap; overflow: hidden;";
          }
          // Presentación
          str = tr.cells[3]; 
          if(str){
            tr.cells[3].innerText = str.innerText.charAt(0).toUpperCase() + str.innerText.substr(1).toLowerCase();
          }
        });
    },

  });

  /* Inicializo el Filtro de Voluntarios */
  // Saco select de cantidad de elementos
  $("#tablaVoluntarios").find("#tableVoluntarios_length").parent().hide();
  // Oculto buscador y doy espacio entre filtro y tabla
  $("#tablaVoluntarios").find(".row").first().hide();
  $("#tablaVoluntarios").find(".row").first().after("<br>");
  // Acomodo botones de paginacion
  $("#tablaVoluntarios").find(".row").last().find(".col-md-5").removeClass("col-md-5").addClass("col-md-2");
  $("#tablaVoluntarios").find(".row").last().find(".col-md-7").removeClass("col-md-7").addClass("col-md-1");
  $("#tablaVoluntarios").find(".row").last().prepend('<div class="col-sm-12 col-md-9"></div>');
  // Ajusto ancho de tabla sacándole el col-sm-12 al div que tiene tableVoluntarios
  $('#tableVoluntarios').unwrap();

  /* Reload ajax al filtro */
  var tabla = $('#tableVoluntarios').DataTable();
  $('#filtroAgentes').submit(function(event){
    event.preventDefault();
    tabla.ajax.reload();
  });
 
  /* Boton Limpiar Filtro */
  $('#btnLimpiar').click(function(event) {
    event.preventDefault();
    $('#selectOrganismo').selectpicker('deselectAll');
    $('#selectPresentacion').selectpicker('deselectAll');
    $('#filtroAgentes')[0].reset();
    // Por bug si no se limpia el persona
    ('.filter-option-inner-inner')[0].innerText = "Ingrese o seleccione un persona";
  });

});

/* Toggle del Filtro Agente */
$("#dropdownFilterAgente").click(function() {
  $("#filtroAgentes").toggle();
});

