<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../Assets/chart/Chart.css">
    <script src="../Assets/chart/Chart.js/Chart.min.js"></script>
    <title>Document</title>
</head>
<body>
<canvas id="canvas" height="450" width="610"></canvas>
<script>
    var DoughnutChart = [{
        value: 60px,
        color: "#fcc79e"
    }, {
        value: 30,
        color: "#beefd2"
    }, {
        value: 50,
        color: "#ffddfb"
    }, {
        value: 120,
        color: "#cdecff"
    }, {
        value: 90,
        color: "#fff5bc"
    }];
    var myDoughnutChart = new Chart(document.getElementById("canvas").getContext("2d")).Doughnut(DoughnutChart);

</script>
</body>
</html>
