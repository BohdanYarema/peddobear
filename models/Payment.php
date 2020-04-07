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
 * @property string $redirectUrl
 * @property string $payment_order_id
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

    public $card_number;
    public $cvc;
    public $month;
    public $year;
    public $stripeToken;


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
            [['items', 'payment_order_id', 'redirectUrl', 'card_number', 'month', 'year', 'cvc', 'stripeToken'], 'safe'],
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
            'payment_order_id' => 'Payment order id',
            'redirectUrl' => 'redirect Url',
            'year' => 'Year',
            'month' => 'Month',
            'cvc' => 'Cvc',
            'stripeToken' => 'Stripe Token',
            'card_number' => 'Card Number',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @param bool $insert
     * @param array $changedAttributes
     */
    public function afterSave($insert, $changedAttributes)
    {
        foreach ($this->items as $value){
            $model              = new PaymentItems();
            $model->payment_id  = $this->id;
            $model->shop_id     = $value->id;
            $model->price       = $value->locale->price;
            $model->count       = $value->count;
            $model->summary     = $value->summary;
            $model->save();
        }
        parent::afterSave($insert, $changedAttributes);
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
