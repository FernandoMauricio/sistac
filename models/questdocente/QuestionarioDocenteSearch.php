<?php

namespace app\models\questdocente;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\questdocente\QuestionarioDocente;

/**
 * QuestionarioDocenteSearch represents the model behind the search form about `app\models\questdocente\QuestionarioDocente`.
 */
class QuestionarioDocenteSearch extends QuestionarioDocente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['questdocente_id'], 'integer'],
            [['questdocente_unidade', 'questdocente_curso', 'questdocente_docente', 'questdocente_periodocurso', 'questdocente_supervisor', 'questdocente_responsavel', 'questdocente_data'], 'safe'],
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
        $query = QuestionarioDocente::find();

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
            'questdocente_id' => $this->questdocente_id,
            'questdocente_data' => $this->questdocente_data,
        ]);

        $query->andFilterWhere(['like', 'questdocente_unidade', $this->questdocente_unidade])
            ->andFilterWhere(['like', 'questdocente_curso', $this->questdocente_curso])
            ->andFilterWhere(['like', 'questdocente_docente', $this->questdocente_docente])
            ->andFilterWhere(['like', 'questdocente_periodocurso', $this->questdocente_periodocurso])
            ->andFilterWhere(['like', 'questdocente_supervisor', $this->questdocente_supervisor])
            ->andFilterWhere(['like', 'questdocente_responsavel', $this->questdocente_responsavel]);

        return $dataProvider;
    }
}
