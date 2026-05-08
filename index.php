<?php
session_start();
include 'connect.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>LOGIN FIRST</h2>
  <div class="form-container">
   <form method="POST">
    <label for="">Username </label>
     <input type="text" name="username"><br><br>
    <label for="">Password: </label>
     <input type="password" name="password"><br><br>
    <button name="login" class="back-btn">Login</button>
   </form>
</div>
</body>
</html>