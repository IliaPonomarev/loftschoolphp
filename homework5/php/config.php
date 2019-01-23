<?php
define("HOST", "localhost");
define("DBNAME", "homework5");
define("DBUSER", "mysql");
define("DBPASSWORD", "mysql");

try {
    $db = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, DBUSER, DBPASSWORD,
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
