<?php

namespace app\models\itensquestdocente;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\itensquestdocente\ItensQuestionarioDocente;

/**
 * ItensQuestionarioDocenteSearch represents the model behind the search form about `app\models\itensquestdocente\ItensQuestionarioDocente`.
 */
class ItensQuestionarioDocenteSearch extends ItensQuestionarioDocente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'questionario_docente', 'questionario_id', 'itens_questionario_resposta'], 'integer'],
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
        $query = ItensQuestionarioDocente::find();

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
            'id' => $this->id,
            'questionario_docente' => $this->questionario_docente,
            'questionario_id' => $this->questionario_id,
            'itens_questionario_resposta' => $this->itens_questionario_resposta,
        ]);

        return $dataProvider;
    }
}
