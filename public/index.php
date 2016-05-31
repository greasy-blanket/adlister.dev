<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <?php require '../views/partials/head.php'; ?>
</head>
<body>
    <?php require '../views/partials/navbar.php'; ?>
    <div class="container">

        <?php require $main_view; ?>

        <?php require '../views/partials/common_js.php'; ?>
    </div>
</body>
</html>
