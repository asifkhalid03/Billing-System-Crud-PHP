<?php
	require_once("db.php");
	



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="sms/pics/icon.png" />
<title>Print</title>
<style>
	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 720px;
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
		background-image:url(sms/swm4.PNG);
		background-position:center 55%;
		
		background-repeat:no-repeat;
		background-size: 800px 200px;
		
		
		
		margin-top:2%;
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

	 <!--Admin Copy--> 
    <div class="d1">
    <img src="sms/sms.jpg" style="width:10%; height:10%; margin-left:0%; border-radius:15%; border:inset; border-color:#333">
    <br />
   <center>
   <h2 style="font-family:algerian">Standard Model School</h2>
         <p style="padding-left:60%">Serial: (<?php echo $row["branch"] ?>)<?php echo $row["id"] ?></p>
        </center>
    
    <fieldset style=" border-radius:15px; height:30% ">
   
   		    <table>
				<tr>
                	<th>Roll#</th>
					<th>Name</th>
                    <th>Class</th>
					<th>Month</th>
					<th>Fee</th>
					<th>Ad Fee</th>
					<th>Fund</th>
					<th>Total</th>
				</tr>
			<tbody>
            	<tr>
                <td><?php echo $row["roll"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["class"] ?></td>
                
                
                <td><?php echo $row["month"] ?></td>
                <td><?php echo $row["fee"] ?></td>
                <td><?php echo $row["adfee"] ?></td>
                <td><?php echo $row["fund"] ?></td>             
                <td><?php echo $row["total"] ?></td>
                
            
            </tr>
                
                <tr>
                   	<td colspan="8"></td>
                </tr>
                
                <tr>
                	
                    <td><b>Grand Total</b></td>
                    <td  colspan="6"></td>
                	<td><?php echo $row["total"] ?></td>
                
                </tr>		
			</tbody>           
		</table>
    
        
    
    </fieldset>
    <center>
  	<p style="padding-left:50%"><td>Date:<?php echo $row["date"] ?></td></p>
     <p style="padding-right:60%">Sign: _______</p>
     <p><b>Admin Copy</b></p> 
    </center>
    
    </div>
    </div>
    
    <hr />
    

	<!--std Copy--> 
    <div class="d1">
    <img src="sms/sms.jpg" style="width:10%; height:10%; margin-left:0%; border-radius:15%; border:inset; border-color:#333">
    <br />
   <center>
   <h2 style="font-family:algerian">Standard Model School</h2>
         <p style="padding-left:60%">Serial:  (<?php echo $row["branch"] ?>)<?php echo $row["id"] ?></p>
        </center>
    
    <fieldset style=" border-radius:15px; height:30% ">
   
   		    <table>
				<tr>
                	<th>Roll#</th>
					<th>Name</th>
                    <th>Class</th>
					<th>Month</th>
					<th>Fee</th>
					<th>Ad Fee</th>
					<th>Fund</th>
					<th>Total</th>
				</tr>
			<tbody>
            	<tr>
                <td><?php echo $row["roll"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["class"] ?></td>
                
                
                <td><?php echo $row["month"] ?></td>
                <td><?php echo $row["fee"] ?></td>
                <td><?php echo $row["adfee"] ?></td>
                <td><?php echo $row["fund"] ?></td>             
                <td><?php echo $row["total"] ?></td>
                 
                
            </tr>
                
                <tr>
                   	<td colspan="8"></td>
                </tr>
                
                <tr>
                	
                    <td><b>Grand Total</b></td>
                    <td  colspan="6"></td>
                <td><?php echo $row["total"] ?></td>
                 
                </tr>		
			</tbody>           
		</table>
    
        
    
    </fieldset>
    <center>
  	<p style="padding-left:60%">Date: <?php echo $row["date"] ?>
                </p>
     <p style="padding-right:60%">Sign: _______</p>
     <p><b>Student Copy</b></p>
    </center>
    
    </div>
    </div>
    

   <?php
    }
}
?>
    

</body>
</html>