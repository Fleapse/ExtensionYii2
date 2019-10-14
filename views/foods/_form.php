<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model fleapse\lab1\models\Foods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="foods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'type_of_food')->dropDownList(\yii\helpers\ArrayHelper::map(\fleapse\lab1\models\TypeOfFood::find()->all(),id,name)) ?>

    <?= $form->field($model, 'recipe')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date_time')->input("datetime-local") ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
