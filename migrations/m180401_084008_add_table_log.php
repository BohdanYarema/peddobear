<?php

use yii\db\Migration;

/**
 * Class m180401_084008_add_table_log
 */
class m180401_084008_add_table_log extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%log}}', [
            'id'          => $this->primaryKey(),
            'text'        => $this->text(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%log}}');
    }
}
