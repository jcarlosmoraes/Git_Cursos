<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aluno-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_ALUNO')->textInput() ?>

    <?= $form->field($model, 'NOME')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_NASCIMENTO')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '99-99-9999',
]) ?>
    <?= $form->field($model, 'CEP')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '99999-999',
]) ?>

    <?= $form->field($model, 'LOGRADOURO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NUMERO')->textInput() ?>

    <?= $form->field($model, 'BAIRRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'CIDADE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESTADO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'DATA_CRIACAO')->widget(\yii\widgets\MaskedInput::className(), [
    'mask' => '99-99-9999',
]) ?>

    <?= $form->field($model, 'ID_CURSO')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Salvar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
