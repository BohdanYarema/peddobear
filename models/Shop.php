<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "shop".
 *
 * @property int $id
 * @property string $slug
 * @property string $image_base_url
 * @property string $image_path
 * @property double $price
 * @property double $sale
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ShopI18n[] $shopI18ns
 */
class Shop extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shop';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'sale'], 'number'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['slug'], 'string', 'max' => 32],
            [['image_base_url', 'image_path'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'slug' => 'Slug',
            'image_base_url' => 'Image Base Url',
            'image_path' => 'Image Path',
            'price' => 'Price',
            'sale' => 'Sale',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShopI18ns()
    {
        return $this->hasMany(ShopI18n::className(), ['shop_id' => 'id']);
    }
}
