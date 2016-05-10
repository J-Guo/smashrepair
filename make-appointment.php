<?php
/**
 * Created by PhpStorm.
 * User: Junjie
 * Date: 10/05/2016
 * Time: 2:23 PM
 */

require 'admin/db/connections.php';
//start session
session_start();
//initial database
$dbconnection = new ClientDBConnection();

//get user name
$username = isset($_POST['username']) ? $_POST['username'] :'';
$username = trim($username);
//get user mobile
$mobile =  isset($_POST['mobile']) ? $_POST['mobile'] :'';
$mobile = trim($mobile);

/**
 * do some validation here
 */

//if username is empty, redirect to index page with old input
if($username ==''){

    $_SESSION['oldname'] = $username;
    $_SESSION['oldmobile'] = $mobile;
    $_SESSION['error'] = 'User name cannot be empty';
    header("Location: index.php#quote");
    exit;
}

$result = $dbconnection->saveClient($username,$mobile);

//redirect page based on validation
if ($result){
    $_SESSION['message'] = 'success';
    header("Location: index.php");
    exit;
}
else{

    $_SESSION['oldname'] = $username;
    $_SESSION['oldmobile'] = $mobile;
    $_SESSION['error'] = 'User name or Mobile is not correct';
    header("Location: index.php#quote");
    exit;
}