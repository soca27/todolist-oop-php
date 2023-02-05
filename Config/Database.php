<?php

namespace Config {

  use PDO;

  class Database
  {

    static function getConnection(): \PDO
    {
      $host = "localhost";
      $port = 3306;
      $db = "todolist_php_mysql";
      $username = "root";
      $password = "Rahasia123";

      return new PDO("mysql:host=$host:$port;dbname=$db", $username, $password);
    }
  }
}
