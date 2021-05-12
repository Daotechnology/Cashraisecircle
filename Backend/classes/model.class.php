<?php
define('host', 'localhost');
define('username', 'root');
define('password1', '123456');
define('db_name', 'cashraisecircle');

class Model
{
    protected $conn;
    function __construct()
    {
        $dsn = 'mysql:host=' . host . ';dbname=' . db_name;
        $this->conn = new PDO($dsn, username, password1);
        $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        if ($this->conn) {
            return $this->conn;
        } else {
            // echo 'Not Connected';
            mysqli_close($this->conn);
        }
    }
}

$model = new Model();
