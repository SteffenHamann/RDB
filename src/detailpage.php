<?php
    //------------------- AB HIER IST DEIN PHP PART @YANNICK

    //@Yannick
    //mit dem Wert von $_GET['staatID'] kannst du die SQL Abfrage aufbauen, siehe dafür action_page.php
    //Der Befehl um die Where zu Defenieren könnte wie folgt aussehen
    //$sql = $sql . "STAAT_ID = " . $_GET["staatID"];

    echo $_GET['staatID'];

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
                Allgemeine Daten hier
            </div>
            <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                Diagramme hier
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

