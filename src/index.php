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
        <a class="navbar-brand" href="#">RDB SS2017</a>
      </div>

      <!-- HIER BEGINNT DER NAV HEADER -->
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Author</a></li>
          <li><a href="#">Help</a></li>
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
            <button type="button" data-id="u1" class="dropdown-header">Einwohner</button>
            <ul class="dropdown-item" id="u1">
              <li>
                <p>Einwohneranzahl:<span style="padding-left: 10px;"><input type="text" Placeholder="in. Mio" size="2" class="right" name="population" id="population"></span></p>
              </li>
              <li>
                <p style="font-size: 25px;">Anteil Ethnien...</p>
              </li>
              <li>
                <p>Weiß<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percWhite" id="percWhite"></span></p>
              </li>
              <li>
                <p>Schwarz<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percBlack" id="percBlack"></span></p>
              </li>
              <li>
                <p>Latein<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percLatin" id="percLatin"></span></p>
              </li>
              <li>
                <p>Asien<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="percAsian" id="percAsian"></span></p>
              </li>
            </ul>

            <!-- WIRTSCHAFT TAB -->
            <button type="button" data-id="u2" class="dropdown-header">Wirtschaft</button>
            <ul class="dropdown-item" id="u2">
              <li>
                <p style="font-size: 25px;">Stärkste Wirtschaft</p>
              </li>
              <li><select style="margin-bottom: 10px;" class="" name="economy" id="economy">
                      <option value="" disabled selected>Wirtschaft wählen</option>
                      <option value="12">Warrenherrstellung</option>
                      <option value="82">Regierung</option>
                      <option value="56">Immobilien</option>
                      <option value="13">Langlebige Warrenherrstellung</option>
                      <option value="70">Gesundheitswesen</option>
                      <option value="35">Einzelhandel</option>
                      <option value="25">Nicht langlebige Warrenherstellung</option>
                      <option value="60">Technische Dienstleistungen</option>
                      <option value="34">Großhandel</option>
                      <option value="51">Finanzwesen</option>
                      <option value="11">Bauwesen</option>
                      <option value="78">Gastronomie und Hotegewerbe</option>
                      <option value="65">Müllabfuhr</option>
                      <option value="10">Dienstleistungen</option>
                      <option value="36">Transportwesen</option>
                      <option value="81">Nicht staatlich</option>
                      <option value="45">Presse</option>
                      <option value="6">Bergbau</option>
                      <option value="3">Landwirtschaft</option>
                      <option value="64">Controlling</option>
                      <option value="69">Bildunswesen</option>
                      <option value="75">Entertaiment</option>


                    </select>
              </li>
              <li>
                <p>Pro Kopf einkommen<span style="padding-left: 10px;"><input type="text" Placeholder=" in K" size="2"  class="right" name="perHeadIncome" id="perHeadIncome"></span></p>
              </li>
              <li>
                <p>Arbeitslosenrate<span style="padding-left: 10px;"><input type="text" Placeholder=" in %" size="2" class="right" name="joblessRate" id="joblessRate"></span></p>
              </li>

            </ul>
            
            <!-- POLITIK TAB -->
            <button type="button" data-id="u3" class="dropdown-header">Politisch</button>
            <ul class="dropdown-item" id="u3">
              <div data-toggle="buttons">
                <label class ="btn btn-default" style="float:left;">
                  <input type="radio" class="btn btn-default" name="politic" id="politic" value="2"> Trump
                </label>
                <label class ="btn btn-default" style="margin-bottom:10px; margin-right: 20%; float:right;">
                  <input type="radio" class="btn btn-default" name="politic" id="politic" value="1"> Hillary
                </label>
              </div>
            </ul>
            <button input type="submit" id="submit-button" class="submit-button" value="Submit" disabled>Submit</button>
          </form>
          <button type="button" onclick="test()" class="clear-button">Reset</button>
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

</body>

</html>