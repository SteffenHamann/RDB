
<?php


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
    , staat_name
    , economydata.INDUSTRY_ID
    , economydata.INDUSTRIE_UMSATZ_ANTEIL 
    , staaten.hauptstadt
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
    , staat_name
    , staaten.hauptstadt
    , flagge
  FROM staaten 
  WHERE ";

  

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
    $sql = $sql . "INDUSTRY_ID = " . $_POST["economy"] . " AND ";
}

if($_POST["perHeadIncome"] != ""){
    $sql = $sql . "PRO_KOPF_EINKOMMEN >= " . $_POST["perHeadIncome"] . "000"   . " AND ";
    $sql2 = $sql2 . "PRO_KOPF_EINKOMMEN >= " . $_POST["perHeadIncome"] . "000"   . " AND ";
}

if($_POST["joblessRate"] != ""){
    $sql = $sql . "ARBEITSLOSENRATE <= " . $_POST["joblessRate"]   . " AND ";
    $sql2 = $sql2 . "ARBEITSLOSENRATE <= " . $_POST["joblessRate"]   . " AND ";
}

if($_POST["politic"] != ""){
    $sql = $sql . "STAERKSTE_PARTEI_ID = " . $_POST["politic"]  . " AND ";
    $sql2 = $sql2 . "STAERKSTE_PARTEI_ID = " . $_POST["politic"]  . " AND ";
}


echo substr($sql2, 0, -5); //ONLY FOR TEST


//-------------------SQL Abfrage--------------------

if($_POST["economy"] != ""){
    $result = mysqli_query($conn, substr($sql, 0, -5));
}
else{
    $result = mysqli_query($conn, substr($sql2, 0, -5));   
}

//--------------------------------------------------



//------------------Ausgabe SQL---------------------

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["staat_id"] . " - Name: " . $row["staat_name"] . " Hauptstadt: " . $row["hauptstadt"] . "<br>";
        //echo "id: " . $row["staat_id"] . " - Name: " . $row["staat_name"] . " Hauptstadt: " . $row["hauptstadt"] . " Flagge: <img src=" .$row['flagge']. ">  <br>";// ---- MIT FLAGGE
    }
} else {
    echo "0 results";
}

//--------------------------------------------------


mysqli_close($conn); //close connection to DB

?>
