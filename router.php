<?php
switch ($_SERVER["REQUEST_URI"]){

case "/profile":
  include("profile.php");
  break;
case "/home":
  include("home.php");
  break;
default:
  echo "404 not found";

}
?>

