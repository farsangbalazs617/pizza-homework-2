@extends('dashboard')

@section('dash_content')

    <canvas id="myChart" width="400" height="400"></canvas>
        <script>
         var orderlabels = [];
         var orderdata = [];

        @foreach($orders as $key => $order )
            orderlabels.push('{{$key}}');
            orderdata.push('{{$order}}');
        @endforeach

        const img = new Image();
        img.src = 'https://cdn.pixabay.com/photo/2017/12/09/08/18/pizza-3007395__480.jpg';
        img.onload = function(){
            const ctx = document.getElementById('myChart').getContext('2d');
            const fillPattern = ctx.createPattern(img, 'repeat');

            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: orderlabels,
                    datasets: [{
                        label: 'Orders',
                        data: orderdata,
                        backgroundColor: fillPattern,
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });

        };

        </script>



@endsection