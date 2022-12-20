<html>
<body>
<form method="POST">
    <input type="text" name="Email" placeholder="Enter email">
    <input type="submit" name="submit" value="SUBMIT">
</form>
<?php
class customException extends Exception {
  public function errorMessage() {
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

if(isset($_POST['submit']))
{

try {
  if(filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL) === FALSE)
   {
    throw new customException($_POST['Email']);
  }
  else{
      echo "Valid Email address";
  }
}

catch (customException $e) {
  //display custom message
  echo $e->errorMessage();
}
}
?>
</body>
</html>