<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property int $ID_ALUNO
 * @property string $NOME
 * @property string $DATA_NASCIMENTO
 * @property string $CEP
 * @property string $LOGRADOURO
 * @property int $NUMERO
 * @property string $BAIRRO
 * @property string $CIDADE
 * @property string $ESTADO
 * @property string $DATA_CRIACAO
 * @property int $ID_CURSO
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[//'ID_ALUNO', 
			'NOME', 'CEP', 'ID_CURSO'], 'required'],
            [['ID_ALUNO', 'NUMERO', 'ID_CURSO'], 'integer'],
            [['DATA_NASCIMENTO', 'DATA_CRIACAO'], 'safe'],
            [['NOME'], 'string', 'max' => 40],
            [['CEP'], 'string', 'max' => 9],
            [['LOGRADOURO'], 'string', 'max' => 30],
            [['BAIRRO', 'CIDADE', 'ESTADO'], 'string', 'max' => 15],
            [['ID_ALUNO'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID_ALUNO' => 'Identificador Aluno',
            'NOME' => 'Nome',
            'DATA_NASCIMENTO' => 'Data Nascimento',
            'CEP' => 'Cep',
            'LOGRADOURO' => 'Logradouro',
            'NUMERO' => 'Numero',
            'BAIRRO' => 'Bairro',
            'CIDADE' => 'Cidade',
            'ESTADO' => 'Estado',
            'DATA_CRIACAO' => 'Data Criacao',
            'ID_CURSO' => 'Idendentificador Curso',
        ];
    }
}
