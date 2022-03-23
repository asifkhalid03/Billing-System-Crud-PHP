<?php
include 'header.php';
require_once("db.php");

if(isset($_SESSION['ok']))
{
	
}
else
{
		header('location:login\index.php');
	
}

?>
<div class="container " > 
    <div class="row content">
        <a  href="create-student-info.php"  class="button button-purple mt-12 pull-right">Create Fee</a> 
        <h3>All List</h3>
        
        
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>Serial</th>
                    
                    <th>Roll</th>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Month</th>
                    
                    <th>Fee</th>
                    <th>Ad Fee</th>
                    <th>Fund</th>
                    <th>Total</th>
                    
                    <th>Branch</th>
                    <th>Date</th>
                    
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
  <?php
  $sql = "SELECT * FROM students";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
?>
             <tr>
                <td><?php echo $row["id"] ?></td>
                <td><?php echo $row["roll"] ?></td>
                <td><?php echo $row["name"] ?></td>
                <td><?php echo $row["class"] ?></td>
                
                
                <td><?php echo $row["month"] ?></td>
                <td><?php echo $row["fee"] ?></td>
                <td><?php echo $row["adfee"] ?></td>
                <td><?php echo $row["fund"] ?></td>             
                <td><?php echo $row["total"] ?></td>
                
                <td><?php echo $row["branch"] ?></td>
                <td><?php echo $row["date"] ?></td>
                
                <td class="text-right">
                    
                    <a  href="<?php echo 'delete-student-info.php?id=' . $row["id"] ?>" class="button button-red">Delete</a>  
                    <a  href="<?php echo 'update-student-info.php?id=' . $row["id"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-student-info.php?id=' . $row["id"] ?>" class="button button-green">Print</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
include 'footer.php';
?>  

