<?php
    $lng = 'en';
    $lng_list = ['en','th'];
    if(in_array(Yii::$app->language,$lng_list)) {
        $lng = Yii::$app->language;
    }
?>