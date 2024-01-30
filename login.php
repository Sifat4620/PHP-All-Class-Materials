<?php
session_start();


$username = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);


$query = "SELECT * FROM login WHERE email = '$username' AND password = '$password'";
$result = mysqli_query($db, $query);

$row = mysqli_fetch_assoc($result);
$count = mysqli_num_rows($result);

if ($count == 1) {
    
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_role'] = $row['role']; /
   
    header("Location: /user_dashboard.php");
    exit();
} else {
    
    $_SESSION['error'] = 'Invalid Email or Password';
    header("Location: /login.php");
    exit();
}

?>
