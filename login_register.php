<?php

session_start();
require_once 'config.php';


// check if the  register button has been clicked and sanitize
if (isset($_POST['register'])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $checkEmail = $conn->query("SELECT email FROM users WHERE email = '$email'");
    if ($checkEmail->num_rows > 0){
        $_SESSION['register_error'] = "Email is already registered";
        $_SESSION['active_form'] = 'register';
    }else{
        $conn->query("INSERT INTO users (fullname, email, role, password) VALUES ('$fullname', '$email', '$role', '$password')");

    }
    header("Location: index.php"); // redirct user to the landing page.
    exit(); 
}



// condition to handle  the login processs
if (isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email = '$email'");
    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];
            
            if ($user['role'] === 'admin') {
                header("Location: admin_page.php");
            } else{
                header("Location: user_page.php");
            }
            exit();
        }
    }
    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: index.php");
    exit();
}

?>



