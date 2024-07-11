<?php 
require_once("includes/dbconnect.php");
include_once("template/heading.php");
 include_once("template/nav.php");
    
 include_once("template/banner.php");
          

if(isset($_POST["signup"])){
    $fn =mysqli_real_escape_string($conn, $_POST ["fullname"]);
    $mail =mysqli_real_escape_string($conn, $_POST["email_address"]);
    $username = mysqli_real_escape_string($conn, $_POST["username"]);
    $pass = mysqli_real_escape_string($conn,$_POST["passphrase"]);
    $age =mysqli_real_escape_string($conn, $_POST["age"]);
    $gender=mysqli_real_escape_string($conn, $_POST["gender"]);
   
//verify that the fullname contains only letters, space and a single quote

//verify that the email has the correct format
if(!filter_var($mail, FILTER_VALIDATE_EMAIL)){
    $_SESSION["wrong_email_format"]="wrong email format";
    $_SESSION["error"]="";
    
}
//verify that the email domain is authorized(gmail.com,yahoo.com etc)

//verify that the email address does not exist in the database

//verify that the username does not exist in the database

//verify that the password is identical to the repeat password

//verify that the password length is between 4 and 8 characters

if(!isset($_SESSION["error"])){
    $insert_message="INSERT INTO `users` ( `fullname`, `email`, `username`, `pass`, `age`, `gender`) VALUES
    ( '$fn', '$mail', '$username', '$pass',$age,'$gender')";

        if($conn->query( $insert_message)=== TRUE){
        //  echo "New record created successfully";
        header("Location: index.php");
        exit();

        }else{
            echo "Error; ". $insert_message."<br>".$conn->error;
        }




}
}
?>
    
    
    </h1>
<h4 style=" text-size-adjust: 50%;
color: beige;">
<p> 

<div class="card-container">
      <div class="card">

      <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>"method="POST">
<label for="fn">Fullname:</label><br>
    <input type="text" id="fn" maxlength="50" name="fullname"  required 
    placeholder="Fullname" autofocus><br><br><br>

    <label for="em"> Email Address:</label><br>
    <input type="email" id="em"  maxlength="50" name="email_address" required
    placeholder="Email"><br><br><br>

<?php if(isset( $_SESSION["wrong_email_format"])){print '<span class="error_form">'.$_SESSION["wrong_email_format"].'</span>';
     unset ( $_SESSION["wrong_email_format"]);}?><br>
     
    <label for="um"> Username: </label><br>
    <input type="text" id="um"  maxlength="50" name="username" required
    placeholder="Username"><br><br><br>

    <label for="age"> Age: </label><br>
    <input type="number" id="age" 
    placeholder="age" name="age" required><br><br><br>

    <label for="gen">Gender: </label><br>
        <select name="gender" id="gen" required>
        <option value="">--Select Gender--</option>


        <?php 
            
            $sel_gen="SELECT * FROM gender ORDER BY  genderId ASC" ;
            $sel_gen_res = $conn->query($sel_gen);
            while($sel_gen_row = $sel_gen_res->fetch_assoc()){
                ?>

                <option value="<?php print $sel_gen_row["gender"];?>"><?php print $sel_gen_row["gender"];?></option>
                <?php
            }
            ?>
        </select><br><br><br>

<label for="pwd">Password</label><br>
    <input type="password" id="pwd" name="passphrase" required
    placeholder="Password"><br><br><br>

    <label for="pwd"> Confirm Password</label><br>
    <input type="password" id="pwd" name="passphrase"
    placeholder="Password"><br><br>

    <div class="submit">
<input type="submit" name="signup" value="Sign Up">
</div>
    <br><br>
    </div>
    </div>
        </form>
    </p><br><br><br><br>
    <p style="text-align: right;">Welcome to the Siwaka Bakery Family ❤️</p> 
</h4>
<?php include_once("template/footer.php");?>
</body>
</html>