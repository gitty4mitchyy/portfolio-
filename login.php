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
    <form class = "w-50 m_auto mt-4 p-3 rounded shadow" action="auth/processlogin.php" method="post">
        <?php
            if (isset($_GET['error'])) {
                echo "<div class='alert alert-danger'>$_GET[error]</div>";
            }
        ?>
        <h2>User Login page</h2>
        <div class="form-group">
            <label for="" class="text-dark">E-mail</label>
            <input name="email" type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="" class="text-dark">Password</label>
            <input name="password" type="text" class="form-control">
        </div>
        <div class="">
            <button class="">Login</button>
        </div>
        
    </form>
    <?php include 'footer.php'; ?>
</body>
</html>