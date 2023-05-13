<?php

session_start();

function db_query(string $query, array $data = array())
{
    $string = "mysql:hostname=localhost;dbname=comment_db";
    $conn = new PDO($string,'root','');
    $stm = $conn->prepare($query);
    $check = $stm->execute($data);

    if($check)
    {
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
        if(is_array($result) && !empty($result))
        {
            return $result;
        }
    }
}

function check_login():bool
{
    if(!empty($_SESSION['PROFILE']))
    {
        return true;
    }
    return false;
}

function redirect($path):void
{
    header("Location:{$path}");
    die;
}