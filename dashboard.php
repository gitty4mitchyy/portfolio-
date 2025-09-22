<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "navbar.php" ?>

    <h1>Welcome to your dashboard</h1>
    <?php
    session_start();
    $saved_regdetails = $_SESSION['stored_regdetails'];
    print_r("$saved_regdetails[0] $saved_regdetails[1]");

    ?>

    <?php include 'footer.php'; ?>
</body>
</html>