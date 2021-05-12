<?php 
//Load in Functions
require('./../functions/register.php');

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $post = json_decode(file_get_contents("php://input"), true);
    $username = $post['username'];
    $firstname = $post['firstname'];
    $surname = $post['surname'];
    $gender = $post['gender'];
    $country = $post['country'];
    $number = $post['phoneNumber'];
    $sponsor = $post['sponsor'];
    $email = $post['email'];
    $ref = $post['ref'];
    $status= false;
    $password = $post['password'];

    //Check If User Exist
    $user_exist = checkIfUserExisted($email);
    if ( $user_exist > 0 ) {
        echo json_encode(['status'=>'Email Already Exist','code'=>400]);
        return;
    }
    
    //Create User
    $newUser = addUserToDatabase($username,$email,$password,$firstname,$surname,$gender,$country,$number,$sponsor,$ref,$status);
    echo json_encode(['status'=>'User Created SuccessFully','code'=>200]);
}



?>