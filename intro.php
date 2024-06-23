 <?php
   print "This is my first php code";
   print "<br>";

   print "today is <span style='color:#ff4845;'> 
   Sunday </span>";
   print "<br>";

   print 1999;
   print "<br>";

   print"4554";//string
   print "<br>";

   print date('l');//displays current date of the week
   print "<br>";

   print date('l',strtotime('tomorrow'));//date tomorrow
   print "<br>";

   print date('l',strtotime('125 days'));
   print "<br>";

   print date('d/M/Y');//M will give you shortform of the month
   //F will give you the full form of the month i.e instead of jun it will be June
   print "<br>";

   print "Today is " .date('l,F jS Y');
   //jS will the superscript
   print "<br>";

   date_default_timezone_set("Africa/Nairobi");

   print date('H:i:s');//H for hour i for minute s for seconds
   print "<br>";

   //Creating (Declaring) a variable

   $fname = "Alex Okama";//Declaration of a variable or a string 
 
   $yob = 1999; //Declaration of a digit or an integer
   
   print $fname;
   print "<br>";

   echo $yob;
   print "<br>";

   $user_dob="1999-05-26";
   print "<br>";
   print $fname. " was actually born on ".date('l,F jS Y',strtotime( $user_dob));
   print "<br>";

   $current_year =date('Y');
   echo $current_year;
   print "<br>";

   $age = $current_year - $yob;//using subtraction to find age
   print $age;
   print "<br>";

   print $fname. " is ".$age. " years old";
   print "<br>";

   $birthday=new DateTime($user_dob);
   $today=new DateTime('today');

   $interval =$birthday->diff($today);

   echo '<pre>';
   print_r($interval);
   echo '</pre>';
   print '<br>';

   print $fname. " is actually  ".$interval->y. " years and ".$interval->d." days old";
   print '<br>';

   //the if..else..statement
   $adult_age=18;
   if ($interval->y >$adult_age){
    print $fname ." is an adult";
   }else{
    print $fname . " is not an adult";
   }
   print '<br>';

   //variable characteristics
   $last_name="Okama";
   echo "My last name is $last_name"

 ?>
 <br>
 <br>
 <br>
 <br>
    
