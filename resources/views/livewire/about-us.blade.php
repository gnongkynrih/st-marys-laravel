<div class="min-h-screen bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">
                Task Completion Statistics
            </h2>
            <p class="mt-4 text-lg text-gray-500">
                Visual representation of completed and incomplete tasks
            </p>
        </div>
        <div class="flex gap-4">
            <div class="mt-12 w-96 h-96 bg-purple-200">
            <canvas id="myChart"></canvas>
        </div>
         <div class="mt-12 w-96 h-96 bg-amber-200">
            <canvas id="anotherChart"></canvas>
        </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // get the id of the canvas
        const ctx = document.getElementById('anotherChart').getContext('2d');
        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: <?php echo json_encode($labels); ?>,
                datasets: [{
                    data: <?php echo json_encode($data); ?>,
                    backgroundColor: <?php echo json_encode($colors); ?>,
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                size: 16
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'My TODO LIST'
                    }
                }
            }
        });


        const barchart = document.getElementById('myChart').getContext('2d');
        new Chart(barchart, {
            type: 'bar',
            data: {
                labels: ['Total','Incomplete','Completed'],
                datasets: [{
                    data: <?php echo json_encode($totalData); ?>,
                    backgroundColor: ['#BDEAE3','#2FBA97','#045767'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                        labels: {
                            font: {
                                size: 16
                            }
                        }
                    },
                    title: {
                        display: true,
                        text: 'My TODO LIST'
                    }
                }
            }
        });
    </script>
</div>
