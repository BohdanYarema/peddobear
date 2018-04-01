<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "shop".
 *
 * @property int $id
 * @property string $image_base_url
 * @property string $image_path
 * @property string $slide_path
 * @property string $slide_base_url
 * @property int $status
 * @property int $count
 * @property float $summary
 * @property int $created_at
 * @property int $updated_at
 *
 * @property ShopI18n[] $shopI18ns
 */
class Shop extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'image' => [
                'class' => 'trntv\filekit\behaviors\UploadBehavior',
                'attribute' => 'image',
                'pathAttribute' => 'image_path',
                'baseUrlAttribute' => 'image_base_url',
            ],
            'slide' => [
                'class' => 'trntv\filekit\behaviors\UploadBehavior',
                'attribute' => 'slide',
                'pathAttribute' => 'slide_path',
                'baseUrlAttribute' => 'slide_base_url',
            ],
        ];
    }

    /**
     * @var array
     */
    public $i18n;
    public $image;
    public $slide;
    public $summary;
    public $count;


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
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['image_base_url', 'image_path', 'slide_base_url', 'slide_path'], 'string', 'max' => 1024],
            [['i18n', 'image', 'summary', 'count', 'slide'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                => 'ID',
            'slug'              => 'Slug',
            'image_base_url'    => 'Image Base Url',
            'image_path'        => 'Image Path',
            'slide_base_url'    => 'Slide Base Url',
            'slide_path'        => 'Slide Path',
            'status'            => 'Status',
            'created_at'        => 'Created At',
            'updated_at'        => 'Updated At',
            'image'             => 'Image',
            'slide'             => 'Slide',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShopI18ns()
    {
        return $this->hasMany(ShopI18n::className(), ['shop_id' => 'id']);
    }

    public function afterFind()
    {
        $this->i18n = ShopI18n::getLocaleData($this->id);

        parent::afterFind();
    }

    /**
     * @param bool $insert
     * @param array $changedAttributes
     */
    public function afterSave($insert, $changedAttributes)
    {
        ShopI18n::saveLanguageData($this->id, $this->i18n, $insert);

        parent::afterSave($insert, $changedAttributes);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocale()
    {
        return $this->hasOne(ShopI18n::className(), ['shop_id' => 'id'])->andWhere([
            'i18n' => Yii::$app->language
        ]);
    }

    /**
     * @return float
     */
    public function getEndPrice()
    {
        if ($this->status == 1){
            return $this->locale->price;
        } else {
            return $this->locale->special_price;
        }
    }

    /**
     * @return string
     */
    public function getDefaultTitle()
    {
        if(!empty($this->i18n)) {
            return $this->i18n[Yii::$app->language]['title'];
        }

        return $this->locale ? $this->locale->title : null;
    }

}
