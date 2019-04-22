<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model backend\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<?php $form = ActiveForm::begin([
	'action' => ['index'],
	'method' => 'get',
]); ?>

<?= $form->field($model, 'id') ?>

<?= $form->field($model, 'position') ?>

<div class="form-group">
    <br>
	<?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
	<?= Html::a('Сбросить', Url::canonical(), ['class' => 'btn btn-default']) ?>
</div>

<?php ActiveForm::end(); ?>