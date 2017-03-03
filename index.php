<?php include('includes/head.php'); ?>
<?php include('dbInit.php'); ?>

<?php
    $view = new TimeClockView();
    $view->indexView();
?>
