<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Upload;

/**
 * UploadSearch represents the model behind the search form about `common\models\Upload`.
 */
class UploadSearch extends Upload
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id', 'type', 'duserid'], 'integer'],
            [['title', 'content', 'url', 'time'], 'safe'],
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
        $query = Upload::find();

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
            'type' => $this->type,
            'duserid' => $this->duserid,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'url', $this->url])
            ->andFilterWhere(['like', 'time', $this->time]);

        return $dataProvider;
    }
}
