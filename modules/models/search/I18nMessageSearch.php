<?php

namespace app\modules\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\models\I18nMessage;

/**
 * I18nMessageSearch represents the model behind the search form about `backend\modules\i18n\models\I18nMessage`.
 */
class I18nMessageSearch extends I18nMessage
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['language', 'translation', 'sourceMessage', 'category'], 'safe'],
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
        $query = I18nMessage::find()->with('sourceMessageModel')->joinWith('sourceMessageModel');

        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }



        $query->andFilterWhere([
            '{{%source_message}}.id' => $this->id
        ]);

        $query->andFilterWhere(['like', '{{%message}}.language', $this->language])
            ->andFilterWhere(['like', '{{%message}}.translation', $this->translation])
            ->andFilterWhere(['like', '{{%source_message}}.message', $this->sourceMessage])
            ->andFilterWhere(['like', '{{%source_message}}.category', $this->category]);


        return $dataProvider;
    }
}
