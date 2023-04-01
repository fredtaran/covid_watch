<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
session_start();

include_once '../private/config.php';
include_once '../private/database.php';
include_once '../class/patient.php';

$database = new Database();
$db = $database->getConnection();
$item = new Patient($db);

$item->action = $_POST['action'];
if(in_array($item->action,array('edit','delete'))){
    $item->pid = filter_input(INPUT_POST, "pid", FILTER_SANITIZE_NUMBER_INT);
}
if(in_array($item->action,array('add','edit'))){
    $item->p_name       = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $item->p_age        = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $item->p_num        = filter_input(INPUT_POST, "contact_no", FILTER_SANITIZE_NUMBER_INT);
    $item->p_temp       = filter_input(INPUT_POST, "body_temp", FILTER_SANITIZE_STRING);
    $item->diagnose     = filter_input(INPUT_POST, "diagnose", FILTER_SANITIZE_NUMBER_INT);
    $item->encounter    = filter_input(INPUT_POST, "encounter", FILTER_SANITIZE_NUMBER_INT);
    $item->vacinated    = filter_input(INPUT_POST, "vacinated", FILTER_SANITIZE_NUMBER_INT);
    $item->nationality  = filter_input(INPUT_POST, "nationality", FILTER_SANITIZE_STRING);
    $item->p_gender     = filter_input(INPUT_POST, "gender", FILTER_SANITIZE_NUMBER_INT);
}
// Check if the CSRF Token is correct
$token = filter_input(INPUT_POST, "csrf_token", FILTER_SANITIZE_STRING);

if(!$token || $token !== $_SESSION['csrf_token']) {
    http_response_code(419);
    echo json_encode("CSRF Verification failed.");
    exit;
}
if(in_array($item->action,array('add','edit','delete'))){
    $result = false;
    $msg = null;
    switch ($item->action) {
        case 'add':
            $result = $item->save_patient_log();
            $msg = "Log saved successfully";
            break;
        
        case 'edit':
            $result = $item->save_patient_log();
            $msg = "Log updated successfully";
            break;

        case 'delete':
            $result = $item->delete();
            $msg = "Log deleted successfully";
            break;
    }
    if($result) {
        http_response_code(200);
        echo json_encode($msg);
    } else {
        http_response_code(500);
        echo json_encode("An error has been encountered.");
    }
}else{
    http_response_code(401);
    echo json_encode("Invalid action.");
}
