<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "avaliacoes".
 *
 * @property integer $id_avaliacao
 * @property integer $aval_curso
 * @property string $aval_turma
 * @property string $aval_unidadecurricular
 * @property string $aval_unidade
 * @property string $aval_supervisor
 * @property integer $categoria_id
 * @property string $aval_avaliado
 * @property string $aval_status
 * @property string $aval_responsavel
 * @property string $aval_data
 *
 * @property CategoriaQuestionarios $categoria
 */
class Avaliacoes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'avaliacoes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aval_curso', 'aval_turma', 'aval_unidadecurricular', 'aval_unidade', 'aval_supervisor', 'categoria_id', 'aval_status', 'aval_responsavel', 'aval_data'], 'required'],
            [['aval_curso', 'categoria_id'], 'integer'],
            [['aval_avaliado'], 'string'],
            [['aval_data'], 'safe'],
            [['aval_turma', 'aval_unidadecurricular', 'aval_unidade', 'aval_supervisor', 'aval_responsavel'], 'string', 'max' => 255],
            [['aval_status'], 'string', 'max' => 45],
            [['categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoriaQuestionarios::className(), 'targetAttribute' => ['categoria_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_avaliacao' => 'Id Avaliacao',
            'aval_curso' => 'Aval Curso',
            'aval_turma' => 'Aval Turma',
            'aval_unidadecurricular' => 'Aval Unidadecurricular',
            'aval_unidade' => 'Aval Unidade',
            'aval_supervisor' => 'Aval Supervisor',
            'categoria_id' => 'Categoria ID',
            'aval_avaliado' => 'Aval Avaliado',
            'aval_status' => 'Aval Status',
            'aval_responsavel' => 'Aval Responsavel',
            'aval_data' => 'Aval Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(CategoriaQuestionarios::className(), ['id' => 'categoria_id']);
    }
}
