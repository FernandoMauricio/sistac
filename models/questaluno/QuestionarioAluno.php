<?php

namespace app\models\questaluno;

use Yii;
use app\models\itensquestaluno\ItensQuestionarioAluno;
use app\models\SituacaoQuestionario;

/**
 * This is the model class for table "questionario_aluno".
 *
 * @property integer $questaluno_id
 * @property string $questaluno_unidade
 * @property string $questaluno_cpf
 * @property string $questaluno_nome
 * @property integer $questaluno_codcurso
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
    public $discordoTotalmente;
    public $concordoParcialmente;
    public $concordoTotalmente;

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
            [['questaluno_unidade', 'questaluno_cpf', 'questaluno_nome', 'questaluno_codcurso', 'questaluno_curso', 'questaluno_unidadecurricular', 'questaluno_docente', 'questaluno_responsavel', 'questaluno_data'], 'required'],
            [['questaluno_codcurso', 'discordoTotalmente', 'concordoParcialmente', 'concordoTotalmente'], 'integer'],
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
            'questaluno_id' => 'ID',
            'questaluno_unidade' => 'Unidade',
            'questaluno_cpf' => 'Cpf',
            'questaluno_nome' => 'Nome',
            'questaluno_codcurso' => 'Cód. Turma',
            'questaluno_curso' => 'Curso',
            'questaluno_unidadecurricular' => 'Unidade curricular',
            'questaluno_docente' => 'Docente',
            'questaluno_responsavel' => 'Responsavel',
            'questaluno_data' => 'Data',
            'situacao_questionario_id' => 'Situação',
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
