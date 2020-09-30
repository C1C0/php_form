<form method="POST" class="main" id="second">

    <p class="center">Where do you live ?</p>

    <?php

    generateInput([
        ['name' => 'street', 'type' => 'text'],
        ['name' => 'number', 'type' => 'text'],
        ['name' => 'city', 'type' => 'text'],
        ['name' => 'postalCode', 'type' => 'text'],

    ],$_SESSION['form'])

    ?>


    <?php include 'form/submitButtons.php'; ?>


</form>