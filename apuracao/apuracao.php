<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apuração de Votos</title>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="apuracao.css">
    </script>
  </head>

<body>
 

  <div class="titulo"> 
  <h1>Apuração de Votos</h1>
  </div> 

<div class="grafico">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
       var data = new google.visualization.arrayToDataTable([
          ['Candidato para Presidência', 'Porcentagem de Votos'],
          ["M&M Vermelho", 52],
          ["Shrek", 31],
          ["Rei Gelado", 16],
          ["Mike Wazowski", 1],
        ]);

        var options = {
          title: 'Apuração de Votos',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Apuração de Votos',
                   subtitle: 'total de votos válidos 96,7%' },
          bars: 'horizontal', // Required for Material Bar Charts.
          axes: {
            x: {
              0: { side: 'top', label: 'Porcentagem'} // Top x-axis.
            }
          },
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
<div id="top_x_div" style="width: 900px; height: 500px;"></div>
    </div>
</div>
    </div>
  
</div>
</body>
</html>