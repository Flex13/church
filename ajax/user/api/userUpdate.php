<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include('../../config/db.php');
include('../../config/functions.php');

// get database connection
$database = new Database();
$db = $database->getConnection();


$email    = test_input($_POST['email']);
$name   = test_input($_POST['name']);
$surname   = test_input($_POST['surname']);
$cell     = test_input($_POST['cell']);
$userID    = test_input($_POST['userID']);
$street   = test_input($_POST['address']);

if ((isset($userID) && !empty($userID))) {
    global $db;
    // create sql to insert into database
    $update_customer = "UPDATE users SET 
        user_firstname = :firstname,
        user_lastname = :lastname,
        user_cell = :cell,
        user_email = :email,
        user_street = :street
        WHERE user_id =:userID ";

    // use PDO to prepare and sanitize the data
    $statement = $db->prepare($update_customer);

    // Add the data into the database 
    $statement->execute(array(
        ':email' => $email,
        ':firstname' => $name,
        ':lastname' => $surname,
        ':cell' => $cell,
        ':street' => $street,
        ':userID' => $userID
    ));
    //Check is one data was created in database the echo result

    if ($statement->rowcount() == 1) {
        echo json_encode([
            'status' => '1', 
            'message' => 'profile.php'
            ]);
    }
}
