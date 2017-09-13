<?php

/* @var $this yii\web\View */

$this->title = "Headings";

$this->params['breadcrumbs'] = [
    [
        'label' => 'Post Category',
        'url' => ['post-category/view', 'id' => 10],
    ],
    ['label' => 'Sample Post', 'url' => ['post/edit', 'id' => 1]],
    'Edit',
];

Yii::$app->session->setFlash('hello-world', 'Hello, world!');

$faker = Faker\Factory::create();
?>
<div class="site-index">

    <p><?= $faker->realText(500) ?></p>
    <p><?= $faker->realText(500) ?></p>
    <h2><?= $faker->realText(50) ?></h2>
    <p><?= $faker->realText(1000) ?></p>
    <h3><?= $faker->realText(50) ?></h3>
    <p><?= $faker->realText(1000) ?></p>
    <h4><?= $faker->realText(50) ?></h4>
    <p><?= $faker->realText(1000) ?></p>

</div>
