<?php

use yii\db\Migration;

/**
 * Class m180320_222035_add_column_to_shop
 */
class m180320_222035_add_column_to_shop extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('shop', 'special_price', $this->float());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('shop', 'special_price');
    }
}
