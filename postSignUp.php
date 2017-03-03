<?php

include('includes/head.php');
include('dbInit.php');

$newUser = new SignUpController();

$view = new TimeClockView();

if (isset($_POST['signupsubmit']))
{
    $newUser->createNewUser();
    $view->postSignUpView();
}


