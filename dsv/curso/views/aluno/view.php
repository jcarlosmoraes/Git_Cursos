<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = $model->ID_ALUNO;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_ALUNO], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_ALUNO], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
		  <?= Html::a('Gerar PDF', ['gen-pdf', 'id' => $model->ID_ALUNO], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_ALUNO',
            'NOME',
            'DATA_NASCIMENTO',
            'CEP',
            'LOGRADOURO',
            'NUMERO',
            'BAIRRO',
            'CIDADE',
            'ESTADO',
            'DATA_CRIACAO',
            'ID_CURSO',
        ],
    ]) ?>

</div>
