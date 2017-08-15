
<?php
require('header.php');
require_once('../conn.php');
require('nav.php');
 $sql = "SELECT * FROM employees WHERE id ='".$_GET['id']."'";
 $result = $mysqli->query($sql);
 $result_array =mysqli_fetch_row($result);
 
?>

  <div class="progress">
    <div class="progress-bar progress-bar-striped first" role="progressbar" >
      <span>Ordered</span>
    </div>
    <div class="progress-bar progress-bar-striped second" role="progressbar" >
      <span>ADCompleted</span>
    </div>
    <div class="progress-bar progress-bar-striped third" role="progressbar" >
      <span>SFBCompleted</span>
    </div>
    <div class="progress-bar progress-bar-striped fourth" role="progressbar">
      
      <span>O365Completed</span>
    </div>
    <div class="progress-bar progress-bar-striped fifth" role="progressbar" >
      <span>O365ArchiveCompleted</span>
    </div>
  </div>



<table class="table" cellspacing="0" width="100%">
    <tr>
		<td>Ordered By</td>
		<td><?php echo $result_array[1]; ?></td>
    </tr>
    <tr> 
       <td>Employee Id</td>
       <td><?php echo $result_array[2]; ?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
         <td><?php echo $result_array[3]; ?></td></tr>
       <tr>
        <td>Notifications</td>

     <td><?php echo $result_array[4]; ?></td></tr>
     <tr>
       
        <td>Ordered</td>
           <td><?php echo $result_array[5] ? 'true' : 'false'; ?></td>
           </tr>
           <tr>
        <td>ADCompleted</td>

        <td><?php echo $result_array[6] ? 'true' : 'false'; ?></td></tr>
        <tr>

        <td>SFBCompleted</td>
<td><?php echo $result_array[7] ? 'true' : 'false'; ?></td></tr>
<tr>
        <td>O365Completed</td>
        <td><?php echo $result_array[8] ? 'true' : 'false'; ?></td></tr>
        <tr>

        <td>O365ArchiveCompleted</td>
        <td><?php echo $result_array[9] ? 'true' : 'false'; ?></td></tr>
        <tr>
        <td>Status</td>
        <td><?php echo $result_array[10]; ?></td></tr>
        <tr>
        <td>email</td>
        <td><?php echo $result_array[11]; ?></td>
</tr>            
        </table>
<style type="text/css">
   .first
 {
  width:<?php echo $result_array[5]*20 ?>%;

 }
 .second
 {
  width:<?php echo $result_array[6]*20 ?>%;
 }
 .third
 {
  width:<?php echo $result_array[7]*20 ?>%;
 }
 .fourth
 {
  width:<?php echo $result_array[8]*20 ?>%;
 }
 .fifth
 {
  width:<?php echo $result_array[9]*20 ?>%; 
 }

 
</style>