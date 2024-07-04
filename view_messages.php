<?php 
include_once("template/heading.php");
 include_once("template/nav.php");
require_once("includes/dbconnect.php");
 include_once("template/banner.php");
?>

   

     <h1>Messages</h1><br><br>
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse 
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
     officia deserunt mollit anim id est laborum.</p><br><br>

     <table>
        <thead>
                  <tr>
                       <th colspan="2">Sender Name</th>
                      <th>Password</th>
                     <th>Sender Age</th>
                      <th>Sender Email</th>
                      <th>Gender</th>
                      <th>Message Sent</th>
                      <th>Time</th>
                      <th>Action</th>
                        </tr>
        </thead>                
    <tbody>
<?php


$select_msg = "SELECT * FROM `messages` ORDER BY datecreated DESC";
$select_msg_res = $conn->query($select_msg);
$en=0;
if ($select_msg_res->num_rows > 0) {
    
  // output data of each row
  while($sel_msg_row = $select_msg_res->fetch_assoc()) {
    $en++;
  ?> 
            <tr>
                <td><?php print $en ?>.</td>
                <td><?php print $sel_msg_row ["sender_name"];?></td>
                <td><?php print $sel_msg_row ["user_password"];?></td>
                <td><?php print $sel_msg_row ["sender_age"];?></td>
                <td><?php print $sel_msg_row ["sender_email"];?></td>
                <td><?php print $sel_msg_row ["gender"];?></td>
                <td><?php print substr($sel_msg_row ["text_message"],0,23)."....";?></td>
                <td><?php print date("d-M-Y H:i", strtotime( $sel_msg_row ["datecreated"]));?></td>
                <td>[<a href="edit_msg.php?messageId=<?php print $sel_msg_row ["messageId"];?>">edit</a>] [del]</td>
            </tr>



 <?php
}
} else {
  echo "0 results";
}


?>
  </tbody>                 
                       
         <thead>
                  <tr>
                       <th colspan="2">Sender Name</th>
                      <th>Password</th>
                     <th>Sender Age</th>
                      <th>Sender Email</th>
                      <th>Gender</th>
                      <th>Message Sent</th>
                      <th>Time</th>
                      <th>Action</th>
                        </tr>
        </thead>         
    </table>
<?php include_once("template/footer.php");?>

    

