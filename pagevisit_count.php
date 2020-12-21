<?php
  if (!isset($_COOKIE['pcount'])){
      $cookie = 1;
      setcookie("pcount", $cookie);
    }
  else{
      $cookie = ++$_COOKIE['pcount'];
      setcookie("pcount", $cookie);
}  
?>