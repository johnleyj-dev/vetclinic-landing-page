<?php require_once "includes/controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Beterinaryo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel = "icon" href = "assets/logo.ico" type = "image/x-icon">
</head>
<body>

<header class="header">

    <a href="index.php" class="logo"> <i class="fas fa-heartbeat"></i> Sitio Beterinaryo</a>

    <nav class="navbar">
        <a href="index.php">home</a>
        <a href= "services.php">services</a>
        <a href="gallery.php">gallery</a>
        <a href="about.php">about</a>
        <a href="doctors.php">doctors</a>
        <a href="news.php">news</a>
        <a href="login.php">login</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgotpass.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                    <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php 
                                    foreach($errors as $error){
                                        echo $error;
                                    }
                                ?>
                            </div>
                            <?php
                        }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter email address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
<script src="js/script.js"></script>

</body>
</html>