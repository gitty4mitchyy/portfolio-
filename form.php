<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include "navbar.php" ?>
    <form class = "w-50 m_auto mt-4 p-3 rounded shadow" action="auth/processForm.php" method="post">
        <?php
            if (isset($_GET['error'])) {
                echo "<div class='alert alert-danger'>$_GET[error]</div>";
            }
        ?>
        <h2>Register User</h2>
        <div class="form-group">
            <label for="" class="text-dark">First Name</label>
            <input name="first_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="text-dark">Last Name</label>
            <input name="last_name" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="text-dark">Date of birth</label>
            <input name="dob" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="text-dark">E-mail</label>
            <input name="email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="text-dark">Password</label>
            <input name="password" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="text-dark">Confrim Password</label>
            <input name="confirm_password" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="text-dark">Phone</label>
            <input name="phone" type="numner" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="text-dark">Address</label>
            <input name="address" type="text" class="form-control">
        </div>
        <div class="">
            <button class="">Submit</button>
        </div>
        
    </form>
    <?php include 'footer.php' ?>
</body>
</html>