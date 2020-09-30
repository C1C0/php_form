<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //data validation
    //check if all inputs are filled in
    //if so, add to Session
    if (isset($_POST['next']) || isset($_POST['previous'])) {
        include 'validators.php';
    }


    //to next page
    $_SESSION['page'] = changePage($_SESSION['page'], $pages);

    //on final step submit to DB
    if (isset($_POST['next'])) {
        if ($_POST['next'] == 'Submit' && !empty($_SESSION['form'])) {
            connectToDB(
                "INSERT INTO survey(name, surrname, street, number, city, postalCode, iban) VALUES ('{$_SESSION['form']['name']}','{$_SESSION['form']['surrname']}','{$_SESSION['form']['street']}','{$_SESSION['form']['number']}','{$_SESSION['form']['city']}','{$_SESSION['form']['postalCode']}','{$_SESSION['form']['iban']}')"
            );
            session_destroy();
            header("Location: /");
            exit;
        }
    }
}
