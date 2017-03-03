<?php include('includes/head.php'); ?>
<?php include('dbInit.php'); ?>

<?php
    $signUpView = new TimeClockView();
    $signUpView->signUpFormView();
?>