<?php
  $headers =  'MIME-Version: 1.0' . "\r\n";
  $headers .= 'From: Your name <info@address.com>' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  mail('cvanhorn@talentkeepers.com','Hello','Body of the message',$headers);


 ?>
