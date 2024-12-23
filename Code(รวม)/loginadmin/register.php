<?php
    session_start();
    require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="../logo.png" type="image/png">
</head>

<body>
    <img src="../logo.png" alt="" width="10%">
    <div class="header">
        <h2> Register Page </h2>
    </div>
    <form action="register_db.php" method="POST">

        <?php  if(isset($_SESSION['success'])) { ?>
            <div class="alert alert-success" role="alert">
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>

        <?php  if(isset($_SESSION['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?php 
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>

        <div class="input-group">
            <label for="username">ชื่อผู้ใช้</label>
            <input type="text" name="username" placeholder="Username" require>
        </div>
        <div class="input-group">
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password" placeholder="Password" require>
        </div>
        <div class="input-group">
            <label for="firstname">ชื่อจริง</label>
            <input type="text" name="firstname" placeholder="Firstname" require>
        </div>
        <div class="input-group">
            <label for="lastname">นามสกุล</label>
            <input type="text" name="lastname" placeholder="Lastname" require>
        </div>
        <div class="input-group">
            <label for="phonenumber">เบอร์โทรศัพท์</label>
            <input type="text" name="phonenumber" placeholder="Phone Number" require>
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Submit</button>
        </div>
        <div class="url">
            <p>Already have an account ? <a href="login.php">Login</a> </p>
            <p><a href="../home.php">Back To Home</a> </p>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>