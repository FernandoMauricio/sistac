<?php

namespace app\models\avaliacoes;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\avaliacoes\Avaliacoes;

/**
 * AvaliacoesSearch represents the model behind the search form about `app\models\avaliacoes\Avaliacoes`.
 */
class AvaliacoesSearch extends Avaliacoes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_avaliacao', 'aval_curso', 'categoria_id'], 'integer'],
            [['aval_turma', 'aval_unidadecurricular', 'aval_unidade', 'aval_supervisor', 'aval_avaliado', 'aval_status', 'aval_responsavel', 'aval_data'], 'safe'],
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
        $query = Avaliacoes::find();

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
            'id_avaliacao' => $this->id_avaliacao,
            'aval_curso' => $this->aval_curso,
            'categoria_id' => $this->categoria_id,
            'aval_data' => $this->aval_data,
        ]);

        $query->andFilterWhere(['like', 'aval_turma', $this->aval_turma])
            ->andFilterWhere(['like', 'aval_unidadecurricular', $this->aval_unidadecurricular])
            ->andFilterWhere(['like', 'aval_unidade', $this->aval_unidade])
            ->andFilterWhere(['like', 'aval_supervisor', $this->aval_supervisor])
            ->andFilterWhere(['like', 'aval_avaliado', $this->aval_avaliado])
            ->andFilterWhere(['like', 'aval_status', $this->aval_status])
            ->andFilterWhere(['like', 'aval_responsavel', $this->aval_responsavel]);

        return $dataProvider;
    }
}
