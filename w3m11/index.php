<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <from class="form-signin" method="POST">
            <h2>Registration</h2>
            <?php
                if(isset($smsg)){ echo '<div class="alert alert-success" role="alert">'.$smsg.'</div>';}
                if(isset($fsmsg)){ echo '<div class="alert alert-danger" role="alert">'.$fsmsg.'</div>';}
            ?>
            <input type="text" name="username" class="form-control" placeholder="Username" required>
            <input type="email" name="email" class="form-control" placeholder="Email" required>
            <input type="password" name="password" class="form-control" placeholder="Password" required>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </from>
    </div>

<?php
require('connect.php');

if (isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email' '$password')";
    $result = mysqli_query($connection, $query);

    if($result)
    {
    $smsg = "Регистрация прошла успешно";
    }
    else 
    {
    $fsmsg = "Ошибка";
    }
}
?>
</body>
</html>