<?php

namespace app\models\questaluno;

use Yii;

/**
 * This is the model class for table "questionario_aluno".
 *
 * @property integer $questaluno_id
 * @property string $questaluno_unidade
 * @property string $questaluno_cpf
 * @property string $questaluno_nome
 * @property string $questaluno_curso
 * @property string $questaluno_unidadecurricular
 * @property string $questaluno_docente
 * @property string $questaluno_responsavel
 * @property string $questaluno_data
 *
 * @property ItensQuestionarioAluno[] $itensQuestionarioAlunos
 */
class QuestionarioAluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'questionario_aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['questaluno_unidade', 'questaluno_cpf', 'questaluno_nome', 'questaluno_curso', 'questaluno_unidadecurricular', 'questaluno_docente', 'questaluno_responsavel', 'questaluno_data'], 'required'],
            [['questaluno_data'], 'safe'],
            [['questaluno_unidade', 'questaluno_nome', 'questaluno_curso', 'questaluno_unidadecurricular', 'questaluno_docente', 'questaluno_responsavel'], 'string', 'max' => 255],
            [['questaluno_cpf'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'questaluno_id' => 'Questaluno ID',
            'questaluno_unidade' => 'Questaluno Unidade',
            'questaluno_cpf' => 'Questaluno Cpf',
            'questaluno_nome' => 'Questaluno Nome',
            'questaluno_curso' => 'Questaluno Curso',
            'questaluno_unidadecurricular' => 'Questaluno Unidadecurricular',
            'questaluno_docente' => 'Questaluno Docente',
            'questaluno_responsavel' => 'Questaluno Responsavel',
            'questaluno_data' => 'Questaluno Data',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItensQuestionarioAlunos()
    {
        return $this->hasMany(ItensQuestionarioAluno::className(), ['questionario_aluno' => 'questaluno_id']);
    }
}
