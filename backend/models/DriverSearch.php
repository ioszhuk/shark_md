<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Driver;

/**
 * DriverSearch represents the model behind the search form of `backend\models\Driver`.
 */
class DriverSearch extends Driver
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'sort_order', 'created_at', 'updated_at'], 'integer'],
            [['position', 'name_md', 'name_en', 'name_ru', 'image_md', 'image_en', 'image_ru', 'body_md', 'body_en', 'body_ru'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Driver::find();

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
            'sort_order' => $this->sort_order,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'name_md', $this->name_md])
            ->andFilterWhere(['like', 'name_en', $this->name_en])
            ->andFilterWhere(['like', 'name_ru', $this->name_ru])
            ->andFilterWhere(['like', 'image_md', $this->image_md])
            ->andFilterWhere(['like', 'image_en', $this->image_en])
            ->andFilterWhere(['like', 'image_ru', $this->image_ru])
            ->andFilterWhere(['like', 'body_md', $this->body_md])
            ->andFilterWhere(['like', 'body_en', $this->body_en])
            ->andFilterWhere(['like', 'body_ru', $this->body_ru]);

        return $dataProvider;
    }
}
