<?php include('../config/db.php'); ?>
<?php include('../config/functions.php'); ?>
<?php

// get database connection
$database = new Database();
$db = $database->getConnection();


$userID = test_input($_POST['userID']);


$sqlQuery = "SELECT * FROM users WHERE  user_id = :id";
$statement = $db->prepare($sqlQuery);
$statement->execute(array(':id' => $userID));


while ($rs = $statement->fetch()) {
    $id = $rs['user_id'];
    $name = $rs['user_firstname'];
    $surname = $rs['user_lastname'];
    $email = $rs['user_email'];
    $cell = $rs['user_cell'];
    $gender = $rs['user_gender'];
    $street = $rs['user_street'];
}


?>