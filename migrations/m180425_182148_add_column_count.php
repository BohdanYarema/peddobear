<?php

use yii\db\Migration;

/**
 * Class m180425_182148_add_column_count
 */
class m180425_182148_add_column_count extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('shop', 'counter', $this->integer()->defaultValue(0));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('shop', 'counter');
    }
}
