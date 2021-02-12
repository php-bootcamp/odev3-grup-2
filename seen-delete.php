<?php

  #sevda engin- abdulkadir aydın - muharrem bedir - ayşegül çetin
session_start();
ob_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
  if (isset($_GET['post']) && !empty($_GET['post']) && isset($_POST['post'])) {
    setcookie($_GET['post'], "", time() - 3600);
    $url = $_SERVER['HTTP_REFERER'];  // hangi sayfadan gelindigi degerini verir.    
    if ($url == "http://localhost/odev3/seen.php") {
      header("Location: seen.php");
    } else {
      header("Location: " . $url);
    }
  }





else {
     header("Location: login.php");
}

  ob_end_flush();
}
