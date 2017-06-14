$(document).ready(function (e){

      //BAR CHART
        var tahun_lahir = [];
        var jml_tahun_lahir = [];

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function(){

            if (xhttp.readyState == 4 && xhttp.status == 200){

              var obj = JSON.parse(xhttp.responseText);

              for (var i=0; i < obj.length; i++) {
                tahun_lahir.push(obj[i]['Tahun']);
                jml_tahun_lahir.push(obj[i]['Jml']);
             }

            }

            var data = {
               labels: tahun_lahir,
               datasets: [
                 {
                   fillColor: "green",
                   strokeColor: "green",
                   pointColor: "green",
                   pointStrokeColor: "green",
                   pointHighLightFill: "#FFF",
                   pointHighLightStroke: "#FFF",
                   data: jml_tahun_lahir
                 }
               ]
             };

             var areaChartOptions = {
      //Boolean - If we should show the scale at all
      showScale: true,
      //Boolean - Whether grid lines are shown across the chart
      scaleShowGridLines: false,
      //String - Colour of the grid lines
      scaleGridLineColor: "rgba(0,0,0,.05)",
      //Number - Width of the grid lines
      scaleGridLineWidth: 1,
      //Boolean - Whether to show horizontal lines (except X axis)
      scaleShowHorizontalLines: true,
      //Boolean - Whether to show vertical lines (except Y axis)
      scaleShowVerticalLines: true,
      //Boolean - Whether the line is curved between points
      bezierCurve: true,
      //Number - Tension of the bezier curve between points
      bezierCurveTension: 0.3,
      //Boolean - Whether to show a dot for each point
      pointDot: false,
      //Number - Radius of each point dot in pixels
      pointDotRadius: 4,
      //Number - Pixel width of point dot stroke
      pointDotStrokeWidth: 1,
      //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
      pointHitDetectionRadius: 20,
      //Boolean - Whether to show a stroke for datasets
      datasetStroke: true,
      //Number - Pixel width of dataset stroke
      datasetStrokeWidth: 2,
      //Boolean - Whether to fill the dataset with a color
      datasetFill: true,
      //String - A legend template
      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
      //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
      maintainAspectRatio: true,
      //Boolean - whether to make the chart responsive to window resizing
      responsive: true
    };

      var barChartCanvas = $("#chart-bar-siswa").get(0).getContext("2d");
      var barChart = new Chart(barChartCanvas);
      var barChartData = data;
      var barChartOptions = {
         //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
         scaleBeginAtZero: true,
         //Boolean - Whether grid lines are shown across the chart
         scaleShowGridLines: true,
         //String - Colour of the grid lines
         scaleGridLineColor: "rgba(0,0,0,.05)",
         //Number - Width of the grid lines
         scaleGridLineWidth: 1,
         //Boolean - Whether to show horizontal lines (except X axis)
         scaleShowHorizontalLines: true,
         //Boolean - Whether to show vertical lines (except Y axis)
         scaleShowVerticalLines: true,
         //Boolean - If there is a stroke on each bar
         barShowStroke: true,
         //Number - Pixel width of the bar stroke
         barStrokeWidth: 2,
         //Number - Spacing between each of the X value sets
         barValueSpacing: 7,
         //Number - Spacing between data sets within X values
         barDatasetSpacing: 1,
         //String - A legend template
         legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
         //Boolean - whether to make the chart responsive
         responsive: true,
         maintainAspectRatio: true
       };

          barChartOptions.datasetFill = false;
          barChart.Bar(barChartData, barChartOptions);

        };
        xhttp.open("GET","addfile/grafik/chart-bar.php");
        xhttp.send();
        //BAR CHART



        //BAR-PIE
        var data_jk_siswa = [];
        var shttp = new XMLHttpRequest();
        shttp.onreadystatechange = function() {

          if (shttp.readyState == 4 && shttp.status == 200) {


              var obj = JSON.parse(shttp.responseText);

              for (var i = 0; i < obj.length; i++) {
                  var warna = ["red","blue"];
                  var data_jk={
                      value: obj[i]['Jml_Jk'],
                      color: warna[i],
                      highlight: "green",
                      label: obj[i]['Jk']
                  }
                data_jk_siswa.push(data_jk);
              }

              var pieChartCanvas = $("#chart-pie-siswa").get(0).getContext("2d");
              var chart_pie = new Chart (pieChartCanvas);

              var chart_pie_options = {
                segmentShowStroke: true,
                segmentStrokeColor: "#ffffff",
                segmentStrokeWidth: 2,
                percentageInnerCutout: 50,
                animationSteps: 70,
                animationEasing: "easeOutBounce",
                animateRotate: true,
                animateScale: false,
                responsive: true,
                maintainAspectRatio: true,
                legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
              };
               chart_pie.Doughnut(data_jk_siswa, chart_pie_options);
          }
        };

        shttp.open("GET","addfile/grafik/chart-pie.php");
        shttp.send();
        //BAR PIE

});
