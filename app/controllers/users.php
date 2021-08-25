<?php
include (ROOT_PATH . "/app/database/db.php");
include (ROOT_PATH . "/app/helpers/validateUser.php");


$table = 'users';

$admin_users = selectAll($table);


$errors = array();
$id = '';
$username = '';
$email = '';
$password = '';
$repeatpassword = '';


function userLogin($user)
 {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['message'] = 'You are now logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location: ' . BASE_URL . '/admin/dashboard.php'); 
    } else {
        header('location: ' . BASE_URL . '/index.php');
    }
    exit();
}


if (isset($_POST['submit-btn']) || isset($_POST['add-admin'])) {
    $errors = validateUser($_POST);
    if(count($errors) === 0 ) {
        unset($_POST['repeatpassword'], $_POST['submit-btn'],$_POST['add-admin']);
        $_POST ['password'] = password_hash($_POST ['password'], PASSWORD_DEFAULT);

        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $user_id = create($table, $_POST);
           
            header('location: ' . BASE_URL . '/admin/users/index.php'); 
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            userLogin($user);
        }
    }
    else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeatpassword = $_POST['repeatpassword'];
    }
}





if (isset($_POST['submit-login'])){

    $errors = validateLogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['email' => $_POST['email']]);

        if ($user && password_verify($_POST['password'], $user['password'])) {
            
            
            userLogin($user);
        
        } else {
           array_push($errors, 'Wrong credentials');
        }
    }

    $password = $_POST['password'];

}