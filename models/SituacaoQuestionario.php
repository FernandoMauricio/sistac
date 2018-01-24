<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "situacao_questionario".
 *
 * @property int $id
 * @property string $descricao
 * @property int $status
 *
 * @property QuestionarioAluno[] $questionarioAlunos
 */
class SituacaoQuestionario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'situacao_questionario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['descricao'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'descricao' => 'Descricao',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionarioAlunos()
    {
        return $this->hasMany(QuestionarioAluno::className(), ['situacao_questionario_id' => 'id']);
    }
}
