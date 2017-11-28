<?php

namespace app\models\questptd;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\questptd\QuestionarioPtd;

/**
 * QuestionarioPtdSearch represents the model behind the search form about `app\models\questptd\QuestionarioPtd`.
 */
class QuestionarioPtdSearch extends QuestionarioPtd
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_questionario_ptd'], 'integer'],
            [['questptd_unidade', 'questptd_curso', 'questptd_docente', 'questionario_ptdcol', 'questptd_supervisor', 'questptd_responsavel', 'questptd_data'], 'safe'],
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
        $query = QuestionarioPtd::find();

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
            'id_questionario_ptd' => $this->id_questionario_ptd,
            'questptd_data' => $this->questptd_data,
        ]);

        $query->andFilterWhere(['like', 'questptd_unidade', $this->questptd_unidade])
            ->andFilterWhere(['like', 'questptd_curso', $this->questptd_curso])
            ->andFilterWhere(['like', 'questptd_docente', $this->questptd_docente])
            ->andFilterWhere(['like', 'questionario_ptdcol', $this->questionario_ptdcol])
            ->andFilterWhere(['like', 'questptd_supervisor', $this->questptd_supervisor])
            ->andFilterWhere(['like', 'questptd_responsavel', $this->questptd_responsavel]);

        return $dataProvider;
    }
}
