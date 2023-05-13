<?php

require 'function.php';
if(!empty($_POST['data_type']))
{
    $info['data_type'] = $_POST['data_type'];
    $info['error'] = [];
    $info['success'] = false;
    if($_POST['data_type'] == "signup"){
        require 'includes/validate_signup.php';
    }
    else if($_POST['data_type'] == "login")
    {
        require 'includes/validate_login.php';
    }
    echo json_encode($info);
}