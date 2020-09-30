<?php
foreach ($_POST as $postKey => $postValue) {
    if (!empty(trim($postValue))) {
        if ($postKey == 'next' || $postKey == 'previous') continue;
    } else {
        $errors[$postKey] = ['Value can\'t be empty'];
    }
    //TODO: $_SESSION['form'] OR $_SESSION['editData']
    $_SESSION['form'][$postKey] = $postValue;
}

if (isset($_POST['number'])) {
    if (!preg_match("/^\d{2,}(\/)?\d{1,}$/", $_POST['number'])) {
        pushError('number', 'Use at least one number and only "/" for separating numbers');
    }
}

if (isset($_POST['postalCode'])) {
    if (!preg_match("/^\d{3}\s\d{2}$/", $_POST['postalCode'])) {
        pushError('postalCode', 'Use following format: XXX XX');
    }
}
