<?php

namespace app\models\itensquestptd;

use Yii;
use app\models\questptd\QuestionarioPtd;
use app\models\questionarios\Questionarios;

/**
 * This is the model class for table "itens_questionario_ptd".
 *
 * @property integer $id
 * @property integer $questionario_ptd
 * @property integer $questionario_id
 * @property integer $itens_questionario_resposta
 *
 * @property QuestionarioPtd $questionarioPtd
 * @property Questionarios $questionario
 */
class ItensQuestionarioPtd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'itens_questionario_ptd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['questionario_ptd', 'questionario_id', 'itens_questionario_resposta'], 'required'],
            [['questionario_ptd', 'questionario_id', 'itens_questionario_resposta'], 'integer'],
            [['questionario_ptd'], 'exist', 'skipOnError' => true, 'targetClass' => QuestionarioPtd::className(), 'targetAttribute' => ['questionario_ptd' => 'id_questionario_ptd']],
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
            'questionario_ptd' => 'Questionario Ptd',
            'questionario_id' => 'Questionario ID',
            'itens_questionario_resposta' => 'Itens Questionario Resposta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionarioPtd()
    {
        return $this->hasOne(QuestionarioPtd::className(), ['id_questionario_ptd' => 'questionario_ptd']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getQuestionario()
    {
        return $this->hasOne(Questionarios::className(), ['id_questionario' => 'questionario_id']);
    }
}
