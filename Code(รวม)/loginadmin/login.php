<?php
session_start();

if (isset($_GET['back_home'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: /projectDB/home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="icon" href="../logo.png" type="image/png">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <img src="../logo.png" alt="" width="10%">


    <div class="header">
        <h2> Login </h2>
    </div>
    <form action="login_db.php" method="POST">

        <?php  if(isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>

        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" placeholder="Username" require>
        </div>
        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" placeholder="Password" require>
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
            <input type="hidden" id="login_user" name="login_user" value="<?php echo $login; ?>">
        </div>
        <div class="url">
            <p>Not yet a member? <a href="register.php">Register</a> || <a href="../home.php">Back To Home</a>
        </div>

        </p>
    </form>
</body>



</html>