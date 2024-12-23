<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!doctype html>
<html lang="en">

<style>
     @import url('https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,300;0,400;0,500;0,700;1,100&display=swap');

* {
  font-family: 'Kanit', sans-serif;
}
</style>

<?php
session_start();
include('connection.php');
//For user
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
    }

    if (empty($username)) {
        $_SESSION['error'] = "Please enter your username";
        header("Location: login.php");
    } else if (empty($password)) {
        $_SESSION['error'] = "Please enter your password";
        header("Location: login.php");
    } else {
        try {
            $stmt = $db->prepare("SELECT * FROM register WHERE username = ?");
            $stmt->execute([$username]);
            $userData = $stmt->fetch();

            if($userData && password_verify($password, $userData['password'])){
                $_SESSION['user_id'] = $userData['id'];
                header("Location: /admin_dashboard/index.php ");
            } else {
                $_SESSION['error'] = "Invalid username or password.";
                header("Location: login.php");
            }
        } catch(PDOException $e){
            $_SESSION['error'] = "Something went wrong, please try again.";
            header("Location: login.php");
        }
    }
?>
