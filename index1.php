<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forever Young</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <header>
        <h1>СПА-Saloon "Forever Young"</h1>
    </header>
    <nav>
        <div class="nav">
            <a href="#">Главная</a>
            <a href="services.php">Услуги</a>
            <a href="promotion.php">Акции</a>
            <a href="contacts.php">Контакты</a>
            <a href="logout.php">Выход</a>
            <br>
            <br>
            <a style="color: black; font-weight: bolder"> Привет, <?php echo $_COOKIE['login'];?>!</a>
            </div>
    </nav>
    <div class="sale">
         <p>Ваша персональная скидка 15%!</p>
         <p>Спешите!!! До конца акции осталось...</p> 
    </div>
    <br>
    <div class="container">
         <iframe  src="timer.php" width="1300px" frameborder="0"></iframe>
    </div>
    <section class="services">
            <article>
                <a href="promotion.php">
                    <h2>Скидки и акции</h2>
                <img src="https://zaym-go.ru/uploads/posts/2021-04/1617965835_skidki-v-den-rozhdenija.png">
                </a>
            </article>
            <article>
                <a href="wraps.html">
                    <h2>Обертывания</h2>
                    </a>
                <img src="https://images.unsplash.com/photo-1595978392716-8766d86ffd51?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM4NnxfaGItZGw0US00VXx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60">
                <p>Процедура обертывания может проводиться в spa салоне "Forever Young" с использованием самых разных средств: это могут быть грязи и водоросли, глины и вулканические минералы, мед, шоколад и прочие сладости</p>
            </article>
            <article>
                <a href="massage.html">
                    <h2>Массаж</h2>
                </a>
                <img src="https://images.unsplash.com/photo-1645005512788-71110dc23393?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM0MHxfaGItZGw0US00VXx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60">
                <p>Этот способ оздоровления и укрепления организма известен с древнейших времен. В spa салоне "Forever Young" вам предложат разнообразные техники массажа, направленные не только на расслабление и релаксацию, но и на борьбу с целлюлитом и лишним весом. Вы сможете испробовать различные процедуры, относящиеся к восточным нормам массажа, которые пользуются особенной популярностью. Кроме того, вам могут посоветовать массаж  тайский или аюрведический массаж</p>
            </article>        
            <article>
                <a href="thalassotherapy.html">
                    <h2>Талассотерапия</h2>
                </a>
                <img src="https://images.unsplash.com/photo-1643578105494-74b743e5c249?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM4MHxfaGItZGw0US00VXx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60">
                <p>Это процедура, в основе которой лежат целебные свойства морской воды. Она действует, главным образом, на психофизическое состояние человека. Целебное воздействие обусловлено микроэлементами, содержащимися в морской воде, планктоне, грязях, солях и водорослях.</p>
            </article>       
            <article>
                <a href="hydrotherapy.html">
                    <h2>Гидротерапия</h2>
                </a>
                <img src="https://images.unsplash.com/photo-1562766761-13e067f6ecb0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHx0b3BpYy1mZWVkfDM2MHxfaGItZGw0US00VXx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60">
                <p>Во время проведения данной процедуры используется вода, часто с добавлением различных средств, соли, эфирных масел. Клиент окунается в ванную, с водой определенной температуры, где с помощью целенаправленных потоков воды осуществляется механический массаж всего тела. В результате такой СПА процедуры для тела улучшается общее самочувствие, восстановление кровообращения и дыхания, тело и мышцы расслабляются. Кроме того, нормализуется обмен веществ, улучшается состояние кожи, повышается ее упругость и эластичность</p>
            </article>
    <footer>
        <div class="nav">
            <a href="#">Главная</a>
            <a href="services.php">Услуги</a>
            <a href="promotion.php">Акции</a>
            <a href="contacts.php">Контакты</a>
        </div>
    </footer>
    <!-- <script src="script.js"></script> -->
</body>
</html>