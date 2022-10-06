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

<header>
<div class="titulo"> 
  <h1>Apuração de Votos</h1>
  </div>
  <div class="flex">

  <?php 
  include 'dados.php';
  foreach($estadosBrasileiros as $estado => $nome){
    echo '<div class="estado">' . $estado . '</div>';
  }
  ?> 
  </div>
</header>

<body>

    <div class=vermelho>
    <img src="https://casa.abril.com.br/wp-content/uploads/2022/02/MMs-ganham-novos-designs-e-novas-personalidades-vermelho.jpeg?quality=95&strip=info" alt="m&m vermelho" height=90px width=auto>
    </div>
      

<div class="grafico">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
    google.charts.load("current", {packages:["corechart"]});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Candidato para Presidência", "Porcentagem", { role: "style" }, { role: 'annotation' } ],
        ["M&M Vermelho", 52, "#DC3912", 'Ag' ],
        ["Shrek", 31, "#66AA00", 'Ag' ],
        ["Rei Gelado", 16, "#0099C6", 'Ag' ],
        ["Mike Wazowski", 1, "#FF9900", 'Ag' ]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotatio" },
                       2]);

      var options = {
        title: "Candidatos para presidência do Brasil",
        width: 1000,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style="width: 900px; height: 300px;"></div>
    </div>
</div>
    </div>
  
</div>
</body>
</html>