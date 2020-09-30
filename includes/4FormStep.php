<form method="POST" class="main" id="fourth">

    <p class="center">Let's summarize what we'll get about you: </p>

    <?php

    generateInput([
        ['name' => 'name', 'type' => 'text'],
        ['name' => 'surrname', 'type' => 'text'],
        ['name' => 'street', 'type' => 'text'],
        ['name' => 'number', 'type' => 'text'],
        ['name' => 'city', 'type' => 'text'],
        ['name' => 'postalCode', 'type' => 'text'],
        ['name' => 'iban', 'type' => 'text']
    ],$_SESSION['form'], 'disabled')

    ?>

    <?php include 'form/submitButtons.php'; ?>

</form>