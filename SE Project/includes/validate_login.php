<?php
$arr=[];
$arr['email']=$_POST['email'];
$row = db_query("SELECT * FROM comment_user WHERE email = :email LIMIT 1",$arr);
if(!empty($row)) {
    $row = $row[0];
    if(password_verify($_POST['password'], $row['password'])){
        $info['success']=true;
        $SESSION['PROFILE'] = $row;
    }
    else{
        $info['errors']['email'] = "Wrong email or password";
    }
}
else{
    $info['errors']['email'] = "Wrong email or password";
}