<?php 
require_once("includes/dbconnect.php");
 include_once("template/heading.php");
 include_once("template/nav.php");
 include_once("template/banner.php");


 if(isset($_POST["send_message"])){
    $fn = $_POST ["fullname"];
    $pwd = $_POST["password"];
    $age = $_POST["age"];
    $mail = $_POST["email_address"];
    $gender = $_POST["subject_line"];
    $message = $_POST["enquiry"];


    $insert_message="INSERT INTO messages
    (sender_name, user_password, sender_age, sender_email, gender, text_message)
    VALUES
    ('$fn','$pwd', '$age', '$mail','$gender',  '$message')";

    if($conn->query($insert_message)=== TRUE){
        echo "New record created successfully";

    }else{
        echo "Error; ".$insert_message."<br>".$conn->error;
    }

}

?>
   
    </h1>
    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>"method="POST">
        <label for="txt">Fullname:</label><br>
        <input type="text" id="txt"
        placeholder="Fullname" name="fullname" required><br><br>

        <label for="pwd">Password</label><br>
        <input type="password" id="pwd" 
        placeholder="password" name="password" required><br><br>


        <select name="subject_line" id="sb" required>
            <option value="">--select Gender--</option>
            <option value="">Male</option>
            <option value="">Female</option>
            <option value="">Rather not say</option>
        </select><br><br>

        <input type="number"
        placeholder="age" name="age" required><br><br>

        <input type="email"
        placeholder="email" name="email_address" required><br><br>

        <input type="date"
        placeholder="date of enquiry" name="date_enquiry" ><br><br>

        <input type="time"
        placeholder="time of enquiry" name="time_enquiry" ><br><br>

        
<label for="txt">Kindly type in your enquiry</label><br><br>
<textarea name="enquiry"id=" txt" cols="30" rows="10" required> </textarea><br><br>

<input name="label" type="radio" id="yes"><label for="yes">yes</label>
<input name="label" type="radio" id="no"><label for="no">no</label>
<br><br>
<input type="submit" name="send_message" value="Save_Details">

    </form>

   <div class="footer">
        copyright Siwaka Bakery &copy; -Allrights Reserved
    
  </div>
</body>
</html>