<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ветеринарный центр Багира</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet"
          type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=1024">
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYZGE2dizgAleeg1wZwhL288WWMkFRXAA">
    </script>
    <script src="../js/script.js" type="text/javascript"></script>
</head>
<body>
<div id="top-nav">
    <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="about.php">О клинике</a></li>
        <li><a href="price.php">Услуги и Цены</a></li>
        <li><a href="articles.php">Статьи</a></li>
        <li><a href="doctors.php">Врачи клиники</a></li>
        <li><a href="contacts.php">Контакты</a></li>
    </ul>
</div>
<section class="doctors">
    <div class="wrap">
        <h2>Врачи клиники</h2>
        <div class="under-header-nav">
            <span class="back"><a href="/">Клиника Багира&emsp;</a></span><span
                    class="this">&#62;&emsp;Врачи клиники</span>
        </div>
        <div class="row">
            <div class="column doctors-item">
                <img src="../img/doctors/" alt="">
                <span>Евграфов Борис Александрович</span>
                <p>
                    Врач-терапевт. Высшее образование: закончил в 2011 г. Национальный университет биоресурсов и
                    природопользования. Профессиональные интересы: физиотерапия, интенсивная терапия. Регулярно посещает
                    международные ветеринарные конференции и мастер-классы.
                </p>
            </div>
            <div class="column doctors-item">
                <img src="../img/doctors/" alt="">
                <span>Демиденко Ирина Федоровна</span>
                <p>
                    Экзотолог. Кандидат ветеринарных наук. Высшее образование: закончила в 2009 г. Национальный университет биоресурсов и
                    природопользования. Профессиональные интересы: орнитология, лечение грызунов и рептилий. Регулярно
                    посещает международные ветеринарные конференции и мастер-классы.
                </p>
            </div>
            <div class="column doctors-item">
                <img src="../img/doctors/" alt="">
                <span>Евграфов Глеб Александрович</span>
                <p>
                    Врач-хирург. Высшее образование: закончил в 2012 г. Национальный университет биоресурсов и
                    природопользования. Профессиональные интересы: травматология, неотложные состояния. Регулярно
                    посещает международные ветеринарные конференции и мастер-классы.
                </p>
            </div>
        </div>
    </div>
</section>
<?php include_once "../templates/footer.php" ?>
</body>
</html>