<?php
if(empty($_POST['name']))
{
$info['errors']['name'] = "A name is required";
}else
if(!preg_match("/[a-zA-Z]/",$_POST['name']))
{
$info['errors']['name'] = "First name cannot have special characters or numbers";
}
//Validate email
if(empty($_POST['email']))
{
$info['errors']['email'] = "An email is required";
}else
if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
$info['errors']['email'] = "Email is not valid";
}
//Validate password
if(empty($_POST['password']))
{
$info['errors']['password'] = "A password is required";
}else
if($_POST['password'] !== $_POST['confirm_password'])
{
$info['errors']['password'] = "Passwords do not match";
}else
if(strlen($_POST['password']) < 8) { $info['errors']['password']="Password must be 8 characters long" ; } 
if(empty($info['errors'])) { 
    $arr=[]; 
    $arr['name']=$_POST['name']; 
    $arr['email']=$_POST['email'];
    $arr['password']=password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $arr['date']=date("Y-m-d H:i:s"); 
    db_query("insert into comment_user (name,email,password,date) values (:name,:email,:password,:date)",$arr); 
    $info['success']=true; 
}