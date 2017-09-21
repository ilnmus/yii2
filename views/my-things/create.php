<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MyThings */

$this->title = 'Create My Things';
$this->params['breadcrumbs'][] = ['label' => 'My Things', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-things-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
