<?php
session_start();
include __DIR__ . "/views/layout/head.php"
    ?>

<body>

    <p>
        <?php echo $_SESSION["password"] ?>
    </p>

</body>

</html>