<?php

use yii\db\Migration;

/**
 * Class m180417_195632_change_column_order_id
 */
class m180417_195632_change_column_order_id extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->alterColumn('payment', 'payment_order_id', $this->string(255));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->alterColumn('payment', 'payment_order_id', $this->string(255));
    }
}
