
<?php include('../../config/db.php'); ?>
<?php include('../../config/functions.php'); ?>
<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

// get database connection
$database = new Database();
$db = $database->getConnection();



$name = test_input($_POST['name']);
$surname = test_input($_POST['surname']);
$email = test_input($_POST['email']);
$cell = test_input($_POST['cell']);
$date = test_input($_POST['date']);
$time = test_input($_POST['time']);
$pastor = test_input($_POST['pastor']);
$comment = test_input($_POST['comment']);
$userID = test_input($_POST['userID']);

if ((isset($userID) && !empty($userID))) {
  global $db;


  // create sql to insert into database
  $add_booking = "INSERT INTO appointments (
        name,
        surname,
        cell,
        email,
        book_day,
        book_time,
        comment,
        userID,
        pastor,
        status
        ) VALUES (
        :name,
        :surname,
        :cell,
        :email,
        :day,
        :time,
        :comment,
        :userID,
        :pastor,
        :status
        )";

  // use PDO to prepare and sanitize the data
  $statement = $db->prepare($add_booking);

  // Add the data into the database 
  $statement->execute(array(
    ':name' => $name,
    ':surname' => $surname,
    ':cell' => $cell,
    ':email' => $email,
    ':day' => $date,
    ':time' => $time,
    ':comment' => $comment,
    ':userID' => $userID,
    ':pastor' => $pastor,
    ':status' => 'Pending'
  ));

  //Check is one data was created in database the echo result
  if ($statement->rowcount() == 1) {


    echo json_encode([
      'status' => '1',
      'message' => 'profile.php'
    ]);
  }
} else {

  $_SESSION["errorMessage"] =  "Please login or sign up to to order.";


  echo json_encode(['error' => 'login']);
}
?>
