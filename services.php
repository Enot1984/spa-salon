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
            <a href="index1.php">Главная</a>
            <a href="#">Услуги</a>
            <a href="promotion.php">Акции</a>
            <a href="contacts.php">Контакты</a>
            <br>
            <br>
            <a style="color: black; font-weight: bolder"> Привет, <?php echo $_COOKIE['login'];?>!</a>
        </div>
    </nav>
    <br> 
<section class="services">
        <a href="wraps.html">
            <h2>Обертывания</h2>
            </a>
        <a href="massage.html">
            <h2>Массаж</h2>
        </a>
        <a href="thalassotherapy.html">
            <h2>Талассотерапия</h2>
        </a>
        <a href="hydrotherapy.html">
            <h2>Гидротерапия</h2>
        </a> 
    <footer>
        <div class="nav">
            <a href="index1.php">Главная</a>
            <a href="#">Услуги</a>
            <a href="promotion.php">Акции</a>
            <a href="contacts.php">Контакты</a>
        </div>
    </footer>
</body>
</html>