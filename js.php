<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload = "DynamicTimer();">
    
    <p id="groupa"></p>
    <script>
        document.getElementById('groupa').innerHTML = "this is my first JS code";
    </script>
     <br><br>

     <button type="button" onclick="document.getElementById('MyImg').src='images/bulb_on.png'">Turn On</button>
     <img src="images/bulb_on.png" alt="" id="MyImg">
     <button type="button" onclick="document.getElementById('MyImg').src='images/bulb_off.png'">Turn Off</button>
    <br><br>

    <?php date_default_timezone_set("Africa/Nairobi");?>
    Static timer: <?php print date("H:i:s");?>
    <br>
    Dynamic timer: <div id="dtmer"></div>

 
     <script src="script.js"></script>
</body>
</html>