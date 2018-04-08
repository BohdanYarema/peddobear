<?php

use yii\db\Migration;

/**
 * Class m180408_122955_add_column_to_payment
 */
class m180408_122955_add_column_to_payment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('payment', 'payment_order_id', $this->double());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('payment', 'payment_order_id');
    }
}
