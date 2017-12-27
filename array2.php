<?php 

  
   $myArray[] = 1;
   $myArray[] = 2;
   $myArray[] = 3;
   $myArray[] = 4;
   $myArray[] = 5;
   $myArray[] = 6;
   $myArray[] = 7;
   $myArray[] = 8;
   $myArray[] = 9;
   $myArray[] = 10;
   $myArray[] = 11;
   $myArray[] = 12;
   $myArray[] = 13;
   $myArray[] = 14;
   $myArray[] = 15;
   
   print_r($myArray);
   
   for($i=0;$i<15;$i++) 
   {
       echo '<br/ >Position: ' . $i . ' Value: ' . $myArray[$i];
   }
?>