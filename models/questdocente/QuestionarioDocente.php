<?php

namespace app\models\questdocente;

use Yii;

/**
 * This is the model class for table "questionario_docente".
 *
 * @property integer $questdocente_id
 * @property string $questdocente_unidade
 * @property string $questdocente_curso
 * @property string $questdocente_docente
 * @property string $questdocente_periodocurso
 * @property string $questdocente_supervisor
 * @property string $questdocente_responsavel
 * @property string $questdocente_data
 *
 * @property ItensQuestionarioDocente[] $itensQuestionarioDocentes
 */
class QuestionarioDocente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questionario_docente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['questdocente_unidade', 'questdocente_curso', 'questdocente_docente', 'questdocente_periodocurso', 'questdocente_supervisor', 'questdocente_responsavel', 'questdocente_data'], 'required'],
            [['questdocente_data'], 'safe'],
            [['questdocente_unidade', 'questdocente_curso', 'questdocente_docente', 'questdocente_periodocurso', 'questdocente_supervisor', 'questdocente_responsavel'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'questdocente_id' => 'Questdocente ID',
            'questdocente_unidade' => 'Questdocente Unidade',
            'questdocente_curso' => 'Questdocente Curso',
            'questdocente_docente' => 'Questdocente Docente',
            'questdocente_periodocurso' => 'Questdocente Periodocurso',
            'questdocente_supervisor' => 'Questdocente Supervisor',
            'questdocente_responsavel' => 'Questdocente Responsavel',
            'questdocente_data' => 'Questdocente Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItensQuestionarioDocentes()
    {
        return $this->hasMany(ItensQuestionarioDocente::className(), ['questionario_docente' => 'questdocente_id']);
    }
}
