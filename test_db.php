<?php
//$objConnect = mysqli_connect("61.47.34.20","root","hs5fe","pongpark");
$mysqli = new mysqli("61.47.34.20", "root", "hs5fe", "pongpark");

if(mysqli_connect_errno()){
	echo "Failed to connect.";
}else{
/*echo $sql = "SELECT * FROM tb_question WHERE ask = '" . test . "'";
$result = mysqli_query($objConnect,$sql);
$row = mysqli_fetch_row($result);*/

if ($result = $mysqli->query("SELECT * FROM tb_question WHERE ask = 'test")) {
    $row = $result->fetch_row();
    printf("Default database is %s.\n", $row[2]);
    $result->close();
}
	
}
	//mysqli_close($objConnect);
  
  ?>
