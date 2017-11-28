<?php

namespace app\models\questionarios;

use Yii;
use app\models\categoriaquestionarios\CategoriaQuestionarios;

/**
 * This is the model class for table "questionarios".
 *
 * @property integer $id_questionario
 * @property integer $ordem
 * @property string $descricao
 * @property integer $categoria_id
 *
 * @property ItensQuestionarioAluno[] $itensQuestionarioAlunos
 * @property ItensQuestionarioDocente[] $itensQuestionarioDocentes
 * @property ItensQuestionarioPtd[] $itensQuestionarioPtds
 * @property CategoriaQuestionarios $categoria
 */
class Questionarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questionarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ordem', 'descricao', 'categoria_id'], 'required'],
            [['ordem', 'categoria_id'], 'integer'],
            [['descricao'], 'string'],
            [['categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => CategoriaQuestionarios::className(), 'targetAttribute' => ['categoria_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_questionario' => 'Id Questionario',
            'ordem' => 'Ordem',
            'descricao' => 'Descricao',
            'categoria_id' => 'Categoria ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItensQuestionarioAlunos()
    {
        return $this->hasMany(ItensQuestionarioAluno::className(), ['questionario_id' => 'id_questionario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItensQuestionarioDocentes()
    {
        return $this->hasMany(ItensQuestionarioDocente::className(), ['questionario_id' => 'id_questionario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItensQuestionarioPtds()
    {
        return $this->hasMany(ItensQuestionarioPtd::className(), ['questionario_id' => 'id_questionario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(CategoriaQuestionarios::className(), ['id' => 'categoria_id']);
    }
}
