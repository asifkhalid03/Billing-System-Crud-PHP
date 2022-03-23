<?php
 include 'header.php';
 
 

 if(isset($_GET['id'])){
  $student_info=$student_obj->view_student_by_student_id($_GET['id']);
  


     
 }else{
  header('Location: index.php');
 }
 
 
 ?>
 
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="index.php"  class="button button-purple mt-12 pull-right">View List</a> 
     
 <h3>View Fee Info</h3>
       
    
 <hr/>
 	
                	<fieldset style=" border-radius:15px; height:30% ">
   
   		    <table style=" width:700px; height:100px; border:medium; ">
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
                	<td><?php  if(isset($student_info['roll'])){echo $student_info['roll']; }?></td>	
					<td><?php  if(isset($student_info['name'])){echo $student_info['name']; }?></td>
                    <td><?php  if(isset($student_info['class'])){echo $student_info['class']; }?></td>
                    <td><?php  if(isset($student_info['month'])){echo $student_info['month']; }?></td>
                    <td><?php  if(isset($student_info['fee'])){echo $student_info['fee']; }?></td>
                    <td><?php  if(isset($student_info['adfee'])){echo $student_info['adfee']; }?></td>
                    <td><?php  if(isset($student_info['fund'])){echo $student_info['fund']; }?></td>
                    <td><?php  if(isset($student_info['total'])){echo $student_info['total']; }?></td>
    			</tr>
                
                <tr>
                   	<td colspan="8"></td>
                </tr>
                
                <tr>
                	
                    <td><b>Grand Total</b></td>
                    <td  colspan="6"></td>
                    <td><?php  if(isset($student_info['total'])){echo $student_info['total']; }?></td>            
                
                </tr>		
			</tbody>           
		</table>
    
        
    
    </fieldset>
    
                   </br>
                   </br> 
                   <form target="_blank" action="form2.php" method="post">
             <input type="hidden" name="idp"  value="<?php  if(isset($student_info['id'])){echo $student_info['id']; }?>" class="button button-green"  >
                    
                    <input type="submit" name="print"  value="Print" class="button button-green"  >
                    </form>
                     
                  
    
          
   

     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

