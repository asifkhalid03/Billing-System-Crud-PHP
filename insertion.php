<?php
	require_once("db.php");
	
	

	if(isset($_POST['submit']))
	{
		
	date_default_timezone_set("Asia/Karachi");
  $a =  date(" h:i:sa ");
 $b = " " . date("d/m/Y") . "<br>";
  $c = $a. $b ;
		
		$roll=$_POST['roll'];
		$name=$_POST['name'];
		$class=$_POST['class'];
		$month=$_POST['month'];
		$fee=$_POST['fee'];
		$adfee=$_POST['adfee'];
		$fund=$_POST['fund'];
		$total=$_POST['fee']+$_POST['adfee']+$_POST['fund'];
		$date=$c;
		$branch=$_POST['branch'];
		
		
		
	$sql = "INSERT INTO students ( roll, name , class , month, fee, adfee, fund, total, date, branch)
VALUES ('$roll', '$name', '$class', '$month', '$fee', '$adfee', '$fund', '$total', '$date', '$branch')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



	}






?>

