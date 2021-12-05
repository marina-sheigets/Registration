<?php

    require_once __DIR__ ."/main/database/pdo.php";
    require_once __DIR__ ."/main/functions/functions.php";

    //Коли натиснули кнопку 'Створити', отримуємо переменные
   if(isset($_POST["register_submit"]))
   {
      $email=$_POST["email"];
      $name=$_POST["name"];
      $password=$_POST["password"];
      $passwordConfirm=$_POST["password_confirm"];

      $errors=validateRegister($_POST);
      //якщо немає ошибок
     
      if(empty($errors))
      {
        storeUser($dbh,$email,$name,$password);
        header("Location: login.php");
      }
   }



?>

<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Авторизація</title>

</head>
<body>
    <style>
        main{
            margin-top:100px;
        }
    </style>
    <main class="d-flex justify-content-center align-items-center">
        <div class="main-block">
            <h2 class="mb-2">Створити аккаунт</h2>
            <form action="" method="post">
                <div class="mb-3">
                     <label for="email-field" class="form-label">Електронна пошта</label>
                     <input 
                     type="email" name="email"
                     value="<?= $email ?? "" ?>"
                      class="form-control 
                      <?=
                         isset($errors["email"]) ? "is-invalid":""
                      ?>"
                     id="email-field">
                </div>
                <div class="mb-3">
                     <label for="name" class="form-label">Ім'я</label>
                     <input type="text"
                            name="name"
                            value="<?= $name ?? "" ?>"
                            class="form-control  <?=
                                isset($errors["name"]) ? "is-invalid":""
                            ?>"
                            id="name"
                     >
                </div>
                <div class="mb-3">
                     <label for="password" class="form-label">Пароль</label>
                     <input type="password" 
                            name="password" 
                            class="form-control  <?=
                                isset($errors["password"]) ? "is-invalid":""
                            ?>"
                            id="password">
                </div>
                <div class="mb-3">
                     <label for="passwordConfirm" class="form-label">Підтвердження пароля</label>
                     <input type="password" name="password_confirm" class="form-control" id="passwordConfirm" aria-describedly="info">
                     <div id="passwordHelp" class="form-text">Це потрібно, щоб ви не помилились.</div>
                </div>
                <div class="d-flex align-items-center justify-content-between"></div>
                    <button type="submit" name="register_submit" class="btn btn-secondary">Створити</button>
                    <p class="m-0">У мене вже <a href="login.php">є аккаунт</a></p>
                </div>
        
            </form>
        </div>
    </main>    
</body>
</html>