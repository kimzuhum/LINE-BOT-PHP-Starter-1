<?php
date_default_timezone_set("Asia/Bangkok");

$conn = mysqli_connect('61.47.34.20', 'root', 'hs5fe') or die('Could not connect: ' . mysql_error());
$db_selected = mysql_select_db('pongpark', $conn) or die ('Can\'t use Database : ' . mysql_error());
mysql_query("SET NAMES 'tis620'");

	$strSQL = "SELECT * FROM tb_question WHERE txt_ask = 'test'";
	$objQuery = mysql_query($strSQL);
	$obj_row = mysql_fetch_array($objQuery);

echo "<br/>ASN : " . $obj_row['txt_ans'];
?>
