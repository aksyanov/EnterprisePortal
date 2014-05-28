<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/style/general.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/style/main.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
</head>

<body>

    <div class="top">
        <div class="topLogo">
            <div class="topLogoInner">
                <a href="http://localhost/entportal/"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png" width="130" height="82" alt=""></a>
            </div>
        </div>

        <div class="topMenu">
            <nav>
                <ul>
                    <a href="#"><li>Главная</li></a>
                    <a href="#"><li>Документы</li></a>
                    <a href="#"><li>Новости</li></a>
                </ul>
            </nav>
        </div>

        <div class="userInfo">
            <?php
                if(Yii::app()->user->isGuest){
                    echo 'Здравствуй, Гость!';
                }else{
                    echo 'Здравствуй, Друг!';
                }
            ?>
        </div>
    </div>

    <div class="mainWrapper">
        <?php echo $content; ?>
    </div>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
</body>
</html>