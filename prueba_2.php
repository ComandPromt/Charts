<?php

$nombres=array("Descargas",
        "Russia",
        "Iraq",
        "United Arab Emirates",
        "Canada");

$datos=array("133.3", "86.2","52.2", "51.2", "50.2");
 
$dataPoints = array( 
	array("y" => 3373.64, "label" => "dfsdf" ),
	array("y" => 2435.94, "label" => "Frsdfsdfance" ),
	array("y" => 1842.55, "label" => "Chsdfsdfina" ),
	array("y" => 1828.55, "label" => "Russia" ),
	array("y" => 1039.99, "label" => "Switzerland" ),
	array("y" => 765.215, "label" => "Japan" ),
	array("y" => 612.453, "label" => "Netherlands" )
);

$dataPoints2 = array( 
	array("y" => 7,"label" => "March" ),
	array("y" => 12,"label" => "April" ),
	array("y" => 28,"label" => "May" ),
	array("y" => 18,"label" => "June" ),
	array("y" => 41,"label" => "July" )
);

?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
    <title>ChartJS - Doughnut</title>
    <link type="text/css" rel="stylesheet" href="css/default.css" />
<script>
//window.onload = function() {
 

//}
</script>
</head>
<body>
<div style="margin:auto;height:440px;width:370px;">
<canvas  style="width:100%;height:100%;" id="oilChart"></canvas>
</div>
<br/><br/>
<div id="chartContainer" style="margin:auto;height:500px;width:100%;"></div>
<br/><br/>
<div id="chartContainer2" style="margin:auto;height:500px;width:100%;"></div>
<br/><br/>
<div style="margin:auto;height:440px;width:370px;">
<canvas  style="width:100%;height:100%;" id="oilChart2"></canvas>
</div>

    <!-- javascript -->
	<script src="js/canvasjs.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/Chart.min.js"></script>
 <script>
 var oilCanvas = document.getElementById("oilChart");

Chart.defaults.global.defaultFontFamily = "Arial";
Chart.defaults.global.defaultFontSize = 30;

var oilData = {
    labels:<?php echo json_encode($nombres, JSON_NUMERIC_CHECK)?>,

    datasets: [
        {
            data: <?php echo json_encode($datos, JSON_NUMERIC_CHECK)?>,
            backgroundColor: [
                "#FF6384",
                "#63FF84",
                "#84FF63",
                "#8463FF",
                "#6384FF"
            ]
        }]
};

var pieChart = new Chart(oilCanvas, {
  type: 'doughnut',
  data: oilData
});

// Grafica 2

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Visitas por categorías"
	},
	axisY: {
		title: "Visitas por categorías"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## visitas",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

 // Grafica 3
 
 var chart2 = new CanvasJS.Chart("chartContainer2", {
	animationEnabled: true,
	title:{
		text: "Top de descargas"
	},
	axisY: {
		title: "Descargas por imágenes",
		//prefix: "$",
		//suffix:  "k"
	},
	data: [{
		type: "bar",
		yValueFormatString: "#,##0",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart2.render();

// Grafica 4

var oilCanvas2 = document.getElementById("oilChart2");

var oilData2 = {
    labels:<?php echo json_encode($nombres, JSON_NUMERIC_CHECK)?>,

    datasets: [
        {
            data: <?php echo json_encode($datos, JSON_NUMERIC_CHECK)?>,
            backgroundColor: [
                "#FF6384",
                "#63FF84",
                "#84FF63",
                "#8463FF",
                "#6384FF"
            ]
        }]
};

var pieChart = new Chart(oilCanvas2, {
  type: 'pie',
  data: oilData2
});

    </script>
</body>
</html>   