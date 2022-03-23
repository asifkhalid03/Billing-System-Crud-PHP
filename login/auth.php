<?php
	session_start();
	require_once("db.php"); 
  	
	if(isset($_POST['submit']))
	{	
	
					
		extract($_POST); //extracting incomming value of post
		
				$query="select * from admin where username='$username' AND password='$password'"; //finding my data where my email and password going to match
	
	$run_query=mysqli_query($conn,$query); //excute the above queries
	if($run_query)// applying condition if my query run
	{
		
		 while($row = mysqli_fetch_array($run_query)) //runing loop to get info in array at onces
		{
				
		
		 $u=$row['username'];
		 $p=$row['password'];
						
		 } 
	}
	
	
	if($u==$_POST['username'] and $p==$_POST['password'])
	{
		$_SESSION['ok']="done";
		$_SESSION['username']=$u;
		$_SESSION['password']=$p;
		
	date_default_timezone_set("Asia/Karachi");
  $a =  date(" h:i:sa ");
 $b = " " . date("d/m/Y");
  $c = $a. $b ;
  
  	 $sql="UPDATE admin SET last='$c' WHERE username = '$u' ";
     
	if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
		
				header('location:../index.php');
	
	
	}
	else
	{
			$_SESSION['username']="loss";
		 $_SESSION['password']="loss";
			 $_SESSION['wm']="email and password may incorrect";
			 header('location:index.php');
	}
	
	}
	
	
?>
