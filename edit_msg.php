<?php 
require_once("includes/dbconnect.php");
 include_once("template/heading.php");
 include_once("template/nav.php");
 include_once("template/banner.php");

 $messageId=$_GET["messageId"];
 $spot_msg = "SELECT * FROM `messages`WHERE messageId='$messageId' LIMIT 1";
 $spot_msg_res = $conn->query($spot_msg);
 $spot_msg_row = $spot_msg_res->fetch_assoc();



if(isset($_POST["update_message"])){
    $fn =mysqli_real_escape_string($conn, $_POST ["fullname"]);
    $pwd =mysqli_real_escape_string($conn, $_POST["password"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $mail =mysqli_real_escape_string($conn, $_POST["email_address"]);
    $gender =mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn,$_POST["enquiry"]);
    $messageId = mysqli_real_escape_string($conn,$_POST["messageId"]);

    
    $update_message="UPDATE messages SET sender_name='$fn',user_password='$pwd', sender_age='$age',sender_email= '$mail', gender='$gender',  text_message='$message'
     WHERE messageId='$messageId' LIMIT 1";
;

    if($conn->query($update_message)=== TRUE){
      //  echo "New record created successfully";
      header("Location: enquire.php");
      exit();

    }else{
        echo "Error; ".$update_message."<br>".$conn->error;
    }

}
?>
   
    <h1>Update Entries </h1><br>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>"method="POST">
        <label for="txt">Fullname:</label><br>
        <input type="text" id="txt"
        placeholder="Fullname" name="fullname" required value="<?php print $spot_msg_row["sender_name"];?>"><br><br>

        <label for="pwd">Password</label><br>
        <input type="password" id="pwd" 
        placeholder="password" name="password" required value="<?php print $spot_msg_row["user_password"];?>"><br><br>

        <label for="sb">Gender:</label><br>
        <select name="subject_line" id="sb" required >
            <option value=<?php print $spot_msg_row["gender"];?>><?php print $spot_msg_row["gender"];?></option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Rather not say">Rather not say</option>
        </select><br><br>

        <input type="number"
        placeholder="age" name="age" required value="<?php print $spot_msg_row["sender_age"];?>"><br><br>

        <input type="email"
        placeholder="email" name="email_address" required value=" <?php print $spot_msg_row["sender_email"];?>"><br><br>

        <input type="date"
        placeholder="date of enquiry" name="date_enquiry" ><br><br>

        <input type="time"
        placeholder="time of enquiry" name="time_enquiry" ><br><br>

        
<label for="txt">Kindly type in your enquiry</label><br><br>
<textarea name="enquiry"id=" txt" cols="30" rows="10" required ><?php print $spot_msg_row["text_message"];?> </textarea><br><br>

<input name="label" type="radio" id="yes"><label for="yes">yes</label>
<input name="label" type="radio" id="no"><label for="no">no</label>
<br><br>
<input type="submit" name="update_message" value="Update">
<input type="hidden" name="messageId" value="<?php print $spot_msg_row["messageId"];?>">

    </form>

   <div class="footer">
        copyright Siwaka Bakery &copy; -Allrights Reserved
    
  </div>
</body>
</html>