<?php
Yii::setAlias('@common', dirname(__DIR__));
Yii::setAlias('@backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('@frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('@console', dirname(dirname(__DIR__)) . '/console');

Yii::setAlias('@root', dirname(dirname(dirname(__DIR__))));
Yii::setAlias('@uploads', Yii::getAlias('@root') . '/uploads');

require('bootstrap-local.php');

Yii::setAlias('@uploadsUrl', Yii::getAlias('@rootUrl') . '/uploads');
