<?php

use yii\db\Migration;

/**
 * Class m180404_202453_add_table_for_payment
 */
class m180404_202453_add_table_for_payment extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%payment}}', [
            'id'                => $this->primaryKey(),
            'name'              => $this->string(1024),
            'email'             => $this->string(1024),
            'phone'             => $this->string(1024),
            'country'           => $this->string(1024),
            'address'           => $this->string(1024),
            'zipcode'           => $this->string(1024),
            'city'              => $this->string(1024),
            'payment_type'      => $this->string(1024),
            'currency'          => $this->string(1024),
            'shipping'          => $this->float(),
            'summary'           => $this->float(),
            'status'            => $this->integer(),
            'created_at'        => $this->integer(),
            'updated_at'        => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%payment_items}}', [
            'id'            => $this->primaryKey(),
            'payment_id'    => $this->integer(),
            'shop_id'       => $this->integer(),
            'price'         => $this->float(),
            'count'         => $this->integer(),
            'summary'       => $this->float(),
            'created_at'    => $this->integer(),
            'updated_at'    => $this->integer(),
        ], $tableOptions);

        $this->createTable('{{%payment_logs}}', [
            'id'            => $this->primaryKey(),
            'payment_id'    => $this->integer(),
            'summary'       => $this->text(),
            'created_at'    => $this->integer(),
            'updated_at'    => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey('fk_payment_items', '{{%payment_items}}', 'payment_id', '{{%payment}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_payment_logs', '{{%payment_logs}}', 'payment_id', '{{%payment}}', 'id', 'cascade', 'cascade');
        $this->addForeignKey('fk_payment_shop', '{{%payment_items}}', 'shop_id', '{{%shop}}', 'id', 'cascade', 'cascade');
    }

    public function down()
    {
        $this->dropForeignKey('fk_payment_items', '{{%payment_items}}');
        $this->dropForeignKey('fk_payment_logs', '{{%payment_logs}}');
        $this->dropForeignKey('fk_payment_shop', '{{%payment_items}}');

        $this->dropTable('{{%payment_logs}}');
        $this->dropTable('{{%payment_items}}');
        $this->dropTable('{{%payment}}');
    }
}
