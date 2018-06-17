<?php

use yii\db\Migration;

/**
 * Class m180617_061843_add_table_for_token
 */
class m180617_061843_add_table_for_token extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%api_token}}', [
            'id'                => $this->primaryKey(),
            'token'             => $this->text(),
            'expired'           => $this->integer(),
            'status'            => $this->integer(),
            'created_at'        => $this->integer(),
            'updated_at'        => $this->integer()
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%api_token}}');
    }
}
