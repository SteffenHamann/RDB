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
  3. Detailpage als Modalbox?
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
          <form name="filter" action="./action_page.php" method="post">
            <!-- EINWOHNERZAHL TAB -->
            <button type="button" data-id="u1" class="dropdown-header">Population</button>
            <ul class="dropdown-item" id="u1">
              <li>
                <p>Population:<span style="padding-left: 10px;"><input type="text" Placeholder="in mio." size="2" class="right" name="population" id="population"></span></p>
              </li>
              <li>
                <p style="font-size: 25px;">Ethnicities </p>
              </li>
              <li>
                <p>White<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percWhite" id="percWhite"></span></p>
              </li>
              <li>
                <p>Black<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percBlack" id="percBlack"></span></p>
              </li>
              <li>
                <p>Hispanic<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percLatin" id="percLatin"></span></p>
              </li>
              <li>
                <p>Asian<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percAsian" id="percAsian"></span></p>
              </li>
            </ul>

            <!-- WIRTSCHAFT TAB -->
            <button type="button" data-id="u2" class="dropdown-header">Economy</button>
            <ul class="dropdown-item" id="u2">
              <li>
                <p style="font-size: 25px;">Strongest economy</p>
              </li>
              <li><select style="margin-bottom: 10px;" class="" name="economy" id="economy">
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
                      <option value="60">Professional, scientific, and technical services</option>
                      <option value="64">Management of companies and enterprises</option>
                      <option value="65">Administrative and waste management services</option>
                      <option value="69">Educational services</option>
                      <option value="70">Health care and social assistance</option>
                      <option value="75">Arts, entertainment, and recreation</option>
                      <option value="78">Accommodation and food services</option>
                      <option value="81">Other services, except government</option>
                      <option value="82">Government</option>


                    </select>
              </li>
              <li>
                <p>Income per head<span style="padding-left: 10px;"><input type="text" Placeholder=" in k" size="2"  class="right" name="perHeadIncome" id="perHeadIncome"></span></p>
              </li>
              <li>
                <p>Unemployment rate<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="joblessRate" id="joblessRate"></span></p>
              </li>

            </ul>
            
            <!-- POLITIK TAB -->
            <button type="button" data-id="u3" class="dropdown-header">Vote 2016</button>
            <ul class="dropdown-item" id="u3">
              <div data-toggle="buttons">
                <label class ="btn btn-default" style="float:left;">
                  <input type="radio" class="btn btn-default" name="politic" id="politicTrump" value="2"> Trump
                </label>
                <label class ="btn btn-default" style="margin-bottom:10px; margin-right: 20%; float:right;">
                  <input type="radio" class="btn btn-default" name="politic" id="politicHilary" value="1"> Hillary
                </label>
              </div>
            </ul>
            <button input type="submit" id="submit-button" class="submit-button" value="Submit" disabled>Submit</button> <!-- TODO Nach Submit Felder befüllt lassen -->
          </form>
          <button type="button" onclick="test()" class="clear-button">Reset</button>
          <input type="button"  id="explore-button" class="explore-button" onclick="location.href='action_page.php?explore=1';" value="Explore" />
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