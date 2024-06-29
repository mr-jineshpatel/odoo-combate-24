<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsub";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$dataCount = $result->num_rows;
$totalAmount = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalAmount += $row['price'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Analysis Page</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        h1 {
            text-align: center;
        }
        .summary {
            background-color: #f0f0f0;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
        }
        canvas {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Analysis Page</h1>
        
        <div class="summary">
            <h2>Summary</h2>
            <p>Total Records: <?php echo $dataCount; ?></p>
            <p>Total Amount: ₹<?php echo number_format($totalAmount, 2); ?></p>
        </div>

        <canvas id="myBarChart"></canvas>

        <script>
            var ctx = document.getElementById('myBarChart').getContext('2d');
            var myBarChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Total Records', 'Total Amount'],
                    datasets: [{
                        label: 'Summary',
                        data: [<?php echo $dataCount; ?>, <?php echo $totalAmount; ?>],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.6)',
                            'rgba(54, 162, 235, 0.6)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Data Analysis - Bar Chart'
                        }
                    }
                }
            });
        </script>

    </div>
</body>
</html>
