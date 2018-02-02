<?php

namespace muxtor\pkk5module\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use muxtor\pkk5module\models\Pkk5kadastr;

/**
 * Pkk5kadastrSearch represents the model behind the search form about `muxtor\pkk5module\models\Pkk5kadastr`.
 */
class Pkk5kadastrSearch extends Pkk5kadastr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['kadastrnumber', 'address', 'cost', 'area'], 'safe'],
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
        $query = Pkk5kadastr::find();

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
        ]);

        $query->andFilterWhere(['like', 'kadastrnumber', $this->kadastrnumber])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'cost', $this->cost])
            ->andFilterWhere(['like', 'area', $this->area]);

        return $dataProvider;
    }
}
