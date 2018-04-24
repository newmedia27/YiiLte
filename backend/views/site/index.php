<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

   <?php
  echo 'HELLO '. Yii::$app->user->identity->username;


   ?>
</div>
