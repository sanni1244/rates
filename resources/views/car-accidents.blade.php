<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naira to Dollar Exchange Rate</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Inter', sans-serif;
        }

        .container {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 10rem;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .container:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 10px rgba(0, 0, 0, 0.15);
        }

        h1 {
            color: #1a202c;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .chart-container {
            position: relative;
            height: 400px;
            width: 100%;
            transition: all 0.3s ease-in-out;
        }

        .chart-container:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen">

    <div class="container mx-auto">
        <h1 class="text-4xl text-center">Naira to Dollar Exchange Rate</h1>
        <div class="chart-container">
            <canvas id="exchangeRateChart"></canvas>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('exchangeRateChart').getContext('2d');
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: {!! $years !!},
                datasets: [{
                    label: 'Naira to Dollar Exchange Rate',
                    data: {!! $exchangeRates !!},
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 3,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    fill: true,
                    tension: 0.3,
                    pointRadius: 6,
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                    pointHoverRadius: 8,
                    pointHoverBackgroundColor: 'rgba(255, 99, 132, 1)',
                }]
            },
            options: {
                animation: {
                    duration: 2000,  
                    easing: 'easeOutCubic'  
                },
                scales: {
                    y: {
                        beginAtZero: false,
                        min: 1650,
                        max: 1750,
                        grid: {
                            color: 'rgba(200, 200, 200, 0.3)'
                        },
                        title: {
                            display: true,
                            text: 'Exchange Rate (₦ per $)',
                            color: '#333',
                            font: {
                                size: 14,
                                weight: 'bold'
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        labels: {
                            color: 'rgba(75, 192, 192, 1)',
                            font: {
                                size: 16,
                                weight: 'bold'
                            }
                        }
                    },
                    tooltip: {
                        backgroundColor: '#1e40af',
                        titleFont: {
                            size: 16,
                            weight: 'bold'
                        },
                        bodyFont: {
                            size: 14
                        },
                        padding: 12,
                        cornerRadius: 10
                    }
                }
            }
        });

        // Update the chart every 3 seconds
        setInterval(() => {
            chart.data.datasets[0].data.shift();
            chart.data.datasets[0].data.push(1700 + Math.floor(Math.random() * 50) - 25); 
            chart.update('active');
        }, 5000);
    </script>
</body>
</html>
