<?php
use yii\bootstrap\Alert;

foreach ( Yii::$app->session->allFlashes as $flash ) {
    if ( is_array($flash) ) {
        if ( isset($flash['body']) ) {
            echo Alert::widget($flash);
        } else {
            echo $this->render('flashes', [
                'flashes' => $flash,
            ]);
        }
    } else {
        echo Alert::widget([
            'body' => $flash,
            'options' => [
                'class' => 'alert-success',
            ],
        ]);
    }
}
