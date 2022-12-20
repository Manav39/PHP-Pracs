<?php
session_start();

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <?php
     echo "User is :".$_SESSION['user'];
     ?>
     <?php session_destroy();
     echo "Session destroyed";
      ?>
   </body>
 </html>