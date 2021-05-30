<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

include_once '../../../../config/Database.php';
include_once '../../../../model/bus_koi_app/ticket_history/Ticket_History_Model.php';

// Instantiate DB & connect
$database = new Database();
$db = $database->connect();

// Instantiate blog post object
$post = new Ticket_History_Model($db);

// Get raw posted data
$data = json_decode(file_get_contents("php://input"));


$user_phn_no = "01739703058";

$arr = $post->read($user_phn_no);

if(!empty($arr)) {
    echo json_encode($arr);
}


