<?php
include 'header.php';

?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">View Student List</a> 
        <h3>Create Student Info</h3>
        <hr/>
        <form method="post" action="insertion.php">
            
           
            <div class="form-group">
                <label for="student_name">Roll:</label>
                <input type="text" name="roll" class="form-control" required maxlength="6" value="###">
            </div>
            <div class="form-group">
                <label for="email_address">Name:</label>
                <input type="text" class="form-control" name="name" required maxlength="20">
            </div>
            
            
            
            <div class="form-group">
                <label for="gender">Class:</label>
                <select class="form-control" name="class">
                    <option value="" selected>Select Class</option>
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
                <label for="gender">Branch:</label>
                <select class="form-control" name="branch">
                    <option value="" selected>Select Branch</option>
                    <option value="PG" >PG</option>
                    <option value="GB" >GB</option>
                </select>
            </div> 
            
            <div class="form-group">
                <label for="gender">Month:</label>
                <select class="form-control" name="month" >
                    <option value="" selected>Select Month</option>
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
                <input type="text" name="fee" class="form-control"  maxlength="6" value="0">
            </div>
                        <div class="form-group">
                <label for="country">Ad Fee:</label>
                <input type="text" name="adfee"  class="form-control"  maxlength="6" value="0">
            </div>
                        <div class="form-group">
                <label for="country">Fund:</label>
                <input type="text" name="fund"  class="form-control"  maxlength="6" value="0">
            </div>
            
            <input type="submit" class="button button-green  pull-right" name="submit" value="submit"/>
        </form> 
    </div>
</div>
<hr/>
<?php
include 'footer.php';
?>

