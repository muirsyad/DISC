@extends('quiz')
@section('content')
    <div class="row">
        <div class="col col-sm-6 col-sm-12">
            <h1>{{ $results->answer }}</h1>
            @php
            {{
                $varD = $results->D;
                $varI = $results->I;
                $varS = $results->S;
                $varC = $results->C;

            }}

            @endphp
            <canvas id="myChart" width="100" height="100"></canvas>
            <script>
                var valD = "<?php echo $varD; ?>";
                var valI = "<?php echo $varI; ?>";
                var valS = "<?php echo $varS; ?>";
                var valC = "<?php echo $varC; ?>";
                console.log("value D:" + valD);
                console.log("value I:" + valI);
                console.log("value S:" + valS);
                console.log("value C:" + valC);
                const ctx = document.getElementById('myChart').getContext('2d');

                // <block:setup:1>
                // const labels = Utils.months({
                //     count: 7
                // });
                const data = {

                    labels: ['D', 'I', 'S', 'C'],
                    datasets: [{
                        label: 'My First Dataset',
                        data: [valD, valI, valS, valC],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                };
                // </block:setup>

                // <block:config:0>
                const config = {
                    type: 'line',
                    data: data,
                };
                // </block:config>


                const myChart = new Chart(ctx, config);
            </script>
        </div>
<a href="#" class="btn btn-danger">Logout</a>
    </div>
@endsection
