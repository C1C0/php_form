<?php include './includes/head.php'; ?>

<body>
    <header>
        <h1 class="no-margin">Your <span class="diverse big">FUTURE</span> bank</h1>
    </header>


    <?php

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION['page'] = changePage($_SESSION['page'], $pages);
        }

        include $pages[$_SESSION['page']];
    ?>
</body>

</html>