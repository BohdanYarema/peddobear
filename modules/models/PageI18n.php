<?php

namespace app\modules\models;

use Yii;
use app\components\LocaleTrait;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "page_i18n".
 *
 * @property int $id
 * @property int $page_id
 * @property string $i18n
 * @property string $title
 * @property string $description
 * @property string $meta_keywords
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_image
 * @property string $meta_image_base_url
 * @property string $meta_image_path
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Page $page
 */
class PageI18n extends \yii\db\ActiveRecord
{

    use LocaleTrait;


    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @var string
     */
    public $meta_image;

    /**
     * @var string
     */
    protected static $relationColumnName = 'page_id';

    /**
     * @var array
     */
    protected static $additionalLocaleDataAttributes = [];

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'page_i18n';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['page_id', 'created_at', 'updated_at'], 'integer'],
            [['description', 'meta_description'], 'string'],
            [['i18n'], 'string', 'max' => 45],
            [['title', 'meta_title', 'meta_keywords'], 'string', 'max' => 1024],
            [['page_id'], 'exist', 'skipOnError' => true, 'targetClass' => Page::className(), 'targetAttribute' => ['page_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'                    => 'ID',
            'page_id'               => 'Page ID',
            'i18n'                  => 'I18n',
            'title'                 => 'Title',
            'description'           => 'Description',
            'meta_keywords'         => 'Meta Keywords',
            'meta_title'            => 'Meta Title',
            'meta_description'      => 'Meta Description',
            'created_at'            => 'Created At',
            'updated_at'            => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPage()
    {
        return $this->hasOne(Page::className(), ['id' => 'page_id']);
    }
}
