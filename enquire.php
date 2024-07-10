<?php 
require_once("includes/dbconnect.php");
 include_once("template/heading.php");
 include_once("template/nav.php");
 include_once("template/banner.php");


 if(isset($_POST["send_message"])){
    $fn =mysqli_real_escape_string($conn, $_POST ["fullname"]);
    $pwd =mysqli_real_escape_string($conn, $_POST["password"]);
    $age = mysqli_real_escape_string($conn, $_POST["age"]);
    $mail =mysqli_real_escape_string($conn, $_POST["email_address"]);
    $gender =mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn,$_POST["enquiry"]);

// inserting messages into the database.
    $insert_message="INSERT INTO messages
    (sender_name, user_password, sender_age, sender_email, gender, text_message)
    VALUES
    ('$fn','$pwd', '$age', '$mail','$gender',  '$message')";

    if($conn->query($insert_message)=== TRUE){
      //  echo "New record created successfully";
      header("Location: enquire.php");
      exit();

    }else{
        echo "Error; ".$insert_message."<br>".$conn->error;
    }

}

?>
   
    </h1>
    <div class="card-container">
      <div class="card">

    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>"method="POST">
        <label for="txt">Fullname:</label><br>
        <input type="text" id="txt"
        placeholder="Fullname" name="fullname" required><br><br>

        <label for="pwd">Password</label><br>
        <input type="password" id="pwd" 
        placeholder="password" name="password" required><br><br>

        <label for="sb">Gender:</label><br>
        <select name="subject_line" id="sb" required>
            <option value="">--select Gender--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Rather not say">Rather not say</option>
        </select><br><br>

        <label for="age">Age</label><br>
        <input type="number" id="age"
        placeholder="age" name="age" required><br><br>

        <label for="em">Email Address</label><br>
        <input type="email" id="em"
        placeholder="email" name="email_address" required><br><br>

        <label for="dt">Date of enquiry:</label><br>
        <input type="date" id="dt"
        placeholder="date of enquiry" name="date_enquiry" ><br><br>

        <label for="tm">Time of enquiry:</label><br>
        <input type="time" id="tm"
        placeholder="time of enquiry" name="time_enquiry" ><br><br>



        
<label for="txt">Your Enquiry</label><br><br>
<textarea name="enquiry"id=" txt" cols="30" rows="5" required> </textarea><br><br>

<div class="submit">
<input type="submit" name="send_message" value="Save Details">
</div>
    </form>
   
    </div>
    </div>


   <div class="footer">
        copyright Siwaka Bakery &copy; -Allrights Reserved
    
  </div>
</body>
</html>