
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


function check_mail()
{
    global $db;

    if (isset($_POST['check_email'])) {

        $email = test_input($_POST['check_email']);
        $Query = $db->prepare("SELECT user_email FROM users WHERE user_email = ?");
        $Query->execute(array($email));

        if ($Query->rowCount() == 0) {
            echo json_encode(array('error' => 'email_success'));
            $db = null;
        } else {
            echo json_encode(array('error' => 'email_fail', 'message' => 'Sorry this email is already exists'));
            $db = null;
        }
    }
} //close check email method
check_mail();



function singup_submit()
{

    global $db;
    if (isset($_GET['register']) && $_GET['register'] == 'true') {

        $name    = test_input($_POST['name']);
        $surname    = test_input($_POST['surname']);
        $email    = test_input($_POST['email']);
        $gender   = test_input($_POST['gender']);
        $cell  = test_input($_POST['cell']);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        // create sql to insert into database
        $insert_user = "INSERT INTO users (
        user_firstname,
        user_lastname,
        user_cell,
        user_email,
        user_password,
        user_created,
        user_gender
        
        ) VALUES (
        :name,
        :surname,
        :cell,
        :email,
        :password,
        NOW(),
        :gender
        
        )";

        // use PDO to prepare and sanitize the data
        $statement = $db->prepare($insert_user);

        // Add the data into the database 
        $statement->execute(array(
            ':name' => $name,
            ':surname' => $surname,
            ':cell' => $cell,
            ':email' => $email,
            ':password' => $password,
            ':gender' => $gender
        ));
        //Check is one data was created in database the echo result
        if ($statement->rowcount() == 1) {


            $page = "messages.php?m=register";
            echo json_encode([
                'status' => '1', 
                'message' => $page]);

        }
    }
}


singup_submit();

?>