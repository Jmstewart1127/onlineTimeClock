<?php include('dbInit.php'); ?>

<?php

    if (isset($_POST['login']))
    {
        $login = new LoginController();
        $login->login($_POST['username']);
        $login->is_signed_in();
    }
    $view = new TimeClockView();
    $view->loggedInView();
?>

