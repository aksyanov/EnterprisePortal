<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/style/general.css">
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
</head>

<body>

    <?php
        if(Yii::app()->user->isGuest){
            echo 'Здравствуй, Гость!';
        }else{
            echo 'Здравствуй, Друг!';
        }
    ?>

    <?php echo $content; ?>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>
</body>
</html>