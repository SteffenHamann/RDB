
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

<body>
  <!-- HIER BEGINNT DER HEADER -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
          aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="index.php">RDB SS2017</a>
      </div>

      <!-- HIER BEGINNT DER NAV HEADER -->
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
           <button type="button" style="color: #9d9d9d; padding-top: 15px; padding-bottom: 15px; background:transparent; border: none; margin-right: 20px;" data-toggle="modal" data-target="#author">Author</button>
          </li>

          <li>
            <button type="button" style="color: #9d9d9d; padding-top: 15px; padding-bottom: 15px; background:transparent; border: none; margin-right: 20px;" data-toggle="modal" data-target="#help">Help</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">

      <!-- HIER BEGINNT DIE SIDEBAR -->
      <div class="col-sm-3 col-md-2 sidebar">
        <div class="nav nav-sidebar">
          <form action="./action_page.php" method="post">
            <!-- EINWOHNERZAHL TAB -->
            <button type="button" data-id="u1" class="dropdown-header">Population</button>
            <ul class="dropdown-item" id="u1">
              <li>
                <p>Population:<span style="padding-left: 10px;"><input type="text" Placeholder="in mio." size="2" class="right" name="population" id="population" value="<?php error_reporting(0); echo $_POST["population"]; ?>"></span></p>
              </li>
              <li>
                <p style="font-size: 25px;">Ethnicities</p>
              </li>
              <li>
                <p>White<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percWhite" id="percWhite" value="<?php error_reporting(0); echo $_POST["percWhite"]; ?>"></span></p>
              </li>
              <li>
                <p>Black<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percBlack" id="percBlack" value="<?php error_reporting(0); echo $_POST["percBlack"]; ?>"></span></p>
              </li>
              <li>
                <p>Hispanic<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percLatin" id="percLatin" value="<?php error_reporting(0); echo $_POST["percLatin"]; ?>"></span></p>
              </li>
              <li>
                <p>Asian<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percAsian" id="percAsian" value="<?php error_reporting(0); echo $_POST["percAsian"]; ?>"></span></p>
              </li>
            </ul>

            <!-- WIRTSCHAFT TAB -->
            <button type="button" data-id="u2" class="dropdown-header">Economy</button>
            <ul class="dropdown-item" id="u2">
              <li>
                <p style="font-size: 25px;">Strongest economy</p>
              </li>
              <li><select style="margin-bottom: 10px; font-size:13px" class="" name="economy" id="economy">
                      <option value="" selected>--Choose branch--</option>
                      <option value="3">Agriculture, forestry, fishing, and hunting</option>
                      <option value="6">Mining</option>
                      <option value="10">Utilities</option>
                      <option value="11">Construction</option>
                      <option value="12">Manufacturing</option>
                      <option value="13">- Durable goods manufacturing</option>
                      <option value="25">- Nondurable goods manufacturing</option>
                      <option value="34">Wholesale trade</option>
                      <option value="35">Retail trade</option>
                      <option value="36">Transportation and warehousing</option>
                      <option value="45">Information</option>
                      <option value="51">Finance and insurance</option>
                      <option value="56">Real estate and rental and leasing</option>
                      <option value="60">Professional, scientific, & tech. services</option>
                      <option value="64">Management of companies & enterprises</option>
                      <option value="65">Admin. & waste managem. services</option>
                      <option value="69">Educational services</option>
                      <option value="70">Health care and social assistance</option>
                      <option value="75">Arts, entertainment, and recreation</option>
                      <option value="78">Accommodation and food services</option>
                      <option value="81">Other services, except government</option>
                      <option value="82">Government</option>


                    </select>
              </li>
              <li>
                <p>Income per head<span style="padding-left: 10px;"><input type="text" Placeholder=" in k" size="2"  class="right" name="perHeadIncome" id="perHeadIncome" value="<?php error_reporting(0); echo $_POST["perHeadIncome"]; ?>"></span></p>
              </li>
              <li>
                <p>Unemployment rate<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="joblessRate" id="joblessRate" value="<?php error_reporting(0); echo $_POST["joblessRate"]; ?>"></span></p>
              </li>

            </ul>
            
            <!-- POLITIK TAB -->
            <button type="button" data-id="u3" class="dropdown-header">Politisch</button>
            <ul class="dropdown-item" id="u3">
              <div data-toggle="buttons">
                <label class ="btn btn-default" style="float:left;">
                  <input type="radio" class="btn btn-default" id="politicTrump" name="politic" value="2"> Trump
                </label>
                <label class ="btn btn-default" style="margin-bottom:10px; margin-right: 20%; float:right;">
                  <input type="radio" class="btn btn-default" id="politicHilary" name="politic" value="1"> Hillary
                </label>
              </div>
            </ul>
            <button input type="submit" id="submit-button" class="submit-button" value="Submit" disabled>Submit</button>
          </form>
          <button type="button" onclick="test()" class="clear-button">Reset</button>
          <input type="button" id="explore-button"  class="explore-button" onclick="location.href='action_page.php?explore=1';" value="Explore" />
        </div>
      </div>
    </div>

    <!-- HIER BEGINNT DIE CONTENT COMPONENT -->
    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 container">
      <h1 class="page-header">Make America Great again</h1>

      <div class="mapcontainer">
        <div class="map">
        </div>
        <div class="plotLegend">
        </div>
      </div>
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
  <script src="../mapael/map.js"></script>
  <!-- Das ist unsere MAP -->
  <script src="function.js"></script>
  <script src="../mapael/jquery.mapael.js"></script>
  <script src="../mapael/usa_states.js"></script>




  <!-- Author Modal -->
  <div class="modal fade" id="author" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Author</h4>
        </div>
        <div class="modal-body">
          <center>Steffen Hamann & Yannick Collin</center>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Help Modal -->
  <div class="modal fade" id="help" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Help</h4>
        </div>
        <div class="modal-body">
          <center>This is an interacitve Map about the United States of America.</br>
                  </br>
                  Just fill our the Form and let the map show you which state will match your requiremts.</br>
                  If you found a state you can click the staate to get even more detail information.</br>
          </center>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>



<!-- ENDE HTML / ANFANG PHP -->



<?php
//error_reporting(0);

if($_GET["explore"]==1){
  echo "<script>$('#explore-button').prop('disabled', true);</script>";
}





//----------------Verbindung zur DB----------------    

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "america";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//--------------------------------------------------



//-----------------Form Handler---------------------

$sql = "
SELECT 
      staaten.staat_id
    , staaten.staat_name
    , economydata.INDUSTRY_ID
    , economydata.INDUSTRIE_UMSATZ_ANTEIL 
    , staaten.staat_kennung
    , staaten.staat_detail
  FROM staaten
  INNER JOIN  economydata on staaten.staat_id = economydata.staat_id
  where (staaten.staat_id, economydata.INDUSTRIE_UMSATZ_ANTEIL ) in (
        SELECT 
        staaten.staat_id
      , max(economydata.INDUSTRIE_UMSATZ_ANTEIL) 
    FROM staaten
    INNER JOIN  economydata on staaten.staat_id = economydata.staat_id
    group by  staaten.staat_id

  ) AND ";


$sql2 = "
SELECT 
      staaten.staat_id
    , staaten.staat_name
    , staaten.staat_kennung
    , staaten.staat_detail
  FROM staaten 
  WHERE ";

$sql3 = "
SELECT 
      staaten.staat_id
    , staaten.staat_name
    , staaten.staat_kennung
    , staaten.staat_detail
FROM 
staaten";

  

if($_POST["population"] != ""){
    $sql = $sql . "EINWOHNER >= " . $_POST["population"] . "000000" . " AND ";
    $sql2 = $sql2 . "EINWOHNER >= " . $_POST["population"] . "000000" . " AND ";
}

if($_POST["percWhite"] != ""){
    $sql = $sql . "ANTEIL_WEISSE >= " . $_POST["percWhite"]  . " AND ";
    $sql2 = $sql2 . "ANTEIL_WEISSE >= " . $_POST["percWhite"]  . " AND ";
}

if($_POST["percBlack"] != ""){
    $sql = $sql . "ANTEIL_SCHWARZ >= " . $_POST["percBlack"]  . " AND ";
    $sql2 = $sql2 . "ANTEIL_SCHWARZ >= " . $_POST["percBlack"]  . " AND ";
}

if($_POST["percLatin"] != ""){
    $sql = $sql . "ANTEIL_HISPANIC_LATINOS >= " . $_POST["percLatin"]  . " AND ";
    $sql2 = $sql2 . "ANTEIL_HISPANIC_LATINOS >= " . $_POST["percLatin"]  . " AND ";
}

if($_POST["percAsian"] != ""){
    $sql = $sql . "ANTEIL_ASIATISCH >= " . $_POST["percAsian"]  . " AND ";
    $sql2 = $sql2 . "ANTEIL_ASIATISCH >= " . $_POST["percAsian"]  . " AND ";
}

if($_POST["economy"] != ""){
    $sql = $sql . "economydata.INDUSTRY_ID = " . $_POST["economy"] . " AND ";
    echo '<script type="text/javascript">document.getElementById("economy").value = ' . $_POST["economy"] . ';</script>';
}

if($_POST["perHeadIncome"] != ""){
    $sql = $sql . "PRO_KOPF_EINKOMMEN >= " . $_POST["perHeadIncome"] . "000"   . " AND ";
    $sql2 = $sql2 . "PRO_KOPF_EINKOMMEN >= " . $_POST["perHeadIncome"] . "000"   . " AND ";
}

if($_POST["joblessRate"] != ""){
    $sql = $sql . "ARBEITSLOSENRATE >= " . $_POST["joblessRate"]   . " AND ";
    $sql2 = $sql2 . "ARBEITSLOSENRATE >= " . $_POST["joblessRate"]   . " AND ";
}

if($_POST["politic"] != ""){
    $sql = $sql . "STAERKSTE_PARTEI_ID = " . $_POST["politic"]  . " AND ";
    $sql2 = $sql2 . "STAERKSTE_PARTEI_ID = " . $_POST["politic"]  . " AND ";
    echo ["politic"] == "1";
    if ($_POST["politic"]  == "1"){
      echo '<script type="text/javascript"> $("#politicHilary").prop("checked", true);$("#politicHilary").parent().addClass("active");</script>';
    }
    if ($_POST["politic"]  == "2"){
      echo '<script type="text/javascript"> $("#politicTrump").prop("checked", true);$("#politicTrump").parent().addClass("active");</script>';
    }
}

//echo substr($sql, 0, -5); //ONLY FOR TEST

//-------------------SQL Abfrage--------------------


if($_POST["economy"] != ""){
    $result = mysqli_query($conn, substr($sql, 0, -5));
}
else if($_GET["explore"] == 1){
    $result = mysqli_query($conn,$sql3);
}
else{
    $result = mysqli_query($conn, substr($sql2, 0, -5));   
}
//--------------------------------------------------



//------------------Ausgabe SQL---------------------

echo ' <script type="text/javascript">
        $(function () {
            $(".mapcontainer").mapael({
                map: {
                    name: "usa_states",
                    defaultArea: {
                        attrs: {
                           
                        }
                    }
                },
                areas: {
                    ';
                    

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo   $row["staat_kennung"] . ': {
                        "attrs": {
                            "href": "detailpage.php?staatID=' . $row["staat_id"] . '",
                            "fill":"#a4e100" 
                        },
                        "tooltip": {
                            "content": "' .$row["staat_name"] . '"
                        }
                    },  ';
    }
}

echo '          }
            });
        });   
       </script>';


//echo "id: " . $row["staat_id"] . " - Name: " . $row["staat_name"] . " Hauptstadt: " . $row["hauptstadt"] . " Flagge: <img src=" .$row['flagge']. ">  <br>";// ---- MIT FLAGGE


//--------------------------------------------------


mysqli_close($conn); //close connection to DB

?>
