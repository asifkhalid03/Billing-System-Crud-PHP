<?php
	require_once("db.php");
	



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="pics/icon.png" />
<title>Print</title>
<style>
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

 
 	.d1{
		margin-left:2%;
		width:750px;
		height:480px;
		background-image:url(swm4.PNG);
		background-position:center 55%;
		
		background-repeat:no-repeat;
		background-size: 800px 200px;
		
		
		
		margin-top:4%;
		border:dotted;
		border:#FFF;
		border-radius:15px;
		font-size:18px;
		font-style:Georgia;
		
		
	}
 
	.d2{
		border-radius:15px;
		font-size:12px;
		font-style:italic;
		padding-top:5%;
		padding-left:0%;
		
		
		
	}
	.i1{
		border-radius:15%;
		}

 </style>
</head>
<body >


 <?php
 
 	if(isset($_POST['print']))
	{
		$ids=$_POST['idp'];
	}
 	
  $sql = "SELECT * FROM students Where id='$ids'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
?>

	

   <?php
    }
}
?>
    

</body>
</html>