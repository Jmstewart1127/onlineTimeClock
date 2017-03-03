<?php include('dbInit.php'); ?>

<?php
    $logout = new LoginController();
    $logout->logout();
    $view = new TimeClockView();
    $view->indexView();
?>
