<?php

$errors = [];

function error_messages(&$errors, $message) {
    array_push($errors, $message);
}

//Verifies input does not contain numbers or symbols
function char_only($str, $message) {
    global $errors;
    if (!preg_match('/^[a-zA-Z ]*$/', $str)) {
        error_messages($errors, $message);
    }
}

function validate_email($email) {
    global $errors;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        error_messages($errors, "Invalid email format");
    }
}

function validate_first_name($name) {
    global $errors;
    $len = strlen($name);
    if ($len < 2 || $len > 30) {
        error_messages($errors, "First name must have at least 2 characters and less than 30");
    }

    char_only($name, "First name must not contain numbers");

}

function validate_last_name($name) {
    global $errors;
    $len = strlen($name);
    if ($len < 2 || $len > 30) {
        error_messages($errors, "Last name must have at least 2 characters and less than 30");
    }
    char_only($name, "Last name must not contain numbers");
}

function enforce_login(){
  if(!$_SESSION['loggedIn']) {
    header("location: http://{$_SERVER['HTTP_HOST']}/login.php");
  }
}
