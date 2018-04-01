<?php

namespace app\modules\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "page".
 *
 * @property int $id
 * @property string $slug
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 * @property string $meta_image
 * @property string $meta_image_base_url
 * @property string $meta_image_path
 *
 * @property PageI18n[] $i18n
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @var array
     */
    public $i18n;
    public $meta_image;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
            'meta_image' => [
                'class' => 'trntv\filekit\behaviors\UploadBehavior',
                'attribute' => 'meta_image',
                'pathAttribute' => 'meta_image_path',
                'baseUrlAttribute' => 'meta_image_base_url',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['i18n', 'meta_image'], 'safe'],
            [['slug'], 'string', 'max' => 32],
            [['meta_image_base_url', 'meta_image_path'], 'string', 'max' => 1024],
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
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'meta_image_base_url'   => 'Meta Image Base Url',
            'meta_image_path'       => 'Meta Path',
            'meta_image'            => 'Meta Image',
        ];
    }

    public function afterFind()
    {
        $this->i18n = PageI18n::getLocaleData($this->id);

        parent::afterFind();
    }

    /**
     * @param bool $insert
     * @param array $changedAttributes
     */
    public function afterSave($insert, $changedAttributes)
    {
        PageI18n::saveLanguageData($this->id, $this->i18n, $insert);

        parent::afterSave($insert, $changedAttributes);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocale()
    {
        return $this->hasOne(PageI18n::className(), ['page_id' => 'id'])->andWhere([
            'i18n' => Yii::$app->language
        ]);
    }
}
