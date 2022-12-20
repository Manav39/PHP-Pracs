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
     $_SESSION['user'] = "Sachin";
     echo "Session done ";
     ?>
     <a href="Session2.php">visit next page</a>
   </body>
 </html>