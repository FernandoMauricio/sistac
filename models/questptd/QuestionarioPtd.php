<?php

namespace app\models\questptd;

use Yii;

/**
 * This is the model class for table "questionario_ptd".
 *
 * @property integer $id_questionario_ptd
 * @property string $questptd_unidade
 * @property string $questptd_curso
 * @property string $questptd_docente
 * @property string $questionario_ptdcol
 * @property string $questptd_supervisor
 * @property string $questptd_responsavel
 * @property string $questptd_data
 *
 * @property ItensQuestionarioPtd[] $itensQuestionarioPtds
 */
class QuestionarioPtd extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questionario_ptd';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['questptd_unidade', 'questptd_curso', 'questptd_docente', 'questionario_ptdcol', 'questptd_supervisor', 'questptd_responsavel', 'questptd_data'], 'required'],
            [['questptd_data'], 'safe'],
            [['questptd_unidade', 'questptd_curso', 'questptd_docente', 'questionario_ptdcol', 'questptd_supervisor', 'questptd_responsavel'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_questionario_ptd' => 'Id Questionario Ptd',
            'questptd_unidade' => 'Questptd Unidade',
            'questptd_curso' => 'Questptd Curso',
            'questptd_docente' => 'Questptd Docente',
            'questionario_ptdcol' => 'Questionario Ptdcol',
            'questptd_supervisor' => 'Questptd Supervisor',
            'questptd_responsavel' => 'Questptd Responsavel',
            'questptd_data' => 'Questptd Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItensQuestionarioPtds()
    {
        return $this->hasMany(ItensQuestionarioPtd::className(), ['questionario_ptd' => 'id_questionario_ptd']);
    }
}
