$(document).ready(function() {
  var email         = $('#email').val();
  var fecha_inicio  = $('#fecha_inicio').val();
  var fecha_fin     = $('#fecha_fin').val();
  var params = {
    email: email,
    fecha_inicio: fecha_inicio,
    fecha_fin: fecha_fin
  };
  $.getJSON('/reportes/ventas_ajax.php', params, function(json) {

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
        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));

        chart.draw(data, options);
      }

  });
});
