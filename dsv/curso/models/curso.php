<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property int $ID_CURSO
 * @property string $NOME
 * @property string $DATA_CRIACAO
 * @property int $ID_PROFESSOR
 */
class curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[//'ID_CURSO',
			'NOME', 'ID_PROFESSOR'], 'required'],
            [['ID_CURSO', 'ID_PROFESSOR'], 'integer'],
            [['DATA_CRIACAO'], 'safe'],
            [['NOME'], 'string', 'max' => 20],
            [['ID_CURSO'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_CURSO' => 'Id Curso',
            'NOME' => 'Nome',
            'DATA_CRIACAO' => 'Data Criacao',
            'ID_PROFESSOR' => 'Id Professor',
        ];
    }
}
