<?php 
require_once("includes/dbconnect.php");
include_once("template/heading.php");
include_once("template/nav.php");
    
 include_once("template/banner.php");

 if(isset($_POST["signin"])){
    $username =mysqli_real_escape_string($conn, $_POST ["username"]);
    $pass =mysqli_real_escape_string($conn, $_POST["pass"]);



    
    if(!isset($_SESSION["error"])){
        $insert_message="INSERT INTO `login` ( `username`, `pass`) VALUES
        (  '$username', '$pass')";
    
            if($conn->query( $insert_message)=== TRUE){
            //  echo "New record created successfully";
            header("Location: index.php");
            exit();
    
            }else{
                header("Location: login.php");
                exit();
            }
    
    
    
    
    }
 }

  ?>  
    

</h1>
    
<div class="card-container">
      <div class="card">
    <h4 style="text-align:left; ;
    color:beige;
    ">Kindly login<br><br><br><br>

    
<form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"])?>"method="POST">
    <label for="txt">Username: </label><br>
    <input type="text" id="txt" name="username" required
    placeholder="username"><br><br><br>

    <label for="pwd">Password: </label><br>
    <input type="password" id="pwd" name="pass" required
    placeholder="Password"><br><br><br>

    <div class="submit">
<input type="submit" name="signin" value="Sign In">
</div><br><br><br><br>


    <p>Are you a new customer? <br>
        <a href="signup.php" style="color:black;">Sign Up</a>
    </p>
</div>
</div>
</form>
    </h4>

    <p></p>
    <p></p>
    <?php include_once("template/footer.php");?>
</body>
</html>