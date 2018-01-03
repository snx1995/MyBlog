<?php
/**
 * Created by IntelliJ IDEA.
 * User: byq
 * Date: 12/29/17
 * Time: 8:48 PM
 */

class Database{
    var $server = "localhost";
    var $username = "root";
    var $password = "cfmy0714..";
    var $dbname = "blog";
    var $conn;
    var $connect_error;

    function __construct($server=null, $username=null, $password=null, $dbname=null){
        $this->server = ($server==null)?"localhost":$server;
        $this->dbname = ($dbname==null)?"blog":$dbname;
        $this->password = ($password==null)?"cfmy0714..":$password;
        $this->username = ($username==null)?"root":$username;

        $this->conn = new mysqli($this->server,$this->username,$this->password,$this->dbname);
        $this->connect_error = $this->conn->connect_error;
    }

    function query($sql){
        return $this->conn->query($sql);
    }
}

