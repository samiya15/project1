<?php

session_start();

if(isset($_SESSION["fname"])){
   print 'yes the session is alive'; 
  print '<br> <a href="page_04.php">destroy the session</a>';
}else{
    print "no the session is destoyed";
    print '<br> <a href="page_01.php">create a new session</a>';
}