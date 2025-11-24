<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>m</title>
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>
    

<div class="container">


         <!-- Login section-->
     <div class="form-box active" id="Login-form">
        <form action="login_register.php" method="POST">
            <h2>Login</h2>
            <input type="email"  name="email" id="" placeholder="Email" required>
            <input type="password" name="password" id="" placeholder="Password" required>
            <button type="submit" name="login">Login</button>
            <p>Don't have an account? <a href="#" onclick="showForm('Register-form')">Register</a></p>
        </form>
     </div>

         <!-- Register section-->
     <div class="form-box" id="Register-form" >
        <form action="login_register.php" method="POST">
            <h2>Register</h2>
            <input type="text" name="fullname" id="" placeholder="Full Name">
            <input type="email"  name="email" id="" placeholder="Email" required>
            <select name="role" id="">
                <option value="">-- select a role --</option> 
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
            <input type="password" name="password" id="" placeholder="Password" required>
            <button type="submit" name="register">Register</button>
            <p>Already have an accout? <a href="#" onclick="showForm('Login-form')">Login</a></p>
        </form>
     </div>

</div>

<script src="asset/js/script.js"></script>



   
</body>
</html>