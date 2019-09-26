<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "pesanan".
 *
 * @property int $Id_Pesanan
 * @property string $No_Pesanan
 * @property string $Nama_Barang
 * @property int $Qty
 * @property string $Harga
 */
class Cancel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Id_Pesanan', 'No_Pesanan', 'Nama_Barang', 'Qty', 'Harga'], 'required'],
            [['Id_Pesanan', 'Qty'], 'default', 'value' => null],
            [['Id_Pesanan', 'Qty'], 'integer'],
            [['No_Pesanan'], 'string', 'max' => 9],
            [['Nama_Barang'], 'string', 'max' => 40],
            [['Harga'], 'string', 'max' => 15],
            [['Id_Pesanan'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Id_Pesanan' => 'Id Pesanan',
            'No_Pesanan' => 'No Pesanan',
            'Nama_Barang' => 'Nama Barang',
            'Qty' => 'Qty',
            'Harga' => 'Harga',
        ];
    }
}
