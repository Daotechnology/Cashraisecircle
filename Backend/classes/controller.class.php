<?php
class Controller extends Model
{
    public function createUser($username, $email, $password, $firstname, $surname, $gender, $country, $number, $sponsor, $ref, $status)
    {
        $insert = "INSERT INTO users(surname,firstname,username,gender,country,phoneNumber,sponsor,email,ref,status,password) VALUES(:surname,:firstname,:username,:gender,:country,:phoneNumber,:sponsor,:email,:ref,:status,:password)";
        $query = $this->conn->prepare($insert);
        $execute = $query->execute(["surname"=>$surname,"firstname"=>$firstname,"username"=>$username,"gender"=>$gender,"country"=>$country,"phoneNumber"=>$number,"sponsor"=>$sponsor,"email"=>$email,"ref"=>$ref,"status"=>$status,"password"=>$password]);
        return $query;
    }
}

$ctr = new Controller();
