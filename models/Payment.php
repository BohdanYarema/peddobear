<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $address
 * @property string $zipcode
 * @property string $city
 * @property string $payment_type
 * @property string $currency
 * @property double $shipping
 * @property double $summary
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property array $items[]
 *
 * @property PaymentItems[] $paymentItems
 * @property PaymentLogs[] $paymentLogs
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@var}
     */
    public $items;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
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
            [['items'], 'safe'],
            [['shipping', 'summary'], 'number'],
            [['name', 'email', 'phone', 'country', 'address', 'zipcode', 'city', 'payment_type'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['name', 'email', 'phone', 'country', 'address', 'zipcode', 'city', 'payment_type'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'country' => 'Country',
            'address' => 'Address',
            'zipcode' => 'Zipcode',
            'city' => 'City',
            'payment_type' => 'Payment Type',
            'currency' => 'Currency',
            'shipping' => 'Shipping',
            'summary' => 'Summary',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentItems()
    {
        return $this->hasMany(PaymentItems::className(), ['payment_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentLogs()
    {
        return $this->hasMany(PaymentLogs::className(), ['payment_id' => 'id']);
    }
}
