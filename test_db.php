<?php
$objConnect = mysqli_connect("61.47.34.20","root","hs5fe","pongpark");
if($objConnect){
echo $sql = "SELECT * FROM tb_question WHERE ask = '" . test . "'";
$result = mysqli_query($objConnect,$sql);
$row = mysqli_fetch_row($result);
if(!isset($row['ans'])){
  echo $row['ans'];
}else{
  echo "ฉันไม่เข้าใจคำสั่ง";
}
}else{
  echo "Failed to connect.";
}
	mysqli_close($objConnect);
  
  ?>
