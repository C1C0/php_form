<!DOCTYPE html>
<html lang="en">

<?php

include 'helpers.php';

session_start();

//pages counter
if (!isset($_SESSION['page']))  $_SESSION['page'] = 0;
if (!isset($_SESSION['form'])) $_SESSION['form'] = [];

$errors = [];

$pages = [
    'includes/1FormStep.php',
    'includes/2FormStep.php',
    'includes/3FormStep.php',
    'includes/4FormStep.php'
];

//database config
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "bankForm";

$conn = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo auto_version('/assets/style/style.css'); ?>" type="text/css">

    <title>Basic Form</title>
</head>