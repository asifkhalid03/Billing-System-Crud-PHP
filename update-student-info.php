<?php

include 'header.php';

if(isset($_SESSION['ok']))
{
	
}
else
{
		header('location:login\index.php');
	
}



if (isset($_GET['id'])) {
    $student_info = $student_obj->view_student_by_student_id($_GET['id']);
    if (isset($_POST['update_student']) && $_GET['id'] === $_POST['id']) {
        $student_obj->update_student_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">View Student List</a> 
        <h3>Update Student Info</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="update.php">
            <input type="hidden" name="id" value="<?php if (isset($student_info['id'])) {
            echo $student_info['id'];
        } ?>" id=""  >
           
           
           	 <div class="form-group">
                <label for="student_name">Roll:</label>
                <input type="text" name="roll" class="form-control" required maxlength="6" value="<?php if (isset($student_info['roll'])) {
            echo $student_info['roll'];} ?>">
            </div>
            <div class="form-group">
                <label for="email_address">Name:</label>
                <input type="text" class="form-control" name="name" required maxlength="20" value="<?php if (isset($student_info['name'])) {
            echo $student_info['name'];} ?>">
            </div>
            
            
            <div class="form-group">
                <label for="gender">Class:</label>
                <select class="form-control" name="class" value="<?php if (isset($student_info['class'])) { echo $student_info['class'];} ?>">
                    <option selected><?php if (isset($student_info['class'])) {  echo $student_info['class'];} ?></option>
                    <option value="Pla" >Play Group</option>
                    <option value="Nur" >Nursery</option>
                    <option value="Pre" >Prep</option>
                    <option value="1" >One</option>
                    <option value="2" >Two</option>
                    <option value="3" >Three</option>
                    <option value="4" >Four</option>
                    <option value="5" >Five</option>
                    <option value="6" >Six</option>
                    <option value="7" >Seven</option>
                    <option value="8" >Eight</option>
                    <option value="9" >Nine</option>
                    <option value="10" >Ten</option>
                    
                </select>
            </div> 
            
            
            
            
            
            
            <div class="form-group">
                <label >Branch:</label>
                <select class="form-control" name="branch" value="<?php if (isset($student_info['branch'])) {
            echo $student_info['branch'];  } ?>">
                    <option  selected><?php if (isset($student_info['branch'])) {
            echo $student_info['branch'];  } ?></option>
                    <option value="PG" >PG</option>
                    <option value="GB" >GB</option>
                </select>
            </div> 
            
            
            <div class="form-group">
                <label >Month:</label>
                <select class="form-control" name="month"  value="<?php if (isset($student_info['month'])) {
            echo $student_info['month'];  } ?>" >
                    <option  selected> <?php if (isset($student_info['month'])) {
            echo $student_info['month'];  } ?></option>
                    <option value="JAN" >JAN</option>
                    <option value="FEB" >FEB</option>
                    <option value="MAR" >MAR</option>
                    <option value="APR" >APR</option>
                    <option value="MAY" >MAY</option>
                    <option value="JUN" >JUN</option>
                    <option value="JUL" >JUL</option>
                    <option value="AUG" >AUG</option>
                    <option value="SEP" >SEP</option>
                    <option value="OCT" >OCT</option>
                    <option value="NOV" >NOV</option>
                    <option value="DEC" >DEC</option>
                </select>
            </div> 
            
                        <div class="form-group">
                <label for="country">Fee:</label>
                <input type="text" name="fee" class="form-control"  maxlength="6"  value="<?php if (isset($student_info['fee'])) {
            echo $student_info['fee'];  } ?>">
            </div>
                        <div class="form-group">
                <label for="country">Ad Fee:</label>
                <input type="text" name="adfee"  class="form-control"  maxlength="6"  value="<?php if (isset($student_info['adfee'])) {
            echo $student_info['adfee'];  } ?>">
            </div>
                        <div class="form-group">
                <label for="country">Fund:</label>
                <input type="text" name="fund"  class="form-control"  maxlength="6"  value="<?php if (isset($student_info['fund'])) {
            echo $student_info['fund'];  } ?>">
            </div>
           
           
           
           
           
           
           
            <input type="submit" class="button button-green  pull-right" name="update_student" value="Update"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

