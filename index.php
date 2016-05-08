<?php
    if (isset($_POST['phone']) && !empty($_POST['phone']))
    {
        mail('vasilchenkosd@gmail.com', 'BiznesLab | New Lead', 'Phone: ' . $_POST['phone']);

        echo "<script>alert(\"Спасибо за заявку!\\nВ течении 5 минут мы с Вами свяжемся :)\");</script>";
    }
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name='yandex-verification' content='6a30f964755c654f' />
	<title>Авто Стандарт</title>
	<link type="image/x-icon" href="favicon.ico" rel="icon"/>
	<link type="image/ico" href="favicon.ico" rel="shortcut icon"/>
	<link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

    <script src="js/typed.js"></script>
    <link rel="stylesheet" href="js/animate/animate.css">
	<script src="js/magnific/jquery.magnific-popup.js"></script>
    <link rel="stylesheet" href="js/magnific/magnific-popup.css">
	<script type="text/javascript" src="js/validation/jquery.validate.js"></script>
	<script type="text/javascript" src="js/maskedinput/jquery.maskedinput.js"></script>
</head>
<body>
    <div class="b b-fact1">
        <div class="b-inner b-inner-fact1">
            <h1 class="fact1-title">70% покупателей б/у авто остаются недовольны покупкой!</h1>
        </div>
    </div>

    <div class="b b-because">
        <div class="b-inner b-inner-because">
            <h1 class="because-title">Потому что...</h1>
        </div>
    </div>

    <div class="b b-fact2">
        <div class="b-inner b-inner-fact2">
            <h1 class="fact2-title">72% всех авто<br>с пробегом попадали в ДТП</h1>
        </div>
    </div>

    <div class="b b-because">
        <div class="b-inner b-inner-because">
            <h1 class="because-title">И при этом...</h1>
        </div>
    </div>

    <div class="b b-fact3">
        <div class="b-inner b-inner-fact3">
            <h1 class="fact3-title">90% авто продаются по завышенной стоимости, имея скрученный пробег</h1>
        </div>
    </div>

    <div class="b b-because">
        <div class="b-inner b-inner-because">
            <h1 class="because-title">В итоге...</h1>
        </div>
    </div>

    <div class="b b-fact4">
        <div class="b-inner b-inner-fact4">
            <h1 class="fact4-title">Каждый день тысячи людей, по незнанию, покупают «автохлам»</h1>
        </div>
    </div>

    <div class="b b-because">
        <div class="b-inner b-inner-because">
            <h1 class="because-title"><a class="open-popup-link" href="#lead-popup">Узнайте, как выбрать авто скорее >></a></h1>
        </div>
    </div>

    <!-- Lead Popup -->
    <div id="lead-popup" class="white-popup mfp-hide">
        <span class="lead-popup-title">Мы свяжемся с Вами за 5 минут</span>
        <form class="lead-form" method="post" action="">
            <input class="input-text input-phone" type="text" name="phone" placeholder="Введите ваш телефон">
            <input class="button input-button" type="submit" value="Получить бесплатную консультацию!">
        </form>
    </div>
    <!-- Lead Popup -->
</body>
</html>




