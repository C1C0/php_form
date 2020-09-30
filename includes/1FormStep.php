<form method="POST" class="main" id="first">
    <p>Welcome and thank your for filling in this form. It will help us to provide you with the best possible experiecne of our services.</p>

    <p class="center">Please, tell us your <b>name</b> and <b>surrname</b>.</p>

    <?php 
    
        generateInput([
            ['name' => 'name', 'type' => 'text'],
            ['name' => 'surrname', 'type' => 'text']
        ],$_SESSION['form'])
    
    ?>

    <?php include 'form/submitButtons.php'; ?>
    
</form>