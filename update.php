<?php

	require_once("db.php");
	

	if(isset($_POST['update_student']))
	{
		
	date_default_timezone_set("Asia/Karachi");
  $a =  date(" h:i:sa ");
 $b = " " . date("d/m/Y");
  $c = $a. $b ;
		
		$db_id=$_POST['id'];
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
		
	  $sql="UPDATE students SET  roll='$roll', name='$name' , class='$class' , month='$month' , fee='$fee' , adfee='$adfee', fund='$fund', total='$total', date='$date', branch='$branch' WHERE id =$db_id ";
     
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



	}






?>

