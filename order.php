<?php include_once("template/heading.php");?>
<?php include_once("template/nav.php");?>
    
<?php include_once("template/banner.php");?>
          
   
 
 </h1>
 <div class="card-container">
 <div class="card">
 <form action=""method="post">
    <label for="txt">Username:</label><br>
    <input type="text" id="txt"
    placeholder="Fullname"><br><br>

    <label for="pwd">Password</label><br>
    <input type="password" id="pwd"
    placeholder="password"><br><br>

    
    <label for="doo">Date of order</label><br>
    <input type="date" id="doo"
        placeholder="date of order"><br><br>

        <label for="dod">Date of  delivery</label><br>
        <input type="date" id="dod"
        placeholder="date of delivery"><br><br>


        <label> Your Order:</label><br>
            
            
            <input name="label" type="radio" id="wfc"><label for="wfc">White Forest Cake</label><br>
            <input name="label" type="radio" id="bfc"><label for="bfc">Black Forest Cake</label><br>
            <input name="label" type="radio" id="cheese"><label for="cheese">Cheescake</label><br>
            <input name="label" type="radio" id="rdv"><label for="rdv">Red Velvet Cake</label><br>

            <input name="label" type="radio" id="fudge"><label for="fudge">Fudgecake</label><br>

            <input name="label" type="radio" id="crs"><label for="crs">Croisants</label><br>

            <input name="label" type="radio" id="bkl"><label for="bkl">Baklava</label><br>
            <input name="label" type="radio" id="dnt"><label for="dnt">Donuts</label><br>
            <input name="label" type="radio" id="mac"><label for="mac">Macaroons</label><br>
            <input name="label" type="radio" id="cr"><label for="cr">Cinnamon Rolls</label><br>
            <input name="label" type="radio" id="hb"><label for="hb">Cheescake</label><br><br>



            

   
        <label for="txt">Specify your order details</label><br>

        <textarea name="order details "id=" txt" cols="30" rows="5"> </textarea><br><br>

        <input type="submit" name="Order" value="Place Order">


 </form>
</div>
</div>
 <?php include_once("template/footer.php");?>
</body>
</html>