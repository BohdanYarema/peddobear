<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use app\components\LocaleTrait;

/**
 * This is the model class for table "shop_i18n".
 *
 * @property int $id
 * @property int $shop_id
 * @property string $i18n
 * @property string $title
 * @property string $description
 * @property string $meta_title
 * @property string $meta_description
 * @property float $price
 * @property float $special_price
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Shop $shop
 */
class ShopI18n extends \yii\db\ActiveRecord
{
    use LocaleTrait;

    /**
     * @var string
     */
    protected static $relationColumnName = 'shop_id';

    /**
     * @var array
     */
    protected static $additionalLocaleDataAttributes = [];


    public function behaviors()
    {
        return [
            TimestampBehavior::className()
        ];
    }

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop_i18n';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shop_id', 'created_at', 'updated_at'], 'integer'],
            [['price', 'special_price'], 'number'],
            [['description', 'meta_description'], 'string'],
            [['i18n'], 'string', 'max' => 45],
            [['title', 'meta_title'], 'string', 'max' => 1024],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shop::className(), 'targetAttribute' => ['shop_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                => 'ID',
            'shop_id'           => 'Shop ID',
            'i18n'              => 'I18n',
            'title'             => 'Title',
            'description'       => 'Description',
            'meta_title'        => 'Meta Title',
            'meta_description'  => 'Meta Description',
            'price'             => 'Price',
            'special_price'     => 'Special price',
            'created_at'        => 'Created At',
            'updated_at'        => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(Shop::className(), ['id' => 'shop_id']);
    }
}
