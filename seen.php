<?php

#sevda engin- abdulkadir aydın - muharrem bedir - ayşegül çetin
session_start();
ob_start();
include("functions.php");

if(isset($_SESSION['username']) && isset($_SESSION['password'])):
    if(!isset($_COOKIE['post1']) && !isset($_COOKIE['post2']) && !isset($_COOKIE['post3']) ){
        header("Location: posts.php");
    }

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="posts.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

</head>

<body>

        <div class="container">
            <div class="well">
                <div class="row">
                
                    <?php

                    if (isset($_COOKIE['post1'])) :
                        $data = unserialize($_COOKIE['post1']);
                    ?>
                        <div class="col-md-12">
                            <div>
                                <h1 class="hidden-xs hidden-sm"><?php echo $data['post1-title']; ?> </h1>

                            </div>

                            <div class="pull-left col-md-4 col-xs-12 thumb-contenido">
                                <img class="center-block img-responsive" src='<?php echo $data['post1-img']; ?> ' />
                            </div>

                            <div>
                                <p><?php
                                    $string = $data['post1-descr'];
                                    readMore($string);

                                    ?> </p>
                            </div>
                            <form method="post" action="seen-delete.php?post=post1">

                                <!-- <input type="submit" class="btn btn-danger btn-lg float-right" name="delete-seen" id="delete-seen" value="" /> -->
                                <button type="submit" class="btn-card detail-article" name="post">Okunanlardan Kaldır</button>
                            </form>
                            <form method="post" action="post.php?id=http">
                                <input type="hidden" name="post-title" value="<?php echo $data['post1-title']; ?>">
                                <input type="hidden" name="post-descr" value="<?php echo $data['post1-descr']; ?>">

                                <input type="hidden" name="post-img-url" value="<?php echo $data['post1-img']; ?>">
                                <input type="submit" class="btn-card detail-article" name="post_button" id="post_button" value="Detay" />

                            </form>

                        </div>
                    <?php endif; ?>

                    <?php

                    if (isset($_COOKIE['post2'])) :
                        $data = unserialize($_COOKIE['post2']);
                    ?>
                        <div class="col-md-12">
                            <div>
                                <h1 class="hidden-xs hidden-sm"><?php echo $data['post2-title']; ?> </h1>

                            </div>

                            <div class="pull-left col-md-4 col-xs-12 thumb-contenido">
                                <img class="center-block img-responsive" src='<?php echo $data['post2-img']; ?> ' />
                            </div>

                            <div>
                                <p><?php
                                    $string = $data['post2-descr'];
                                    readMore($string);

                                    ?> </p>
                            </div>
                            <form method="post" action="seen-delete.php?post=post2">

                                <!-- <input type="submit" class="btn btn-danger btn-lg float-right" name="delete-seen" id="delete-seen" value="" /> -->
                                <button type="submit" class="btn-card detail-article" name="post">Okunanlardan Kaldır</button>
                            </form>
                            <form method="post" action="post.php?id=dns">
                                <input type="hidden" name="post-title" value="<?php echo $data['post2-title']; ?>">
                                <input type="hidden" name="post-descr" value="<?php echo $data['post2-descr']; ?>">

                                <input type="hidden" name="post-img-url" value="<?php echo $data['post2-img']; ?>">
                                <input type="submit" class="btn-card detail-article" name="post_button" id="post_button" value="Detay" />

                            </form>

                        </div>
                    <?php endif; ?>


                    <?php

                    if (isset($_COOKIE['post3'])) :
                        $data = unserialize($_COOKIE['post3']);
                    ?>
                        <div class="col-md-12">
                            <div>
                                <h1 class="hidden-xs hidden-sm"><?php echo $data['post3-title']; ?> </h1>

                            </div>

                            <div class="pull-left col-md-4 col-xs-12 thumb-contenido">
                                <img class="center-block img-responsive" src='<?php echo $data['post3-img']; ?> ' />
                            </div>

                            <div>
                                <p><?php
                                    $string = $data['post3-descr'];
                                    readMore($string);

                                    ?> </p>
                            </div>
                            <form method="post" action="seen-delete.php?post=post3">

                                <button type="submit" class="btn-card detail-article" name="post">Okunanlardan Kaldır</button>
                            </form>
                            <form method="post" action="post.php?id=http-https">
                                <input type="hidden" name="post-title" value="<?php echo $data['post3-title']; ?>">
                                <input type="hidden" name="post-descr" value="<?php echo $data['post3-descr']; ?>">

                                <input type="hidden" name="post-img-url" value="<?php echo $data['post3-img']; ?>">
                                <input type="submit" class="btn-card detail-article" name="post_button" id="post_button" value="Detay" />
                            </form>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

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