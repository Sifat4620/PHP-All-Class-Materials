<?php
session_start();


$old_password = mysqli_real_escape_string($db, $_POST['old_password']);
$new_password = mysqli_real_escape_string($db, $_POST['new_password']);
$confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);


if ($new_password !== $confirm_password) {
    $_SESSION['error'] = 'New passwords do not match.';
    header('Location: change_password.php');
    exit();
}

$query = "SELECT password FROM users WHERE id = '".$_SESSION['user_id']."'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_assoc($result);

if ($row) {
    
    if ($row['password'] === $old_password) {


        $update_query = "UPDATE users SET password = '$hashed_password' WHERE id = '".$_SESSION['user_id']."'";
        if (mysqli_query($db, $update_query)) {
            $_SESSION['success'] = 'Password changed successfully.';
            header('Location: your_success_page.php');
            exit();
        } else {
            $_SESSION['error'] = 'Password could not be changed.';
            header('Location: change_password.php');
            exit();
        }
    } else {
        $_SESSION['error'] = 'Old password is incorrect.';
        header('Location: change_password.php');
        exit();
    }
} else {
    $_SESSION['error'] = 'User not found.';
    header('Location: change_password.php');
    exit();
}

mysqli_close($db);
?>
