<?php session_start(); ?>
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

function login()
{
    global $db;
    if ($_GET['login'] && $_GET['login'] == 'true') {
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
        

        $Query = $db->prepare("SELECT * FROM users WHERE user_email = ?");
        $Query->execute(array($email));

        if ($Query->rowCount() != 0) {
            $r = $Query->fetch(PDO::FETCH_OBJ);
            $db_password = $r->user_password;
            $id = $r->user_id;
            $email = $r->user_email;

                if (password_verify($password, $db_password)) {

                    $_SESSION['id'] = $id;
                    $_SESSION['email'] = $email;
                    unset($_SESSION['Guest']);

                    echo json_encode([
                        'error' => 'success'
                        ]);
                    $db = null;

                    
                } else {
                    echo json_encode([
                        'error' => 'no_password', 
                        'msg' => 'Please Enter Correct Password!']);
                    $db = null;
                }
        } else {
            echo json_encode([
                'error' => 'no_email', 
                'msg' => 'Please Enter Correct Email!'
                ]);
            $db = null;
        }
    }
}

login();
