<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <form class="forn-signin" method="POST" action="">
    <h2>Registration</h2>
    <input type="text" name="username" class="form-control" placeholder="Username" required>
    <input type="email" name="email" class="form-control" placeholder="Email" required>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <input type="submit" class="btn btn-lg btn-primary btn-block" value="Register">
    </form>
</div>

<?php
require('connect.php');
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($connection, $query);
}
if ($result)
    $smsg = "Регистрация прошла успешно";
    else if ($result)
        $fsmsg = "Ошибка";
if(isset($smsg)){ 
    echo '<div class="alert alert-success" role="alert">'.$smsg.'</div>';
}
else if(isset($fsmsg)){
     echo '<div class="alert alert-danger" role="alert">'.$fsmsg.'</div>';
}
?>
</body>
</html>
