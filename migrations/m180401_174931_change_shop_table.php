<?php

use yii\db\Migration;

/**
 * Class m180401_174931_change_shop_table
 */
class m180401_174931_change_shop_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('shop', 'slide_path', $this->string(1024));
        $this->addColumn('shop', 'slide_base_url', $this->string(1024));
        $this->dropColumn('shop', 'price');
        $this->dropColumn('shop', 'sale');
        $this->dropColumn('shop', 'special_price');
        $this->dropColumn('shop', 'slug');
        $this->addColumn('shop_i18n', 'price', $this->float());
        $this->addColumn('shop_i18n', 'special_price', $this->float());
        $this->addColumn('shop_i18n', 'meta_title',         $this->string(1024));
        $this->addColumn('shop_i18n', 'meta_description',   $this->text());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('shop', 'slide_path');
        $this->dropColumn('shop', 'slide_base_url');
        $this->addColumn('shop', 'price', $this->float());
        $this->addColumn('shop', 'sale', $this->float());
        $this->addColumn('shop', 'special_price', $this->float());
        $this->addColumn('shop', 'slug', $this->text());
        $this->dropColumn('shop_i18n', 'price');
        $this->dropColumn('shop_i18n', 'special_price');
        $this->dropColumn('shop_i18n', 'meta_title');
        $this->dropColumn('shop_i18n', 'meta_description');
    }
}
