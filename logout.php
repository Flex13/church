
<?php include('includes/header.php');  ?>

<?php
unset($_SESSION['Guest']);
unset($_SESSION['id']);
unset($_SESSION['email']);


if (isset($_POST['logout'])) {
    unset($_SESSION['Guest']);
    unset($_SESSION['id']);
    unset($_SESSION['email']);

    session_destroy();
    ob_get_contents();  //gets the contents of the output buffer 
    ob_end_flush(); // Send the output and turn off output buffering
    exit();
}

session_destroy();
echo "<script>window.open('registration.php?m=login','_self')</script>";
exit();

?>





