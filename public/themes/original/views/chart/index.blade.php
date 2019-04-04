<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        .legend span{
            width: 10px;
            height: 10px;
            display: inline-block;
            margin-right: 10px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container" id="app">
        <h1>Rocket League Wins Comparison</h1>
   {{--  <wins-graph :player="{{ json_encode($jeffrey) }}"
                :opponent="{{json_encode($taylor)}}">
        
    </wins-graph> --}}
         <graph :keys="{{$posts->keys()}}"
                :values="{{$posts->values()}}">
             
         </graph>

        <graph :keys="['foo', 'bar']"
               :values="[20,50]">

        </graph>
    {{-- <canvas id="graph" width="600" height="400"></canvas> --}}
   {{--  <graph  :labels="['January', 'Febrbruary', 'March']" 
            :values="[10,42,4]"></graph>
     <graph  :labels="['April', 'May', 'June']" 
    :values="[100,412,43]"></graph> --}}
    </div>
x
    <script src="/js/main.js"></script>
   {{--  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>

    <script>
        var ctx = document.getElementById('graph').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
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
    </script> --}}
</body>
</html>