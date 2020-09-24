<!DOCTYPE html>
<html lang="en">

<?php

include 'helpers.php';

session_start();

if (!isset($_SESSION['page']))  $_SESSION['page'] = 0;

$pages = [
    'includes/1FormStep.php',
    'includes/2FormStep.php',
    'includes/3FormStep.php',
    'includes/4FormStep.php'
]

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo auto_version('/assets/style/style.css'); ?>" type="text/css">

    <title>Basic Form</title>
</head>