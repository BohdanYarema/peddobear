<?php

use yii\db\Migration;

/**
 * Class m180418_091858_add_url_for_payment
 */
class m180418_091858_add_url_for_payment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('payment', 'redirectUrl', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('payment', 'redirectUrl');
    }
}
