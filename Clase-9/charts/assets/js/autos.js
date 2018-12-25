$(document).ready(function() {

  function params() {
    return {
      marca: $('#marca').val(),
      modelo: $('#modelo').val()
    };
  }

  $('#btn-ver').click(function() {
      dibujarTabla();
  });
 
  function ajaxRequest() {
    return $.getJSON('/autos/leer.php', params());
  }

  $('#btn-salvar').click(function() {
    var request_body = {
     marca: $('#marca').val(),
      modelo: $('#modelo').val()
    }

    $.post('/autos/crear.php', request_body, function(data) {
      alert("Registro Correcto");
      $('#btn-ver').click();
    });

  });

  function dibujarTabla() {
    var tabla = $('#tabla-ajax');
    tabla.find('tr:gt(0)').remove();
    ajaxRequest().then(function (json) {
      json.forEach(function (item) {
        tabla.append(`<tr> <td>${item.id}</td> <td>${item.marca}</td> <td>${item.modelo}</td> </tr>`);
      });
      
    });
  }


});
