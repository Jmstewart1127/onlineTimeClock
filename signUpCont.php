<?php

include('includes/head.php');
include('classes/dbInit.php');

$newUser = new User();

if (isset($_POST['signupsubmit']))
{
    $newUser->username = $_POST['username'];
    $newUser->password = $_POST['password'];
    $newUser->create();

    echo "done";
}
?>

<body>

<!-- Navigation -->
<?php include('includes/navbar.php'); ?>

<!-- Page Content -->
<?php include('includes/pageContent.php'); ?>

<!-- jQuery Version 1.11.1 -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
