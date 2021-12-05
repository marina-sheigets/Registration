<?php

    function validateRegister(array $data)
    {
        //Валидация email
      $errors=[];

      if(filter_var($data["email"], FILTER_VALIDATE_EMAIL)==false){
          $errors["email"]=true;
      }

      //Валидация name
      if(empty($data["name"]))
      {
          $errors["name"]=true;
      }

      //Валидация password
      if(empty($data["password"]) || empty($data["password_confirm"]) || ($data["password"]!=$data["password_confirm"]))
      {
          $errors["password"]=true;
      }

      return $errors;
    }

    function storeUser(object $dbh, string $email, string $name,string $password):void
    {
        $sql="INSERT INTO `users` (`email`,`name`,`password`)VALUES (:email,:name,:password)";
        $params= [
            "email"=>$email,
            "name"=>$name,
            "password"=>password_hash($password, PASSWORD_DEFAULT)
        ];
        $dbh->prepare($sql)->execute($params);
    }

    function fetchUserByEmail(object $dbh,string $email)
    {
        $sql="SELECT * FROM `users` WHERE `email`=:email";
        $params=["email"=>$email];
     
        $fetchUser=$dbh->prepare($sql);
        $fetchUser->execute($params);
        return $fetchUser->fetch(PDO::FETCH_ASSOC);     
    }
?>