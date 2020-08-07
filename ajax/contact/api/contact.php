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


function contact_submit()
{

    global $db;
    if (isset($_GET['contact']) && $_GET['contact'] == 'true') {

        $name     = test_input($_POST['name']);
        $surname     = test_input($_POST['surname']);
        $email     = test_input($_POST['email']);
        $message    = test_input($_POST['message']);
        $cell    = test_input($_POST['cell']);
        $date   = date("Y-m-d h:i:sa");



        // create sql to insert into database
        $insert_contact = "INSERT INTO contact (
            name,
            surname,
            email,
            message,
            created,
            cell
            ) VALUES (
            :name,
            :surname,
            :email,
            :message,
            NOW(),
            :cell
            )";

        // use PDO to prepare and sanitize the data
        $statement = $db->prepare($insert_contact);

        // Add the data into the database 
        $statement->execute(array(
            ':name' => $name, 
            ':surname' => $surname, 
            ':email' => $email,
            ':message' => $message, 
            ':cell' => $cell
        ));

        //Check is one data was created in database the echo result
        if ($statement->rowcount() == 1) {

            $page = "message.php?m=contact";
            echo json_encode([
                'status' => '1', 
                'message' => $page]);
            

            
        }
    }
}


contact_submit();

?>