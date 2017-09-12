<?php

use yii\data\ArrayDataProvider;
use yii\grid\GridView;

$provider = new ArrayDataProvider([
    'allModels' => [
        [
            'id' => 123,
            'name' => 'name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name name ',
        ]
    ],
//    'sort' => [
//        'attributes' => ['id', 'username', 'email'],
//    ],
    'pagination' => [
        'pageSize' => 10,
    ],
]);

?>
<?= GridView::widget([
    'dataProvider' => $provider,
    'columns' => [
        'id',
        'name',
        [ 'class' => 'yii\grid\ActionColumn' ],
    ],
]) ?>