<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pesanan;

/**
 * PesananSearch represents the model behind the search form of `app\models\Pesanan`.
 */
class PesananSearch extends Pesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pesanan', 'Qty'], 'integer'],
            [['No_Pesanan', 'Nama_Barang', 'Harga'], 'safe'],
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
        $query = Pesanan::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
             $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Id_Pesanan' => $this->Id_Pesanan,
            'Qty' => $this->Qty,
        ]);

        $query->andFilterWhere(['like', 'No_Pesanan', $this->No_Pesanan])
            ->andFilterWhere(['like', 'Nama_Barang', $this->Nama_Barang])
            ->andFilterWhere(['like', 'Harga', $this->Harga]);

        return $dataProvider;
    }
}
