<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = $model->NOME;

\yii\web\YiiAsset::register($this);
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    
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
