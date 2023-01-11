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
            <a href="index1.php">На главную</a>
            <div class="nav">
                <p style="color: black; font-weight: bolder; font-family: 'Courier New', Courier, monospace;">Привет, <?php echo $_COOKIE['login'];?>!</p>
            </div>
    <main class="services">
        <div class="promotion">
            <h2>"Счастливый именинник"</h2>
            <p>В день рождения - скидка 5%!!!</p>
            <form method="post">
                <input type="date" name="hbdate" min="2023-01-11" max="2024-01-11"></input>
                <label>*Для получения скидки введите Ваш ближайший день рождения</label>
                <br>
                <br>
                <button type="submit">Отправить</button>
                <br>
                <br>
                <?php  
                     $today = new \DateTime();
                     $end_date = new \DateTime($_POST['hbdate']);
                     $days = $today->diff($end_date)->format('%a');
                     if($end_date > $today) {
                     echo "Дней до Вашего Праздника: $days !";
                    } else {
                         echo "Поздравляем, у Вас сегодня День Рождения!"; 
                    }
                    ?>      
            </form>
            <hr>
            <h2>"Когда мои друзья со мной!"</h2>
            <p>Приведи друга - получи подарок!</p>
            <hr>
            <h2>"Полный релакс"</h2>
            <p>Три процедуры по цене двух!</p>
        </div>
    </main>
</body>
</html>