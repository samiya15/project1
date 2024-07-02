<?php require_once("includes/dbconnect.php");?>

<?php include_once("template/heading.php");?>
<?php include_once("template/nav.php");?>
<?php include_once("template/banner.php");?>
   
    </h1>
    <form action=""method="post">
        <label for="txt">Username:</label><br>
        <input type="text" id="txt"
        placeholder="Fullname"><br><br>

        <label for="pwd">Password</label><br>
        <input type="password" id="pwd"
        placeholder="password"><br><br>
        <select name="" id="">
            <option value="">--select Gender--</option>
            <option value="">Male</option>
            <option value="">Female</option>
            <option value="">Rather not say</option>
        </select><br><br>

        <input type="number"
        placeholder="age"><br><br>

        <input type="email"
        placeholder="email"><br><br>

        <input type="date"
        placeholder="date of enquiry"><br><br>

        <input type="time"
        placeholder="time of enquiry"><br><br>

        
<label for="txt">Kindly type in your enquiry</label><br><br>
<textarea name="enquiry"id=" txt" cols="30" rows="10"> </textarea><br><br>

<input name="label" type="radio" id="yes"><label for="yes">yes</label>
<input name="label" type="radio" id="no"><label for="no">no</label>
<br><br>
<input type="submit" value="Save Details">

    </form>

   <div class="footer">
        copyright Siwaka Bakery &copy; -Allrights Reserved
    
  </div>
</body>
</html>