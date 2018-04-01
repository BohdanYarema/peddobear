<?php

use yii\db\Migration;

/**
 * Class m180401_194036_add_table_page
 */
class m180401_194036_add_table_page extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%page}}', [
            'id'                => $this->primaryKey(),
            'slug'              => $this->string(32),
            'status'            => $this->integer(),
            'created_at'        => $this->integer(),
            'updated_at'        => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%page_i18n}}', [
            'id'                => $this->primaryKey(),
            'page_id'           => $this->integer(),
            'i18n'              => $this->string(45),
            'title'             => $this->string(1024),
            'description'       => $this->text(),
            'meta_title'        => $this->string(1024),
            'meta_description'  => $this->text(),
            'created_at'        => $this->integer(),
            'updated_at'        => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey('fk_page_i18n', '{{%page_i18n}}', 'page_id', '{{%page}}', 'id', 'cascade', 'cascade');
    }

    public function down()
    {
        $this->dropForeignKey('fk_page_i18n', '{{%page_i18n}}');
        $this->dropTable('{{%page_i18n}}');
        $this->dropTable('{{%page}}');
    }
}
