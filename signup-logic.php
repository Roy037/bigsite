<?php
require 'config/database.php';
//neu click vao submit -> chuyen sang trang logic
if (isset($_POST['submit'])) {
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $createpassword = filter_var($_POST['createpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirmpassword = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $avatar = $_FILES['avatar'];
    echo $firstname, $lastname, $username, $email, $createpassword, $confirmpassword;
    //gan gia tri goi y
    if (!$firstname) {
        $_SESSION['signup'] = "Please enter your First name";
        } elseif (!$lastname) {
            $_SESSION['signup'] = "Please enter your last name";
        } elseif (!$username) {
            $_SESSION['signup'] = "Please enter your user name";
        } elseif (!$email) {
            $_SESSION['signup'] = "Please enter your a valid email";
        } elseif (strlen($createpassword) < 8 || strlen($confirmpassword) < 8) {
            $_SESSION['signup'] = "Password should be 8+ characters";
        } elseif (!$avatar['name']) {
            $_SESSION['signup'] = "Please add avatar";
        } 
    else {
        //kiem tra mat khau user neu khong hop ly
        if($createpassword !== $confirmpassword){
            $_SESSION['signup'] = "Password do not match";
        }else{
            $hashed_password = password_hash($createpassword,PASSWORD_DEFAULT);
            echo $createpassword . '<br/>';
            echo $hashed_password;
        }
    }
} else {
    header('location:' . ROOT_URL . 'signup.php');
    die();
}
