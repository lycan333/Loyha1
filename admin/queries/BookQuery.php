<?php

namespace backend\queries;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Books;

/**
 * BookQuery represents the model behind the search form of `backend\models\Books`.
 */
class BookQuery extends Books
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pageSize', 'editions', 'publisherId', 'prince', 'categoryId', 'langId'], 'integer'],
            [['title', 'EditionYear', 'ISBN', 'qrcode'], 'safe'],
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
        $query = Books::find();

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
            'pageSize' => $this->pageSize,
            'EditionYear' => $this->EditionYear,
            'editions' => $this->editions,
            'publisherId' => $this->publisherId,
            'prince' => $this->prince,
            'categoryId' => $this->categoryId,
            'langId' => $this->langId,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'ISBN', $this->ISBN])
            ->andFilterWhere(['like', 'qrcode', $this->qrcode]);

        return $dataProvider;
    }
}
