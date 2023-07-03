<div class="col-span-9">
    <canvas id="myChart"></canvas>
</div>

@push('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('livewire:load', function() {
            var ctx = document.getElementById('myChart').getContext('2d');

            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: @json($chartData['label']),
                    datasets: [{
                        label: 'Kunjungan',
                        data: @json($chartData['product']->pluck('visitors')->toArray()),
                        fill: false,
                        borderColor: 'rgb(134, 27, 67)',
                        lineTension: 0.1,
                    }]
                },
                options: {
                    scales: {
                        y: {
                            ticks: {
                                beginAtZero: true,
                                precision: 0, 
                            }
                        }
                    }
                }
            });
        });
    </script>
@endpush
