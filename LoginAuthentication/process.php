<?php

session_start();

//initialize variables
$error = "";

include_once("../conn/pdoconfig.php");

$error = false;

if (isset($_POST["signup"])) {
    //PDO connect to database   
    $con = config::connect();
    //get form register data
    $username = sanitizeString($_POST["username"]);
    $signupEmail = sanitizeString($_POST["signupEmail"]);
    $signupPass = sanitizePassword($_POST["signupPass"]);

    //decision - if any of the signup fields are left blank
    if ($username == "" || $signupEmail == "" || $signupPass == "") {
        return;
    }



    //decision - insert failed or not
    if (insertDetails($con, $username, $signupEmail, $signupPass)) {
        $_SESSION['username'] = $username;
        header("Location: ../Dashboard/dashboard.php");
    } else {
        echo "insert failed";
    }
}



if (isset($_POST["login"])) {
    //PDO connect to database   
    $con = config::connect();
    //get form register data
    $username = sanitizeString($_POST["username"]);
    $signupPass = sanitizePassword($_POST["signupPass"]);

    if ($username == "" || $signupPass == "") {
        return;
    }

    if (checkLogin($con, $username, $signupPass)) {
        $_SESSION['username'] = $username;
        header("Location: ../Dashboard/dashboard.php");
    } else {
        $_SESSION["loginError"] = true;
        header("Location: ../LoginAuthentication/login.php");
    }
}

//Binds mysql params to post variables
function insertDetails($con, $username, $signupEmail, $signupPass)
{
    $query = $con->prepare("INSERT INTO users (username,email,password) VALUES(:username,:email,:password)");

    $query->bindParam(":username", $username);
    $query->bindParam(":email", $signupEmail);
    $query->bindParam(":password", $signupPass);

    //if query is succesful return true
    return $query->execute();
}


function checkLogin($con, $username, $signupPass)
{
    $query = $con->prepare("SELECT * FROM users WHERE username=:username AND password=:password");

    $query->bindParam(":username", $username);
    $query->bindParam(":password", $signupPass);

    $query->execute();

    if ($query->rowCount() == 1) {
        return true;
    } else {
        return false;
    }
}

//helper function to sanitize string
function sanitizeString($string)
{
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = str_replace(" ", "", $string);

    return $string;
}

//helper function to sanitize password
function sanitizePassword($string)
{
    $string = stripslashes($string);
    $string = strip_tags($string);
    $string = hash("ripemd128", $string);

    return $string;
}

