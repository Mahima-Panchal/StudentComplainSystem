<?php
    error_reporting(0);
  if (!isset($_COOKIE['vcount'])){
      $cookie = 1;
      setcookie("vcount", $cookie);
    }
  else{
      $cookie = ++$_COOKIE['vcount'];
      setcookie("vcount", $cookie);
}  
?>