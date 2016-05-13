<?php
/**
 * Created by PhpStorm.
 * User: Junjie
 * Date: 13/05/2016
 * Time: 12:56 PM
 */

require 'vendor/autoload.php';

use Mailgun\Mailgun;


//get user name
$username = isset($_POST['username']) ? $_POST['username'] :'';
$username = trim($username);
//get user mobile
$mobile =  isset($_POST['mobile']) ? $_POST['mobile'] :'';
$mobile = trim($mobile);
//get email subject
$subject = isset($_POST['emailSubject']) ? $_POST['emailSubject'] :'';
$subject = trim($subject);
//get user email message
$email = isset($_POST['email']) ? $_POST['email'] :'';
$email = trim($email);
//get messag body
$messageBody = isset($_POST['messageBody']) ? $_POST['messageBody'] :'';
$messageBody = trim($messageBody);

//start session
session_start();

//if username is empty
if($username == ""){

    $_SESSION['oldname'] = $username;
    $_SESSION['oldmobile'] = $mobile;
    $_SESSION['oldsubject'] = $subject;
    $_SESSION['oldemail'] = $email;
    $_SESSION['oldmessage'] = $messageBody;
    $_SESSION['error'] = 'User name cannot be empty';
    header("Location: contact.php#contact-form");
    exit;

}
//if user mobile is empty
elseif($mobile ==""){

    $_SESSION['oldname'] = $username;
    $_SESSION['oldmobile'] = $mobile;
    $_SESSION['oldsubject'] = $subject;
    $_SESSION['oldemail'] = $email;
    $_SESSION['oldmessage'] = $messageBody;
    $_SESSION['error'] = 'Mobile number cannot be empty';
    header("Location: contact.php#contact-form");
    exit;

}
//if subject is empty
elseif($subject ==""){

    $_SESSION['oldname'] = $username;
    $_SESSION['oldmobile'] = $mobile;
    $_SESSION['oldsubject'] = $subject;
    $_SESSION['oldemail'] = $email;
    $_SESSION['oldmessage'] = $messageBody;
    $_SESSION['error'] = 'Subject cannot be empty';
    header("Location: contact.php#contact-form");
    exit;

}
//if email is empty
elseif($email ==""){

    $_SESSION['oldname'] = $username;
    $_SESSION['oldmobile'] = $mobile;
    $_SESSION['oldsubject'] = $subject;
    $_SESSION['oldemail'] = $email;
    $_SESSION['oldmessage'] = $messageBody;
    $_SESSION['error'] = 'Email address name cannot be empty';
    header("Location: contact.php#contact-form");
    exit;

}
//if message body is empty
elseif($messageBody == ""){

    $_SESSION['oldname'] = $username;
    $_SESSION['oldmobile'] = $mobile;
    $_SESSION['oldsubject'] = $subject;
    $_SESSION['oldemail'] = $email;
    $_SESSION['oldmessage'] = $messageBody;
    $_SESSION['error'] = 'Message cannot be empty';
    header("Location: contact.php#contact-form");
    exit;

}

//Instantiate the Mailgun client.
$client = new \Http\Adapter\Guzzle6\Client();
$mailgun = new \Mailgun\Mailgun('key-8cf5f69a23968958aa763fd2d9aecd17', $client);
$domain = "sandboxf22bb67b6e7d4819aed577c421f6a917.mailgun.org";

$send_subject = $subject;
$send_message =
    "
    Dear Admin,

    You have a new message from $username, the message is :


    $messageBody


    Please callback/send email to him or her with the following user details:

        Name: $username
        Mobile: $mobile
        Email: $email

    This notification is generated by orbellasmashrepairs automatically. Please do not reply.
        ";

//send email to smash repair admin

try{
    $emailResult = $mailgun->sendMessage($domain, array(
        'from'    => 'Smash Repair Notification <admin@orbellasmashrepairs.com.au>',
        'to'      => 'eric@orbella.com.au',
        'subject' => $send_subject,
        'text'    => $send_message
    ));

}
catch(Exception $e){

}


//redirect to contact page

$_SESSION['message'] = "successful";
header("Location: contact.php#contact-form");