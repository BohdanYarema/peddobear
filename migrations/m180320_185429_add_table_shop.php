<?php

use yii\db\Migration;

/**
 * Class m180320_185429_add_table_shop
 */
class m180320_185429_add_table_shop extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%shop}}', [
            'id'                => $this->primaryKey(),
            'slug'              => $this->string(32),
            'image_base_url'    => $this->string(1024),
            'image_path'        => $this->string(1024),
            'price'             => $this->float(),
            'sale'              => $this->float(),
            'status'            => $this->integer(),
            'created_at'        => $this->integer(),
            'updated_at'        => $this->integer()
        ], $tableOptions);

        $this->createTable('{{%shop_i18n}}', [
            'id'            => $this->primaryKey(),
            'shop_id'       => $this->integer(),
            'i18n'          => $this->string(45),
            'title'         => $this->string(1024),
            'description'   => $this->text(),
            'created_at'    => $this->integer(),
            'updated_at'    => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey('fk_shop_i18n', '{{%shop_i18n}}', 'shop_id', '{{%shop}}', 'id', 'cascade', 'cascade');
    }

    public function down()
    {
        $this->dropForeignKey('fk_shop_i18n', '{{%shop_i18n}}');
        $this->dropTable('{{%shop_i18n}}');
        $this->dropTable('{{%shop}}');
    }
}
