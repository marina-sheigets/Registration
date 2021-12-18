<?php
    require_once __DIR__ ."/main/database/pdo.php";
    require_once __DIR__ ."/main/functions/token.php";
    
    if(isset($_POST["logout_submit"]))
    {
        setcookie("token",NULL);
        unset($_COOKIE);
        header("Location: login.php");
    }

    if(isset($_COOKIE["token"]))
    {
        $user=fetchUserByToken($dbh, $_COOKIE["token"]);
        if(!$user)
        {
            header("Location: login.php");
        }
    }
    else{
        header("Location: login.php");    
    }

    
?>




<!DOCTYPE html>
<html lang="rus">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="main/styleMain.css">
    <title>ВПК України</title>
</head>
<body>
    <div class="menu">
        <div class="user_info">
            <h2>Вітаємо <span class="badge bg-secondary"><?= $user["name"] ?></span></h2>
            <form  method="post">
                <button class="btn btn-danger" type="submit" name="logout_submit">Вийти з профілю</button>
            </form>
        </div>
        <div class="title">ВПК України.Оборонно-промисловий комплекс.</div>
        
    </div>
    <div class="main">

        <form class="search-form" action="" method="GET" autocomplete="on">
                <label hidden for="site-search">Фильтр</label>
                <input placeholder="Введіть назву..." type="search" name="site-search" id="site-search" class="site-search">
        </form>

        <div class="item1">
            <img src="https://images3.alphacoders.com/357/thumbbig-35705.webp" alt="">
            <div>
                <a href="#" >ДП УД НДІ Конструкційний матеріалів «Прометей»</a>
                <h4>Область/Населений пункт: Донецька область / Маріуполь</h4>
                <p>Дослідження і розробки в галузі природничих та технічних наук</p>
            </div>
        </div>
        <div class="item2">
            <div>
                <a href="http://45emp.com.ua/ua/main/" target="_blank">ДП «45 експериментальний механічний завод»</a>
                <h4>Область/Населений пункт: Вінницька область / Вінниця</h4>
                <p>Завод є провідним підприємством з виробництва технічних засобів транспортування, заправки, перекачування і зберігання нафтопродуктів.</p>
            </div>
            <img src="https://images4.alphacoders.com/383/thumbbig-38346.webp" alt="">
        </div>

        <div class="item1">
            <img src="https://images.alphacoders.com/133/thumbbig-13373.webp" alt="">
            <div>
                <a href="www.zhbtz.com" target="_blank">ДП «Житомирський бронетанковий завод»</a>
                <h4>Область/Населений пункт: Житомирська область / смт. Новогуйвинське</h4>
                <p>Завод спеціалізується на капітальному ремонті та модернізації бронетанкового озброєння та техніки 
                    (далі —БТОТ): БМП-1 та БМП-1М, БМП-2 та БМП-2К, БМД-1, БМД-2, ГМ-575, ГМ-568, ГМ-578, БРЕМ-2, 
                    БТР-50ПК, БТР-Д, БРДМ-2. Підприємство також виконує капітальний ремонт окремих агрегатів та
                    вузлів зазначеної техніки (зокрема, дизельних двигунів УТД-20, 5Д20-240, В-2 та В-6, В2-500, 
                    В-55, ЯМЗ-236/238/240), виготовленні запасних частин до БТОТ, нестандартного та паркового 
                    обладнання для військ і ремонтних заводів.</p>
            </div>
        </div>

        <div class="item2">
            <div>
                <a href="#" >ДП «Запорізький автомобільний ремонтний завод»</a>
                <h4>Область/Населений пункт: Запорізька область / Запоріжжя</h4>
                <p>Авторемонт вантажних авто, розширення і модернізація причепів і напівпричепів, ремонт тентів.</p>
             </div>
            <img src="https://images.alphacoders.com/574/thumbbig-574282.webp" alt="">
        </div>

        <div class="item1">
            <img src="https://images2.alphacoders.com/460/thumbbig-46072.webp" alt="">
            <div>
                <a href="dpkarpaty.com.ua" target="_blank">ДП ВО «Карпати»</a>
                <h4>Область/Населений пункт: Івано-Франківська область / Івано-Франківськ</h4>
                <p>Виробництво автоматизованих систем управління комплексами ППО. На даний час підприємство спеціалізується 
                    на випуску електрообладнання для легкових автомобілів</p>
                </div>
             </div>

        <div class="item2">
            <div>
                <a href="www.kba.kiev.ua" target="_blank">ДП КБ «Артилерійське озброєння»</a>
                <h4>Область/Населений пункт: Київська область / Київ</h4>
                <p>Дослідницькі, проектно-конструкторські, технологічні
                    роботи, спрямовані на створення сучасних зразків
                    артилерійського та стрілецького озброєння, боєприпасів, а також виробництво зброї та боєприпасів.</p>
            </div>
           <img src="https://images.alphacoders.com/249/thumbbig-24931.webp" alt="">
        </div>

        <div class="item1">
            <img src="https://images3.alphacoders.com/296/thumbbig-29689.webp" alt="">
            <div>
                <a href="tank.lviv.ua"target="_blank">ДП «Львівський бронетанковий завод»</a>
                <h4>Область/Населений пункт: Львівська область / Львів</h4>
                <p>Дослідницькі, проектно-конструкторські, технологічні
                    роботи, спрямовані на створення сучасних зразків
                    артилерійського та стрілецького озброєння, боєприпасів, а також виробництво зброї та боєприпасів.</p>
            </div>
        </div>

        <div class="item2">
            <div>
                <a href="www.autokraz.com.ua" target="_blank">Кременчуцький автомобільний завод</a>
                <h4>Область/Населений пункт:Полтавська область / Кременчук</h4>
                <p>Один з найбільших в Європі виробників великовантажних
                    автомобілів військового та цивільного призначення.</p>
            </div>
            <img src="https://images.alphacoders.com/133/thumbbig-13373.webp" alt="">
        </div>

        <div class="item1">
            <img src="https://images4.alphacoders.com/884/thumbbig-88488.webp" alt="">
            <div>
                <a href="#">ДП «Рівненський автомобільний ремонтний завод»</a>
                <h4>Область/Населений пункт:Рівненська область / Рівне</h4>
                <p>Капітальний ремонт двигунів та агрегатів сімейства ЗІЛ, ГАЗ,
                    УАЗ. Встановлення дизельного двигуна „Mercedes“ (OM366 I,
                    OM366 A, OM366 LA) на автомобіль ЗІЛ-131. Переобладнання
                    ЗІЛ-131 на пожежний ЗІЛ-131. Виробництво товарів народного 
                    споживання</p>
             </div>
        </div>
    </div>
    <div class="footer">
        <div class="comment">
            <p>Коментарії</p>
            <textarea rows="10" cols="45" name="text" placeholder="Введіть коментарій..."></textarea>
            <br>
            <input type="submit" value="Додати коментарій">
        </div>
    </div>
    <script src="main/patterns/singleton.js"></script>
    <script src="main/patterns/simplefactory.js"></script>
    <script src="main/patterns/constructor.js"></script>
    <script src="main/patterns/decorator.js"></script>
    <script src="main/patterns/facade.js"></script>
    <script src="main/patterns/mediator.js"></script>
    <script src="main/patterns/observer.js"></script>

</body>
</html>