<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "professor".
 *
 * @property int $ID_PROFESSOR
 * @property string $NOME
 * @property string $DATA_NASCIMENTO
 * @property string $DATA_CRIACAO
 */
class professor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'professor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[//'ID_PROFESSOR', 
			'NOME'], 'required'],
            [['ID_PROFESSOR'], 'integer'],
            [['DATA_NASCIMENTO', 'DATA_CRIACAO'], 'safe'],
            [['NOME'], 'string', 'max' => 50],
            [['ID_PROFESSOR'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_PROFESSOR' => 'Id Professor',
            'NOME' => 'Nome',
            'DATA_NASCIMENTO' => 'Data Nascimento',
            'DATA_CRIACAO' => 'Data Criacao',
        ];
    }
}
