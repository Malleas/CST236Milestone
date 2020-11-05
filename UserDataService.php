<?php
require_once "Database.php";
session_start();

class UserDataService
{


    function testDB()
    {
        $db = new Database();

        echo "Testing the DB data<br>";
        print_r($db);
    }

    function getAllUsers()
    {
        $db = new Database();

        echo "Getting all users<br>";
        $query = "Select * From Users";
        $conn = $db->getConnection();

        $result = $conn->query($query);

        if (!$result) {
            echo "Issue with Sql Statement, pease check<br>";
            exit;
        }

        if ($result->num_rows == 0) {
            return null;
        } else {
            echo "I found " . $result->num_rows . " results<br>";
        }
    }

    function getUser($username, $password)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $query = "SELECT * FROM Users WHERE Username = '$username' && Password = '$password'";
        $results = $conn->query($query);

        if ($results->num_rows == 1) {
            return true;
        } else {
            return false;
        }
        $conn->close();
    }

    public function registerUser($firstName, $lastName, $username, $password)
    {
        $db = new Database();
        $conn = $db->getConnection();
        $query = "INSERT INTO Users (FirstName, LastName, Username, Password) 
        VALUES ('$firstName','$lastName','$username','$password')";

        if ($conn->query($query)) {
            return true;
        } else {
            return fasle;
        }
    }
}