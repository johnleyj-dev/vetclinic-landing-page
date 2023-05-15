<?php require_once "includes/controllerUserData.php"; ?>
<?php require_once "googlelogin.php"; ?>
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
<style>
img {
  width: 50%;
}

</style>
</header>
<section class="login">
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
                <form action="login.php" method="POST" autocomplete="">
                    <h2 class="text-center">Login Form</h2>
                    <p class="text-center">Login with your email and password.</p>
                    <?php
                    if(count($errors) > 0){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="link forget-pass text-left"><a href="forgotpass.php">Forgot password?</a></div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="login" value="Login">
                    </div>
                        
                   
                       
                    <a href="https://accounts.google.com/o/oauth2/auth/oauthchooseaccount?response_type=code&access_type=online&client_id=155443346510-9668fl8edl5ac3argfgutgi8464djg1k.apps.googleusercontent.com&redirect_uri=http%3A%2F%2Flocalhost%2FSitio%2520Beterinaryo%2520Appointment%2520System%2520Web%2Fhome2.php&state&scope=email%20profile&approval_prompt=auto&flowName=GeneralOAuthFlow"><img src="image/google.png" alt="img" class="center"></a><br>
                    <h4 class="text-center">login with Google.</h4>
                    <div class="link login-link text-center">Not yet a member? <a href="signup.php">Signup now</a></div>
                </form>
            </div>
            
        </div>
    </div>
 </div>
 
</section>
<script src="js/script.js"></script>

</body>
</html>
