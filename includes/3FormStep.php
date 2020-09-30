<form method="POST" class="main" id="third">

    <p class="center">What is your <b>IBAN</b> ?</p>

    <?php 
    
    generateInput([
        ['name' => 'iban', 'type' => 'text'],
    ],$_SESSION['form'])

    
    ?>



    <?php include 'form/submitButtons.php'; ?>


</form>