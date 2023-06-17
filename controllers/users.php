<?php
    $rootPath = $_SERVER['DOCUMENT_ROOT'];
    $databasePath = $rootPath . '/hyper/database/db.php';
    // Include the database connection file
    include($databasePath);
    include $rootPath.'/hyper/validation/validate_user.php';

    $table = 'users';
    $users = selectAll($table);


    $errors = array();

    $fname = '';
    $lname = '';
    $email = '';
    $password = '';
    $c_pass = '';


    if (isset($_POST['login_btn'])) {
        $errors = validateLogin($_POST);

        if (count($errors)=== 0) {

            $user = selectOne($table, ['email' => $_POST['email']]);
        
            if ($user && password_verify($_POST['password'], $user['password'])){
        
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['message'] = 'You are logged in';
                $_SESSION['type'] = 'success';
                header('Location: index.php');
                exit();
        
            } else {
                array_push($errors, 'Wrong Login credentials <br> <li>Check Email and Password</li>');
            }
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    if (isset($_POST['register_btn'])) {

        $errors = validateRegister($_POST);

        if (count($errors)=== 0) {
            unset($_POST['register_btn'],$_POST['c-pass']);
            $_POST['password']= password_hash($_POST['password'], PASSWORD_DEFAULT);
            $_POST['type']= 'U';
            $_POST['user_id']= time().date('Y');

            $user = create($table, $_POST);

            $_SESSION['type'] = $user['type'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['message'] = 'You are logged in';

            header('location:index.php');
            exit();
        }

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $c_pass = $_POST['c-pass'];

    }