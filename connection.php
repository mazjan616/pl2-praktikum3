<?php

class Database{

var $host = "localhost";
var $username = "root";
var $password = "";
var $database = "kampus";
var $connection;

function Connect(){
$this->connection=mysqli_connect($this->host, $this->username, $this->password,$this->database);
return $this->connection;

}
}

?>