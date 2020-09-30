<?php include '../includes/head.php';
$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include '../includes/validators.php';

    if ($_POST['submit'] == 'Delete') {
        connectToDB("DELETE FROM survey WHERE id='$id'");
        header('Location: /admin');
        exit;
    }

    if (empty($errors)) {
        if ($_POST['submit'] == 'Edit') {
            connectToDB(
                "UPDATE survey SET `name`='{$_POST['name']}',surrname='{$_POST['surrname']}',street='{$_POST['street']}',`number`='{$_POST['number']}',city='{$_POST['city']}',postalCode='{$_POST['postalCode']}',iban='{$_POST['iban']}' WHERE id='$id'"
            );
        }
        header('Location: /admin');
        exit;
    }
}

?>

<body>
    <?php include '../includes/header.php'; ?>
    <form method="POST" class="main edit">
        <?php
        $user = connectToDB("SELECT * FROM survey WHERE id='$id'", 'SELECT');

        generateInput([
            ['name' => 'name', 'type' => 'text'],
            ['name' => 'surrname', 'type' => 'text'],
            ['name' => 'street', 'type' => 'text'],
            ['name' => 'number', 'type' => 'text'],
            ['name' => 'city', 'type' => 'text'],
            ['name' => 'postalCode', 'type' => 'text'],
            ['name' => 'iban', 'type' => 'text']
        ], $user[0]);
        ?>


        <div class="split">
            <input type="submit" name="submit" value="Edit" tabindex="1">
            <input type="submit" name="submit" value="Delete" tabindex="2">
        </div>

    </form>
</body>