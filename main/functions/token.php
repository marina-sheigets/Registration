<?php

    function generateToken(int $length = 10):string
     {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function updateUserToken(object $dbh, int $userId,string $token):void
    {
        $sql="UPDATE `users` SET `token`=:token ";
        $params=["token"=>$token];
        $dbh->prepare($sql)->execute($params);
    }

    function fetchUserByToken(object $dbh,string $token)
    {
       $sql="SELECT * FROM `users` WHERE `token`=:token";
       $params= ["token"=>$token];
       $fetchUser=$dbh->prepare($sql);
       $fetchUser->execute($params);
       return $fetchUser->fetch(PDO::FETCH_ASSOC);
    }

?>