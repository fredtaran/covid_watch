<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../private/config.php';
include_once '../private/database.php';
include_once '../class/login.php'; 


$database = new Database();
$db = $database->getConnection();

$item = new Login($db);
$item->uname = $_POST['username'];
$password = $_POST['password'];

$result = $item->parseform();

if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $result = 'OK';
    //check if same password
    if($password !== $row['password']){
        http_response_code(301);
        echo json_encode('INVALID PASSWORD');
    }else{
        session_start();
        $_SESSION["is_loggin"] = true;
        $_SESSION["username"] = $item->uname;
        $_SESSION['csrf_token'] = md5(uniqid(mt_rand(), true));
        http_response_code(200);
        echo json_encode("OK");
    }
    
}else {
    http_response_code(301);
    echo json_encode("INVALID USERNAME");
}
?>