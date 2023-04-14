<?php
// Conectarse a la base de datos
$conn = mysqli_connect('localhost', 'username', 'password', 'database_name');

// Consultar los resultados del test
$query = "SELECT * FROM results";
$result = mysqli_query($conn, $query);

// Crear un array para almacenar los datos
$data = [];

// Recorrer los resultados y almacenarlos en el array
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row['result'];
}

// Convertir el array en un formato que pueda ser leído por Chart.js
$data = json_encode($data);

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

<!-- Incluir la biblioteca Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>

<!-- Crear un gráfico de pastel -->
<canvas id="pieChart"></canvas>

<script>
// Crear un gráfico de pastel utilizando Chart.js
var ctx = document.getElementById('pieChart').getContext('2d');
var pieChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Result 1', 'Result 2', 'Result 3', 'Result 4', 'Result 5'],
        datasets: [{
            data: <?php echo $data; ?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>
