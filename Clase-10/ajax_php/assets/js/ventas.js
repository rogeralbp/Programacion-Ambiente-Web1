$(document).ready(function() {

  function params() {
    return {
      email: $('#email').val(),
      fecha_inicio: $('#fecha_inicio').val(),
      fecha_fin: $('#fecha_fin').val()
    };
  }

  function ajaxRequest() {
    return $.getJSON('/reportes/ventas_ajax.php', params());
  }

  $('#btn-buscar').click(function() {
    dibujarTabla();
  });

  $('#btn-salvar').click(function() {
    var request_body = {
      usuario_id: $('#usuario_id').val(),
      monto: $('#monto').val()
    }
    $.post('/reportes/create.php', request_body, function(data) {
      $('#btn-buscar').click();
    });
  });

  function dibujarTabla() {
    var tabla = $('#tabla-ajax');
    tabla.find('tr:gt(0)').remove();
    ajaxRequest().then(function (json) {
      json.forEach(function (item) {
        tabla.append(`<tr><td>${item.email}</td><td>${item.monto}</td></tr>`);
      });
      dibujarGrafico(json);
    });
  }

  function dibujarGrafico(json) {
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    var chart_data = [['Vendedor', 'Monto']];

    json.forEach(function (item) {
      chart_data.push([item.email, parseFloat(item.monto)]);
    });

    function drawChart() {
      var data = google.visualization.arrayToDataTable(chart_data);
      var options = {
        title: 'Ventas por vendedor'
      };
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));

      chart.draw(data, options);
    }
  }
});
