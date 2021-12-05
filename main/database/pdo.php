<?php
try{
        $dbh=new PDO('mysql:host=localhost; dbname=lab7login',"root","234565Aa");
    } catch (\Exception $exception){
        echo "Помилка при підключенні до БД.<br>";
        echo $exception->getMessage();
        die();
    }

?>