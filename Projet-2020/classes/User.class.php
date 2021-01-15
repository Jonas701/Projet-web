<?php
require_once "autoload.php";

class User
{
    private $ID = "";
    private $username = "";
    private $password = "";
    private $firstname = "";
    private $lastname = "";
    private $email = "";

    public function __construct($row = null)
    {
        if (is_array($row)) {
            // TODO
            // Create a user from an array.
        }
    }

    public function getID()
    {
        return $ID;
    }

    public function getUsername()
    {
        return $username;
    }

    public function getPassword()
    {
        return $password;
    }

    public function getName()
    {
        return $fisrtname.$lastname;
        // "Firstname Lastname"
    }

    public function getEmail()
    {
        return $email;
    }

    public function insert($dbh)
    {
        // TODO
        // Insert a new record to the database handled by $dbh.
        // $dbh can be an instance of mysqli or of PDO.
    }

    public function update($dbh)
    {
        // TODO
        // Update a record in the database handled by $dbh.
        // $dbh can be an instance of mysqli or of PDO.
    }
}
