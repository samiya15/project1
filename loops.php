<h1> loops</h1>
<h4> while-loop</h4>
<?php
//while loop
$in=0;
while($in<10){
    print $in."<br>";
    $in++;
}
?>
<h4> do-while-loop</h4>
<?php
//do while
$s=5;
do{
    print $s."<br>";
    $s++;
}while($s<15);
?>
<h4>for-loop</h4>
<?php
for($f=45;$f<55;$f++){
    print $f."<br>";
}
?>
<h4>foreach</h4>
<?php
$months=["january","february","march","april",
	"may","june","july","august","september","october","november","december"];
    //foreach($months AS $month){
       // print $month."<br>";
    //}
   
?>
<form action="">
 <select name="" id="">
    <option value="">--Months--</option>
        <?php
        foreach($months AS $month){
            print "<option value=''>$month</options>";
        }
        ?>

    </select>
 <select name="" id="">
    <option value="">--Year--</option>
        <?php
        //while loop
        $y=2014;
       while($y<2030){
           print "<option value=''>$y</options>";
           $y++;
         }
         ?>
</select>
<select name="" id="">
    <option value="">--Days--</option>
        <?php
        $d=1;
        do{
            print "<option value=''>$d</options>";
            $d++;
        }while($d<=31);
        ?>
</select>
    </form>
    <form action="">
 <select name="" id="">
    <option value=""><?php print date('y')?></option>
        <?php
        foreach($months AS $month){
            print "<option value=''>$month</options>";
        }
        ?>

    </select>
    </form>
        

