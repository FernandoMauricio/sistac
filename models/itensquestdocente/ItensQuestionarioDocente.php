<?php

namespace app\models\itensquestdocente;

use Yii;
use app\models\questdocente\Ques;
use app\models\questionarios\Questionarios;

/**
 * This is the model class for table "itens_questionario_docente".
 *
 * @property integer $id
 * @property integer $questionario_docente
 * @property integer $questionario_id
 * @property integer $itens_questionario_resposta
 *
 * @property QuestionarioDocente $questionarioDocente
 * @property Questionarios $questionario
 */
class ItensQuestionarioDocente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itens_questionario_docente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'questionario_docente', 'questionario_id', 'itens_questionario_resposta'], 'required'],
            [['id', 'questionario_docente', 'questionario_id', 'itens_questionario_resposta'], 'integer'],
            [['questionario_docente'], 'exist', 'skipOnError' => true, 'targetClass' => QuestionarioDocente::className(), 'targetAttribute' => ['questionario_docente' => 'questdocente_id']],
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
            'questionario_docente' => 'Questionario Docente',
            'questionario_id' => 'Questionario ID',
            'itens_questionario_resposta' => 'Itens Questionario Resposta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionarioDocente()
    {
        return $this->hasOne(QuestionarioDocente::className(), ['questdocente_id' => 'questionario_docente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionario()
    {
        return $this->hasOne(Questionarios::className(), ['id_questionario' => 'questionario_id']);
    }
}
