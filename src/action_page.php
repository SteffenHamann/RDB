
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

$sql = "SELECT staat_id, staat_name, hauptstadt FROM staaten";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["staat_id"]. " - Name: " . $row["staat_name"]. " Hauptstadt: " . $row["hauptstadt"]. "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);

?>
