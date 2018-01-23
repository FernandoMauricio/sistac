<?php

namespace app\models\itensquestaluno;

use Yii;

/**
 * This is the model class for table "itens_questionario_aluno".
 *
 * @property integer $id
 * @property string $descricao
 * @property integer $questionario_id
 * @property integer $questionario_aluno
 * @property integer $itens_resposta_discordo
 * @property integer $itens_resposta_concparcial
 * @property integer $itens_resposta_concordo
 *
 * @property QuestionarioAluno $questionarioAluno
 * @property Questionarios $questionario
 */
class ItensQuestionarioAluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itens_questionario_aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descricao', 'questionario_id', 'questionario_aluno'], 'required'],
            [['descricao'], 'string'],
            [['questionario_id', 'questionario_aluno', 'itens_resposta_discordo', 'itens_resposta_concparcial', 'itens_resposta_concordo'], 'integer'],
            [['questionario_aluno'], 'exist', 'skipOnError' => true, 'targetClass' => QuestionarioAluno::className(), 'targetAttribute' => ['questionario_aluno' => 'questaluno_id']],
            [['questionario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Questionarios::className(), 'targetAttribute' => ['questionario_id' => 'id_questionario']],
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
            'questionario_id' => 'Questionario ID',
            'questionario_aluno' => 'Questionario Aluno',
            'itens_resposta_discordo' => 'Itens Resposta Discordo',
            'itens_resposta_concparcial' => 'Itens Resposta Concparcial',
            'itens_resposta_concordo' => 'Itens Resposta Concordo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionarioAluno()
    {
        return $this->hasOne(QuestionarioAluno::className(), ['questaluno_id' => 'questionario_aluno']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionario()
    {
        return $this->hasOne(Questionarios::className(), ['id_questionario' => 'questionario_id']);
    }
}
