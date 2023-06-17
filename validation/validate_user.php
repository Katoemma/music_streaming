<?php
    function validateLogin($users){
        $errors = array();

        if (empty($_POST['email'])) {
            array_push($errors,'Email is required !!');
        }
        if (empty($_POST['password'])) {
            array_push($errors,'Password is required !!');
        }
        return $errors;
    }

    function validateRegister($user){
        $errors = array();

        if (empty($_POST['fname'])) {
            array_push($errors,'First name is required !!');
        }
        if (empty($_POST['lname'])) {
            array_push($errors,'Last name is required !!');
        }
        if (empty($_POST['email'])) {
            array_push($errors,'email is required !!');
        }
        if (empty($_POST['password'])) {
            array_push($errors,'password is required !!');
        }
        if ($_POST['password'] !== $_POST['c-pass']) {
            array_push($errors,'password doesnot match !!');
        }

        $userexists = selectAll('users',['email'=> $_POST['email']]);

        if ($userexists) {
            array_push($errors,'Email already exists !!');
        }
        return $errors;
    }

?>
