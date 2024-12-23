<script src="https://code.jquery.com/jquery-3.6.4.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php 
session_start();
require_once "connection.php";
if(isset($_POST['register'])){ //ถ้ามีการกด submit จะเก็บค่าลงในตัวแปรที่สร้าง
    $username = $_POST['username'];
    $password = $_POST['password'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phonenumber = $_POST['phonenumber'];
    
    if(empty($username)){
        $_SESSION['error'] = "Please enter your username";
        header("location: register.php");
    } else if(empty($password)){
        $_SESSION['error'] = "Please enter your password";
        header("location: register.php");
    } else if(empty($firstname)){
        $_SESSION['error'] = "Please enter your firstname";
        header("location: register.php");
    } else if(empty($lastname)){
        $_SESSION['error'] = "Please enter your lastname";
        header("location: register.php");
    } else if(empty($phonenumber)){
        $_SESSION['error'] = "Please enter your phonenumber";
        header("location: register.php");
    } else {
        $checkUsername = $db->prepare("SELECT COUNT(*) FROM register WHERE username = ?");
        $checkUsername->execute([$username]);
        $userNameExists = $checkUsername->fetchColumn();
    
        if($userNameExists){
            $_SESSION['error'] = "Username already exists";
            header("location: register.php");
        } else {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
            try {
                $stmt = $db->prepare("INSERT INTO register(username, password, firstname, lastname, phonenumber) VALUES (?, ?, ?, ?, ?)");
                $stmt->execute([$username, $hashedPassword, $firstname, $lastname, $phonenumber]);
    
                $_SESSION['success'] = "Registration Successfully";
                header("location: register.php");
    
            }catch(PDOException $e){
                $_SESSION['error'] = "Something went wrong, please try again.";
                echo "Registration failed: " . $e->getMessage();
                header("location: register.php");
            }
        }
    }
}
?> 