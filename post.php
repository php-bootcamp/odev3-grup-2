<?php

session_start();
ob_start();

if (isset($_SESSION['username']) && isset($_SESSION['password'])) :

    #nursena karakulah - rabia gül baruğ - rabia demir
?>

    <!DOCTYPE html>
    <html>

    <head>
        <title></title>
        <link rel="stylesheet" type="text/css" href="posts.css">

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    </head>

    <body>
        <form>
            <div class="container">
                <div class="well">
                    <div class="row">
                        <?php if (isset($_GET['id']) && $_GET['id'] == "http") : ?>
                            <div class="col-md-12">
                                <div>
                                    <h1 class="hidden-xs hidden-sm"><?php if (isset($_POST['post-title'])) {
                                                                        echo $_POST['post-title'];
                                                                    } ?>


                                    </h1>
                                    <hr>

                                </div>

                                <div class="pull-left col-md-4 col-xs-12 thumb-contenido">
                                    <img class="center-block img-responsive" src='<?php if (isset($_POST['post-img-url'])) {
                                                                                        echo $_POST['post-img-url'];
                                                                                    } ?> ' />
                                </div>
                                <div>
                                    <p><?php if (isset($_POST['post-descr'])) {
                                            echo $_POST['post-descr'];
                                        } ?> </p>
                                </div>
                                <?php

                                if (!isset($_COOKIE['post1'])) {
                                    $cookie = array(
                                        'post1-title' => $_POST['post-title'],
                                        'post1-img' => $_POST['post-img-url'],
                                        'post1-descr' => $_POST['post-descr']
                                    );
                                    setcookie('post1', serialize($cookie), time() + 31536000);
                                }

                                // if (!isset($_COOKIE['post2-title']) && !isset($_COOKIE['post2-img']) && !isset($_COOKIE['post2-descr'])) {
                                //     setcookie('post1-title',  $_POST['post-title'], time() + 31536000);
                                //     setcookie('post1-img',  $_POST['post-img-url'], time() + 31536000);
                                //     setcookie('post1-descr',  $_POST['post-descr'], time() + 31536000);
                                // }



                                ?>
                            </div>
                        <?php endif; ?>


                        <?php if (isset($_GET['id']) && $_GET['id'] == "dns") : ?>
                            <div class="col-md-12">
                                <div>
                                    <h1 class="hidden-xs hidden-sm"><?php if (isset($_POST['post-title'])) {
                                                                        echo $_POST['post-title'];
                                                                    } ?>
                                    </h1>
                                    <hr>

                                </div>

                                <div class="pull-left col-md-4 col-xs-12 thumb-contenido">
                                    <img class="center-block img-responsive" src='<?php if (isset($_POST['post-img-url'])) {
                                                                                        echo $_POST['post-img-url'];
                                                                                    } ?> ' />
                                </div>

                                <div>
                                    <p><?php if (isset($_POST['post-descr'])) {
                                            echo $_POST['post-descr'];
                                        } ?> </p>
                                </div>

                                <?php
                                if (!isset($_COOKIE['post2'])) {
                                    $cookie = array(
                                        'post2-title' => $_POST['post-title'],
                                        'post2-img' => $_POST['post-img-url'],
                                        'post2-descr' => $_POST['post-descr']
                                    );
                                    setcookie('post2', serialize($cookie), time() + 31536000);
                                }
                                // if (!isset($_COOKIE['post2-title']) && !isset($_COOKIE['post2-img']) && !isset($_COOKIE['post2-descr'])) {

                                //     setcookie('post2-title',  $_POST['post-title'], time() + 31536000);
                                //     setcookie('post2-img',  $_POST['post-img-url'], time() + 31536000);
                                //     setcookie('post2-descr',  $_POST['post-descr'], time() + 31536000);
                                // }
                                ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_GET['id']) && $_GET['id'] == "http-https") : ?>
                            <div class="col-md-12">
                                <div>
                                    <h1 class="hidden-xs hidden-sm"><?php if (isset($_POST['post-title'])) {
                                                                        echo $_POST['post-title'];
                                                                    } ?>
                                    </h1>
                                    <hr>

                                </div>

                                <div class="pull-left col-md-4 col-xs-12 thumb-contenido">
                                    <img class="center-block img-responsive" src='<?php if (isset($_POST['post-img-url'])) {
                                                                                        echo $_POST['post-img-url'];
                                                                                    } ?> ' />
                                </div>
                                <div>
                                    <p><?php if (isset($_POST['post-descr'])) {
                                            echo $_POST['post-descr'];
                                        } ?> </p>
                                </div>
                                <?php
                                if (!isset($_COOKIE['post3'])) {
                                    $cookie = array(
                                        'post3-title' => $_POST['post-title'],
                                        'post3-img' => $_POST['post-img-url'],
                                        'post3-descr' => $_POST['post-descr']
                                    );
                                    setcookie('post3', serialize($cookie), time() + 31536000);
                                }
                                // if (!isset($_COOKIE['post3-title']) && !isset($_COOKIE['post3-img']) && !isset($_COOKIE['post3-descr'])) {

                                //     setcookie('post3-title',  $_POST['post-title'], time() + 31536000);
                                //     setcookie('post3-img',  $_POST['post-img-url'], time() + 31536000);
                                //     setcookie('post3-descr',  $_POST['post-descr'], time() + 31536000);
                                // }
                                ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </form>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </body>

    </html>

<?php

else :
    header("Location: login.php");
endif;
ob_end_flush();
?>