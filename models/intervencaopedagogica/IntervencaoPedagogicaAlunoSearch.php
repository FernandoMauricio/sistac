<?php

namespace app\models\intervencaopedagogica;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\intervencaopedagogica\IntervencaoPedagogicaAluno;

/**
 * IntervencaoPedagogicaAlunoSearch represents the model behind the search form of `app\models\intervencaopedagogica\IntervencaoPedagogicaAluno`.
 */
class IntervencaoPedagogicaAlunoSearch extends IntervencaoPedagogicaAluno
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['questaluno_id', 'questaluno_codcurso', 'situacao_questionario_id'], 'integer'],
            [['questaluno_unidade', 'questaluno_cpf', 'questaluno_nome', 'questaluno_curso', 'questaluno_unidadecurricular', 'questaluno_docente', 'questaluno_responsavel', 'questaluno_data'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = IntervencaoPedagogicaAluno::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'questaluno_id' => $this->questaluno_id,
            'questaluno_codcurso' => $this->questaluno_codcurso,
            'questaluno_data' => $this->questaluno_data,
            'situacao_questionario_id' => $this->situacao_questionario_id,
        ]);

        $query->andFilterWhere(['like', 'questaluno_unidade', $this->questaluno_unidade])
            ->andFilterWhere(['like', 'questaluno_cpf', $this->questaluno_cpf])
            ->andFilterWhere(['like', 'questaluno_nome', $this->questaluno_nome])
            ->andFilterWhere(['like', 'questaluno_curso', $this->questaluno_curso])
            ->andFilterWhere(['like', 'questaluno_unidadecurricular', $this->questaluno_unidadecurricular])
            ->andFilterWhere(['like', 'questaluno_docente', $this->questaluno_docente])
            ->andFilterWhere(['like', 'questaluno_responsavel', $this->questaluno_responsavel]);

        return $dataProvider;
    }
}
