<?php
class View extends Model
{
    public function check_if_user_exist($email)
    {
        $is_exist = "SELECT * FROM users WHERE email=:email";
        $query = $this->conn->prepare($is_exist);
        $execute = $query->execute(['email' => $email]);
        return $query;
    }

    public function fetch_one($query) 
    {
        $fetch = $query->fetch(PDO::FETCH_OBJ);
        return $fetch;
    }
}

$view = new View();
