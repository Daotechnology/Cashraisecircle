<?php
include_once '../classes/model.class.php';
include_once '../classes/view.class.php';
include_once '../classes/controller.class.php';


function checkIfUserExisted($email)
{
  $db = new Model();
  $view = new View();
  $exist = $view->check_if_user_exist($email);
  $count = $exist->rowCount();
  return $count;
}

function addUserToDatabase($username, $email, $password, $firstname, $surname, $gender, $country, $number, $sponsor, $ref, $status)
{
  $db = new Model();
  $ctr = new Controller();
  $create_user = $ctr->createUser($username, $email, $password, $firstname, $surname, $gender, $country, $number, $sponsor, $ref, $status);
}

//     function callAPI($method, $url, $data) {
//       $curl = curl_init();
//       switch ($method){
//           case "POST":
//             curl_setopt($curl, CURLOPT_POST, 1);
//             if ($data)
//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
//             break;
//           case "PUT":
//             curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
//             if ($data)
//                 curl_setopt($curl, CURLOPT_POSTFIELDS, $data);			 					
//             break;
//           default:
//             if ($data)
//                 $url = sprintf("%s?%s", $url, http_build_query($data));
//       }
//       // OPTIONS:
//       curl_setopt($curl, CURLOPT_URL, $url);
//       curl_setopt($curl, CURLOPT_HTTPHEADER, array(
//           'APIKEY: 111111111111111111111',
//           'Content-Type: application/json',
//       ));
//       curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//       curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//       // EXECUTE:
//       $result = curl_exec($curl);
//       if(!$result){die("Connection Failure");}
//       curl_close($curl);
//       return $result;
// }
