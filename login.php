<?php

#emre ensar çapcı - onur emre ergin- songül keskin
session_start();
ob_start();

if (isset($_POST["submit"])) {
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    header('location: do-login.php');
}


?>


<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">

            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <?php if (isset($_GET['user']) && $_GET['session'] == "false") : ?>
                                    <h4><?php echo $_SESSION['message']; ?></h4>
                                    <label for="username" class="text-info">Username:</label><br>

                                    <input type="text" name="username" id="username" class="form-control" placeholder=<?php echo $_GET['user']; ?> value="<?php echo $_GET['user']; ?>" required>
                                <?php else : ?>
                                    <label for="username" class="text-info">Username:</label><br>
                                    <input type="text" name="username" id="username" class="form-control">
                                <?php endif; ?>
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>
                            <div class="form-group">

                                <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php

ob_end_flush();
?>