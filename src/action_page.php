
<?php

    /*echo $_POST["population"];
    echo ("<br />");
    echo $_POST["percWhite"];
    echo ("<br />");
    echo $_POST["percBlack"];
    echo ("<br />");
    echo $_POST["percLatin"];
    echo ("<br />");
    echo $_POST["percAsian"];
    echo ("<br />");
    echo $_POST["economy"];
    echo ("<br />");
    echo $_POST["perHeadIncome"];
    echo ("<br />");
    echo $_POST["joblessRate"];
    echo ("<br />");
    echo $_POST["politic"];*/



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
$sql = "SELECT staaten.staat_id, staat_name, hauptstadt FROM staaten, economydata WHERE staaten.staat_id = economydata.staat_id AND ";

if($_POST["population"] != ""){
    $sql = $sql . "EINWOHNER >= " . $_POST["population"] . "000000" . " AND ";
}

if($_POST["percWhite"] != ""){
    $sql = $sql . "ANTEIL_WEISSE >= " . $_POST["percWhite"]  . " AND ";
}

if($_POST["percBlack"] != ""){
    $sql = $sql . "ANTEIL_SCHWARZ >= " . $_POST["percBlack"]  . " AND ";
}

if($_POST["percLatin"] != ""){
    $sql = $sql . "ANTEIL_HISPANIC_LATINOS >= " . $_POST["percLatin"]  . " AND ";
}

if($_POST["percAsian"] != ""){
    $sql = $sql . "ANTEIL_ASIATISCH >= " . $_POST["percAsian"]  . " AND ";
}

if($_POST["economy"] != ""){
    $sql = $sql . "INDUSTRY_ID = " . $_POST["economy"] . " AND ";
}

if($_POST["perHeadIncome"] != ""){
    $sql = $sql . "PRO_KOPF_EINKOMMEN >= " . $_POST["perHeadIncome"] . "000"   . " AND ";
}

if($_POST["joblessRate"] != ""){
    $sql = $sql . "ARBEITSLOSENRATE >= " . $_POST["joblessRate"]   . " AND ";
}

if($_POST["politic"] != ""){
    $sql = $sql . "STAERKSTE_PARTEI_ID = " . $_POST["politic"]  . " AND ";
}


echo substr($sql, 0, -5);


//-------------------SQL Abfrage--------------------

$result = mysqli_query($conn, substr($sql, 0, -5));

//--------------------------------------------------

//------------------Ausgabe SQL---------------------

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["staat_id"]. " - Name: " . $row["staat_name"]. " Hauptstadt: " . $row["hauptstadt"]. "<br>";
    }
} else {
    echo "0 results";
}

//--------------------------------------------------


mysqli_close($conn); //close connection do DB

?>
