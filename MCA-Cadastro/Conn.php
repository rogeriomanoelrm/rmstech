<?php

abstract class Conn
{
    public string $db = "mysql";
    public string $host = "localhost";
    public string $user = "user";
    public string $pass = "rsmtech*2024";
    public string $dbname = "teste";
    public int $port = 3306;
    public object $connect;

    public function connectDb()
    {
        try{
            
            
            $this->connect = new PDO($this->db . ':host=' . $this->host . ';dbname='. $this->dbname, $this->user, $this->pass);
            
            return $this->connect;
        }catch (Exception $err){
           
        }
    }
}