<?php

namespace app\models\supervisores;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\supervisores\Supervisores;

/**
 * SupervisoresSearch represents the model behind the search form about `app\models\supervisores\Supervisores`.
 */
class SupervisoresSearch extends Supervisores
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['superv_id'], 'integer'],
            [['superv_nome'], 'safe'],
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
        $query = Supervisores::find();

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
            'superv_id' => $this->superv_id,
        ]);

        $query->andFilterWhere(['like', 'superv_nome', $this->superv_nome]);

        return $dataProvider;
    }
}
