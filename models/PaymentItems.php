<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_items".
 *
 * @property int $id
 * @property int $payment_id
 * @property int $shop_id
 * @property double $price
 * @property int $count
 * @property double $summary
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Payment $payment
 * @property Shop $shop
 */
class PaymentItems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_items';
    }

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className()
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_id', 'shop_id', 'count', 'created_at', 'updated_at'], 'integer'],
            [['price', 'summary'], 'number'],
            [['payment_id'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_id' => 'id']],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shop::className(), 'targetAttribute' => ['shop_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payment_id' => 'Payment ID',
            'shop_id' => 'Shop ID',
            'price' => 'Price',
            'count' => 'Count',
            'summary' => 'Summary',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPayment()
    {
        return $this->hasOne(Payment::className(), ['id' => 'payment_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(Shop::className(), ['id' => 'shop_id']);
    }
}
