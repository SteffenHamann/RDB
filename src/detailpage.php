<?php
    //------------------- AB HIER IST DEIN PHP PART @YANNICK

    //@Yannick
    //mit dem Wert von $_GET['staatID'] kannst du die SQL Abfrage aufbauen, siehe dafür action_page.php
    //Der Befehl um die Where zu Defenieren könnte wie folgt aussehen
    //$sql = $sql . "STAAT_ID = " . $_GET["staatID"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "america";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    $sql = "
    SELECT
        *
    From 
        staaten,
        economydata,
        economies
    WHERE
        staaten.STAAT_ID = ". $_GET['staatID']." AND
        staaten.STAAT_ID = economydata.STAAT_ID AND
        economies.INDUSTRY_ID=economydata.INDUSTRY_ID  
        ORDER BY economydata.INDUSTRIE_UMSATZ_ANTEIL DESC;
      
    
    ";

    $sql2 = "
    SELECT
        kandidaten.KANDIDAT_NAME
    From 
        staaten,
        kandidaten
    WHERE
        staaten.STAAT_ID = ". $_GET['staatID']." AND
        staaten.STAERKSTE_PARTEI_ID = kandidaten.STAERKSTE_PARTEI_ID
    ";
    

    

    $result = mysqli_query($conn,$sql);
    $result2 = mysqli_query($conn,$sql2);

    if ( ! $result )
{
  die('Ungültige Abfrage: ' . mysqli_error());
}


//Allgemeine Infos
//echo '<table border="1"><tr><th>Staat_ID</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th><th>Staat_Name</th></tr>';
$row1 = mysqli_fetch_assoc($result);
$row3 = mysqli_fetch_assoc($result2);






    //------------------- BIS HIER

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <meta name="description" content="RDB Projekt SS2017">
  <meta name="author" content="Steffen Hamann & Yannick Collin">
  <link rel="icon" href="../favicon.ico">
  <!-- NICHT VERGESSEN -->

  <title>RDB Projekt SE2017</title>

  <!-- Bootstrap core CSS -->
  <link href="../bootstrap/bootstrap.css" rel="stylesheet">

  <!-- Custom styles  -->
  <link href="../mapael/mapael.css" rel="stylesheet">

  <!-- Custom styles  -->
  <link href="main.css" rel="stylesheet">


<!-- TODO LIST
  1. Help
  2. Author
-->

</head>

<!-- AB HIER IST DEIN HTML PART @YANNICK -->

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                Allgemeine Daten hier </br>
                
                <table class="table table-striped table-bordered table-hover"> 
                    <tbody>
                        <?php
                        echo "<p><img src='".$row1['FLAGGE']."' /></p>"; 
                        echo "<tr>
                        <td>Name: </td><td>".$row1['STAAT_NAME']."</td></tr>
                        <tr><td>Kennung:</td><td>".$row1['STAAT_KENNUNG']."</td></tr>
                        <tr><td>Hauptstadt</td><td>".$row1['HAUPTSTADT']."</td></tr>
                        <tr><td>Einwohner</td><td>".$row1['EINWOHNER']."</td></tr>
                        <tr><td>Fläche</td><td>".$row1['FLAECHE']."km²</td></tr>
                        <tr><td>Bevölkerungsdichte</td><td>".$row1['BEVOELK_DICHTE']." pro km²</td></tr>
                        <tr><td>Arbeitslosenrate</td><td>".$row1['ARBEITSLOSENRATE']."%</td></tr>
                        <tr><td>Pro-Kopf-Einkommen: </td><td>".$row1['PRO_KOPF_EINKOMMEN']."$</td></tr>
                        ";
                        ?>
                        
                                     
                    </tr>

                    </tbody>
                </table>
                
            </div>
            <div class="col-md-7 col-lg-4 col-sm-12 col-xs-12">
                Diagramme hier
                <div class="row">
                    <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <?php

                //Diagramm Ethnische Gruppen als PolarArea-Chart
                echo "<canvas id='ethnicsChart' width='200' height='200'></canvas>";
                echo "<script src='/RDB/src/Chart.js'></script>";             
                echo "<script>
                 new Chart(document.getElementById('ethnicsChart'), {
                    type: 'polarArea',
                    data: {
                    labels: ['White','Black','Hispanic','Asian', 'Mixed Ethnics'],
                    datasets: [{
                        label: 'Ethnic Groups (percentage)',
                        backgroundColor: ['#e6e6e6', '#000000','#a89070 ','#efd6a1','#afc9be '],
                        data: [".$row1['ANTEIL_WEISSE'].",".$row1['ANTEIL_SCHWARZ'].",".$row1['ANTEIL_HISPANIC_LATINOS'].",".$row1['ANTEIL_ASIATISCH'].",".$row1['MIXED_RACES']."]
                    }]
                    },
                    
                    options: {
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                //get the concerned dataset
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                return data.labels[tooltipItem.index]+ ': ' + dataset.data[tooltipItem.index] + '%';
                                }
                            }
                        },
                        legend: { 
                            position: 'bottom',
                        },
                        title: {
                            display: true,
                            text: 'The ethnic Groups (percentage) in ".$row1['STAAT_NAME']."'
                        }
                    }
                });
                </script>";
                ?>
                
                <?php
                //Wahlergebnisse
                //echo $row1['REPUBLICAN_VOTES_PERCENT'].";".$row1['DEMOCRATS_VOTES_PERCENT'].";".(100-$row1['DEMOCRATS_VOTES_PERCENT']-$row1['REPUBLICAN_VOTES_PERCENT']);
                echo "<canvas id='VoteChart' width='200' height='200'></canvas>";
                echo "<script src='/RDB/src/Chart.js'></script>";             
                echo "<script>
                 new Chart(document.getElementById('VoteChart'), {
                    type: 'pie',
                    data: {
                    labels: ['Republicans','Democrats','Rest'],
                    datasets: [{
                        label: 'Vote Results (percentage)',
                        backgroundColor: ['#70a463 ', '#333876 ','#991b5c'],
                        data: [".$row1['REPUBLICAN_VOTES_PERCENT'].",".$row1['DEMOCRATS_VOTES_PERCENT'].", ".(100-$row1['DEMOCRATS_VOTES_PERCENT']-$row1['REPUBLICAN_VOTES_PERCENT'])."]
                    }]
                    },
                    
                    options: {
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                //get the concerned dataset
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                return data.labels[tooltipItem.index]+ ': ' + dataset.data[tooltipItem.index] + '%';
                                }
                            }
                        },
                        legend: { 
                            position: 'bottom',
                        },
                        title: {
                            display: true,
                            text: 'Vote Results (percentage) in ".$row1['STAAT_NAME']."'
                        }
                    },
                    
                });
                </script>";
                ?>
                </div>

                
                <?php
                //Wahergebnisse in Zahlen
                echo "<canvas id='VoteNumChart' width='200' height='200'></canvas>";
                echo "<script src='/RDB/src/Chart.js'></script>";             
                echo "<script>
                 new Chart(document.getElementById('VoteNumChart'), {
                    type: 'bar',
                    data: {
                    labels: ['Republicans','Democrats'],
                    datasets: [{
                        label: 'Vote Results (Numbers)',
                        backgroundColor: ['#70a463 ', '#333876 '],
                        data: [".$row1['REPUBLICAN_VOTES_NUMBERS'].",".$row1['DEMOCRATS_VOTES_NUMBERS']."]
                    }]
                    },
                    
                    options: {
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                //get the concerned dataset
                                var dataset = data.datasets[tooltipItem.datasetIndex];
                                return data.labels[tooltipItem.index]+ ': ' + dataset.data[tooltipItem.index] + ' Votes';
                                }
                            }
                        },
                        legend: { 
                            position: 'bottom',
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        },
                        title: {
                            display: true,
                            text: 'Vote Results (percentage) in ".$row1['STAAT_NAME']." in which ".$row3['KANDIDAT_NAME']." won'
                        }
                    },
                    
                });
                </script>";

                //WirtschaftsDiagrammUmsatz
                $industrydata = array();
                $industryName = array();
                $industryVolume = array();
                while($row2 = $result->fetch_assoc()){
                  array_push($industrydata,$row2['2016_Q3']);
                  array_push($industryName,$row2['INDUSTRY_NAME']);
                  array_push($industryVolume,$row2['INDUSTRIE_UMSATZ_ANTEIL']);
                }

                echo "<canvas id='EconomiesChart' width='200' height='200'></canvas>";
                echo "<script src='/RDB/src/Chart.js'></script>";             
                echo "<script>
                    new Chart(document.getElementById('EconomiesChart'), {
                        type: 'bar',
                        data: {
                        labels: ".json_encode($industryName).",
                        datasets: [{
                            label : 'Stärkste Industrie',
                            backgroundColor: [
                                '#026bdf',
                                '#c45f5a' ,
                                '#d89144' ,
                                '#298c42',
                                '#b263f9' ,
                                '#092236' ,
                                '#5f0b19' ,
                                '#c52d9e',
                                '#3e158e' ,
                                '#d56935' ,
                                '#92b0f8' ,
                                '#316d7e',
                                '#9f488b' ,
                                '#e51fd9' ,
                                '#e52e5d',
                                '#44e180' ,
                                '#2c15a7' ,
                                '#189df6' ,
                                '#89911f' ,
                                '#9c0725' ,
                                '#27fb92'
                            ],
                            data: ".json_encode($industrydata)."
                        }]
                        },
                        
                        options: {
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                    //get the concerned dataset
                                    var dataset = data.datasets[tooltipItem.datasetIndex];
                                    return data.labels[tooltipItem.index]+ ': ' + dataset.data[tooltipItem.index] + ' US$';
                                    }
                                }
                            },
                            scales: {
                                yAxes: [{ 
                                scaleLabel: {
                                    display: true,
                                    labelString: 'Dollar'
                                }
                                }],
                            },
                            legend: { 
                                position: 'right',
                                display: false
                            },
                            title: {
                                display: true,
                                text: 'Industry volume (thousand) in ".$row1['STAAT_NAME']."'
                            }
                        }
                    });
                </script>";
                ?>


                <?php
                //WirtschaftUmsatzAnteil
                echo "<canvas id='EconomiesVolumeChart' width='200' height='200'></canvas>";
                echo "<script src='/RDB/src/Chart.js'></script>";             
                echo "<script>
                    new Chart(document.getElementById('EconomiesVolumeChart'), {
                        type: 'pie',
                        data: {
                        labels: ".json_encode($industryName).",
                        datasets: [{
                            label: '',
                            backgroundColor: [
                                '#026bdf',
                                '#c45f5a' ,
                                '#d89144' ,
                                '#298c42',
                                '#b263f9' ,
                                '#092236' ,
                                '#5f0b19' ,
                                '#c52d9e',
                                '#3e158e' ,
                                '#d56935' ,
                                '#92b0f8' ,
                                '#316d7e',
                                '#9f488b' ,
                                '#e51fd9' ,
                                '#e52e5d',
                                '#44e180' ,
                                '#2c15a7' ,
                                '#189df6' ,
                                '#89911f' ,
                                '#9c0725' ,
                                '#27fb92'
                            ],
                            data: ".json_encode($industryVolume)."
                        }]
                        },
                        
                        options: {
                            tooltips: {
                                callbacks: {
                                    label: function(tooltipItem, data) {
                                    //get the concerned dataset
                                    var dataset = data.datasets[tooltipItem.datasetIndex];
                                    return data.labels[tooltipItem.index]+ ': ' + dataset.data[tooltipItem.index] + '%';
                                    }
                                }
                            },
                            legend: { 
                                position: 'right',
                            },
                            title: {
                                display: true,
                                text: 'Industry volume (percentage) in ".$row1['STAAT_NAME']."'
                            }
                        }
                    });
                </script>";
                ?>
                </div>
            </div>
        </div>
    </div>

 <!-- BIS HIER HTML PART -->   


    <!-- Button Leiste  -->
    <div class="container">
        <div class="row">
            <div class="">
                <a href="index.php" class="btn btn-danger" style="float:right">Zurück</a>
            </div>
        </div>
    </div>




  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.2.7/raphael.min.js" charset="utf-8"></script>
  <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
  </script>

  <script src="../bootstrap/bootstrap.js"></script>

</body>
