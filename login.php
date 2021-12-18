<?php
    require_once __DIR__ ."/main/database/pdo.php";
    require_once __DIR__ ."/main/functions/functions.php";
    require_once __DIR__ ."/main/functions/token.php";

    $email="";
    $password="";
    
    if(isset($_POST["login_submit"]))
   {
      $email=$_POST["email"];
      $password=$_POST["password"];

      $user=fetchUserByEmail($dbh,$email);
    // var_dump(password_ verify($password,$user["password"]));

        $isNotAuth=false;
        //Сравниваем пароли
        if(!$user || !password_verify($password,$user["password"] ))
        {
            $isNotAuth=true;
        }
        else{
            $token= generateToken();
            updateUserToken($dbh,$user["id"],$token);
            setcookie("token",$token);
            header("Location: main.php");
        }
   }

   
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Вхід</title>
</head>
<body>
    <style>
        main{
            margin-top:200px;
        }
    </style>
    <main class="d-flex justify-content-center align-items-center">
        <div class="main-block">
            <h2 class="mb-2">Авторизація</h2>
            <?php
                if(isset($isNotAuth) && $isNotAuth)
                {
                    echo '<div class="alert alert-danger" role="alert">
                     Введено невірні дані ! </div>';
                }
            ?>
            <form action="" method="post">
                <div class="mb-3">
                     <label for="email-field" class="form-label">Електронна пошта</label>
                     <input type="email" name="email" class="form-control" id="email-field" aria-describedly="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password"  class="form-control" id="password">
                </div>
                <div class="d-flex align-items-center justify-content-between">
                    <button class="btn btn-primary" name="login_submit" type="submit">Увійти</button>
                    <p class="m-0">&nbsp&nbspНемає акаунта?<a href="singUp.php">&nbspСтворіть!</a></p>
                </div>
            </form>
        </div>
    </main>
</body>
</html>