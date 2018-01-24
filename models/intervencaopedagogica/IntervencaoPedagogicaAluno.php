<?php

namespace app\models\intervencaopedagogica;

use Yii;
use app\models\SituacaoQuestionario;

/**
 * This is the model class for table "questionario_aluno".
 *
 * @property int $questaluno_id
 * @property string $questaluno_unidade
 * @property string $questaluno_cpf
 * @property string $questaluno_nome
 * @property int $questaluno_codcurso
 * @property string $questaluno_curso
 * @property string $questaluno_unidadecurricular
 * @property string $questaluno_docente
 * @property string $questaluno_responsavel
 * @property string $questaluno_data
 * @property int $situacao_questionario_id
 *
 * @property ItensQuestionarioAluno[] $itensQuestionarioAlunos
 * @property SituacaoQuestionario $situacaoQuestionario
 */
class IntervencaoPedagogicaAluno extends \yii\db\ActiveRecord
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
            [['questaluno_unidade', 'questaluno_cpf', 'questaluno_nome', 'questaluno_codcurso', 'questaluno_curso', 'questaluno_unidadecurricular', 'questaluno_docente', 'questaluno_responsavel', 'questaluno_data', 'situacao_questionario_id'], 'required'],
            [['questaluno_codcurso', 'situacao_questionario_id'], 'integer'],
            [['questaluno_data'], 'safe'],
            [['questaluno_unidade', 'questaluno_nome', 'questaluno_curso', 'questaluno_unidadecurricular', 'questaluno_docente', 'questaluno_responsavel'], 'string', 'max' => 255],
            [['questaluno_cpf'], 'string', 'max' => 45],
            [['situacao_questionario_id'], 'exist', 'skipOnError' => true, 'targetClass' => SituacaoQuestionario::className(), 'targetAttribute' => ['situacao_questionario_id' => 'id']],
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
            'questaluno_codcurso' => 'Questaluno Codcurso',
            'questaluno_curso' => 'Questaluno Curso',
            'questaluno_unidadecurricular' => 'Questaluno Unidadecurricular',
            'questaluno_docente' => 'Questaluno Docente',
            'questaluno_responsavel' => 'Questaluno Responsavel',
            'questaluno_data' => 'Questaluno Data',
            'situacao_questionario_id' => 'Situacao Questionario ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItensQuestionarioAlunos()
    {
        return $this->hasMany(ItensQuestionarioAluno::className(), ['questionario_aluno' => 'questaluno_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSituacaoQuestionario()
    {
        return $this->hasOne(SituacaoQuestionario::className(), ['id' => 'situacao_questionario_id']);
    }
}
