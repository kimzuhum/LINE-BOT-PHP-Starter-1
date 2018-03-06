<?php
date_default_timezone_set("Asia/Bangkok");
/*
$conn = mysqli_connect('61.47.34.20', 'root', 'hs5fe') or die('Could not connect: ' . mysql_error());
$db_selected = mysqli_select_db("pongpark", $conn) or die ('Can\'t use Database : ' . mysql_error());
mysql_query("SET NAMES 'tis620'");

	$strSQL = "SELECT * FROM tb_question WHERE txt_ask = 'test'";
	$objQuery = mysql_query($strSQL);
	$obj_row = mysql_fetch_array($objQuery);

echo "<br/>ASN : " . $obj_row['txt_ans'];
*/

$servername = "office.winbb.net";
$username = "root";
$password = "hs5fe";
$dbname = "pongpark";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tb_question";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ques_id"]. " - ask: " . $row["txt_ask"]. " ans " . $row["txt_ans"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
