<?php

namespace modules\hosxp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use modules\hosxp\models\Hosxp;

/**
 * HosxpSearch represents the model behind the search form of `modules\hosxp\models\Hosxp`.
 */
class HosxpSearch extends Hosxp
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['an', 'vn', 'hn', 'fullname', 'cid', 'vstdate', 'pdx', 'dx0', 'dx1', 'dx2', 'dx3', 'dx4', 'dx5', 'sex', 'bday', 'age_y', 'pttype', 'pttype_name', 'adjrw', 'uc_money', 'paid_money', 'item_money'], 'safe'],
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
        $query = Hosxp::find();

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
            'vstdate' => $this->vstdate,
            'bday' => $this->bday,
        ]);

        $query->andFilterWhere(['like', 'an', $this->an])
            ->andFilterWhere(['like', 'vn', $this->vn])
            ->andFilterWhere(['like', 'hn', $this->hn])
            ->andFilterWhere(['like', 'fullname', $this->fullname])
            ->andFilterWhere(['like', 'cid', $this->cid])
            ->andFilterWhere(['like', 'pdx', $this->pdx])
            ->andFilterWhere(['like', 'dx0', $this->dx0])
            ->andFilterWhere(['like', 'dx1', $this->dx1])
            ->andFilterWhere(['like', 'dx2', $this->dx2])
            ->andFilterWhere(['like', 'dx3', $this->dx3])
            ->andFilterWhere(['like', 'dx4', $this->dx4])
            ->andFilterWhere(['like', 'dx5', $this->dx5])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'age_y', $this->age_y])
            ->andFilterWhere(['like', 'pttype', $this->pttype])
            ->andFilterWhere(['like', 'pttype_name', $this->pttype_name])
            ->andFilterWhere(['like', 'adjrw', $this->adjrw])
            ->andFilterWhere(['like', 'uc_money', $this->uc_money])
            ->andFilterWhere(['like', 'paid_money', $this->paid_money])
            ->andFilterWhere(['like', 'item_money', $this->item_money]);

        return $dataProvider;
    }
}
