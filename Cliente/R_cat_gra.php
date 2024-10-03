<?php
include_once("../servidor/conexion.php");

// Ejecución de la consulta y manejo de errores
$sql = "SELECT r.categoria, COUNT(u.idcat) as sum 
        FROM productos AS u 
        INNER JOIN categorias AS r 
        ON u.idcat = r.idcat
        GROUP BY u.idcat";

$res = $conexion->query($sql);

if (!$res) {
    die("Error en la consulta SQL: " . $conexion->error);
}
?>

<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Tipos de categoria', 'Cantidad por tipo'],
            <?php
                $rows = [];
                while ($fila = $res->fetch_assoc()) {
                    $rows[] = "['" . $fila["categoria"] . "'," . $fila["sum"] . "]";
                }
                echo implode(",", $rows); // Elimina la coma final
                ?>
        ]);

        var options = {
            title: 'TIPOS DE CATEGORIAS',
            width: 600,
            height: 400,
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    }
    </script>
</head>
<body>
    
    <?php include_once("include/encabezado.php"); ?>
    <div id="chart_div"></div>
</body>
</html>