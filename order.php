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

    
    <label for="doo">Date of order</label>
    <input type="date" id="doo"
        placeholder="date of order"><br><br>
        <label for="dod">Date of  delivery</label>
        <input type="date" id="dod"
        placeholder="date of delivery"><br><br>
        <select name="Desserts And drinks Available" id="ord">
        
            <option value="">--select the desserts and drinks you wish to order--</option>
            
            <option value=""> whiteforest cake</option>
            
            <option value="">blackforest cake </option>
            <option value="">Cheescake </option>
            <option value="">fudge cake</option>
            <option value="">croisants</option>
             <option value="">baklava</option>
             <option value="">donuts</option>
            <option value="">macaroons</option>
            <option value="">cinnamon rolls</option>
            <option value="">honeycombs</option>
            <option value="">cake slices</option><br>
            <input name="label" type="radio" id="1kg"><label for="1kg">1kg</label>
            <input name="label" type="radio" id="2kg"><label for="2kg">2kg</label>
            <input name="label" type="radio" id="3.5kg"><label for="3.5kg">3.5kg</label>

            <option value="">croisants</option>
             <option value="">baklava</option>
             <option value="">donuts</option>
            <option value="">macaroons</option>
            <option value="">cinnamon rolls</option>
            <option value="">honeycombs</option>
            <option value="">cake slices</option>

        </select><br><br>
        <label for="txt">Specify your order details</label><br>

        <textarea name="order details "id=" txt" cols="30" rows="10"> </textarea><br><br>


 </form>

 <?php include_once("template/footer.php");?>
</body>
</html>