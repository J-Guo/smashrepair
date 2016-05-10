<?php
/**
 * Created by PhpStorm.
 * User: Junjie
 * Date: 10/05/2016
 * Time: 10:41 AM
 * DB Connections
 */

class ClientDBConnection
{

var $servername = "localhost";
var $username = "root";
var $password = "";
var $dbname = "dbsuvbooking";
var $connection;

  public function __construct(){

      // Create connection
      $this->connection = new mysqli($this->servername, $this->username,
          $this->password,$this->dbname);

        // Check connection
      if ($this->connection->connect_error) {
          die("Connection failed: " . $this->connection->connect_error);
      }
      echo "Connected successfully"."<br>";

  }

 /**
  * Save Client into DB
  */
  public function saveClient($username,$mobile){

      date_default_timezone_set("Australia/Sydney");

      $time= date("h:i:sa");
      $date = date("Y/m/d");
      $datetime = $date." ".$time;

      $sql = "INSERT INTO tblrequest (timestamp,name,phone,status,company) ".
             "values ('$datetime','$username','$mobile','booked','smashrepair')";

      echo $sql;

      $result = mysqli_query($this->connection,$sql);

      return $result;
  }


}
