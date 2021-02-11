<?php

session_start();
ob_start();
if(isset($_SESSION['username']) && isset($_SESSION['password'])):

#nursena karakulah - rabia gül baruğ - rabia demir
?>

<!DOCTYPE html>
<html>
<head>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link rel="stylesheet" type="text/css" href="posts.css">

    <title></title>
</head>

<body>

<section class="details-card">
    <div class="container">
          <div class="row">
    <div class="col-md">
    <h1> <a  class="badge ">Yazılar</a>  <a href="seen.php"> <button href="seen.php" class="btn btn-success btn-lg float-right" type="submit">   Okunanlar  </button> </a></h1>
               
    </div>
       <?php 
        include "data.php";
      
        ?>
    </div>
</section>


</body>
</html>


<?php
ob_end_flush();

else:
    header("Location: login.php");

endif;
?>