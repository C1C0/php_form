<?php include './includes/head.php'; ?>

<body>
    <?php
    include './includes/header.php';
    include './includes/userInputValidation.php';
    include $pages[$_SESSION['page']];
    ?>
</body>

</html>