<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Headline;

/**
 * HeadlineSearch represents the model behind the search form about `common\models\Headline`.
 */
class HeadlineSearch extends Headline
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'hhead'], 'integer'],
            [['hvalue', 'kvalue'], 'safe'],
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
        $query = Headline::find();

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
            'Id' => $this->Id,
            'hhead' => $this->hhead,
        ]);

        $query->andFilterWhere(['like', 'hvalue', $this->hvalue])
            ->andFilterWhere(['like', 'kvalue', $this->kvalue]);

        return $dataProvider;
    }
}
