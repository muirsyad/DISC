@extends('layout2')
@section('content')

    <h1 class="title">Dashboard</h1>


    {{-- chart --}}
    <div class="row justify-content-center">
        <div class="col-md-5 ">
            <div class="card mt-3">
                <div class="card-body">
                    <canvas id="myChart" width="400" height="400"></canvas>
                    <script>
                        const ctx = document.getElementById('myChart').getContext('2d');
                        // const myChart = new Chart(ctx, {
                        //     type: 'bar',
                        //     data: {
                        //         labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                        //         datasets: [{
                        //             label: '# of Votes',
                        //             data: [12, 19, 3, 24, 2, 3],
                        //             backgroundColor: [
                        //                 'rgba(255, 99, 132, 0.2)',
                        //                 'rgba(54, 162, 235, 0.2)',
                        //                 'rgba(255, 206, 86, 0.2)',
                        //                 'rgba(75, 192, 192, 0.2)',
                        //                 'rgba(153, 102, 255, 0.2)',
                        //                 'rgba(255, 159, 64, 0.2)'
                        //             ],
                        //             borderColor: [
                        //                 'rgba(255, 99, 132, 1)',
                        //                 'rgba(54, 162, 235, 1)',
                        //                 'rgba(255, 206, 86, 1)',
                        //                 'rgba(75, 192, 192, 1)',
                        //                 'rgba(153, 102, 255, 1)',
                        //                 'rgba(255, 159, 64, 1)'
                        //             ],
                        //             borderWidth: 1
                        //         }]
                        //     },
                        //     options: {
                        //         scales: {
                        //             y: {
                        //                 beginAtZero: true
                        //             }
                        //         }
                        //     }
                        // });
                        const data = {
                            datasets: [{
                                label: 'Scatter Dataset',
                                data: [{
                                        x: 1,
                                        y: 0
                                    }, {
                                        x: 1,
                                        y: 1
                                    }, {
                                        x: 1,
                                        y: 2
                                    }, {
                                        x: 1,
                                        y: 3
                                    },
                                    {
                                        x: 1,
                                        y: 4
                                    },
                                    {
                                        x: 1,
                                        y: 5
                                    },
                                    {
                                        x: 1,
                                        y: 6
                                    },
                                    {
                                        x: 1,
                                        y: 7
                                    },
                                    {
                                        x: 1,
                                        y: 8
                                    },
                                    {
                                        x: 1,
                                        y: 9
                                    },
                                    {
                                        x: 1,
                                        y: 10
                                    },
                                    {
                                        x: 1,
                                        y: 11
                                    },
                                    {
                                        x: 1,
                                        y: 12
                                    },
                                    {
                                        x: 1,
                                        y: 13
                                    },
                                    {
                                        x: 1,
                                        y: 14
                                    },
                                ],
                                backgroundColor: 'rgb(255, 99, 132)'
                            }],
                        };
                        const myChart = new Chart(ctx, {
                            type: 'scatter',
                            data: data,
                            options: {
                                scales: {
                                    x: {
                                        type: 'linear',
                                        position: 'bottom'
                                    }
                                }
                            }

                        })
                    </script>

                </div>
            </div>
        </div>
    </div>
@endsection
