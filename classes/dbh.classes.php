<?php

class Dbh {
    protected function connect() {
        try {
            $username = "root";
            $password = "secret";
            $dbh = new PDO('mysql:host=webanwendung-mysql-1;dbname=oop', $username, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}