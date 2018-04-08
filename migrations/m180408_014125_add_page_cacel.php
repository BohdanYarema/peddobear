<?php

use yii\db\Migration;

/**
 * Class m180408_014125_add_page_cacel
 */
class m180408_014125_add_page_cacel extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'slug'          => 'cancel',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page_i18n}}', [
            'page_id'               => 12,
            'i18n'                  => 'pl',
            'title'                 => 'Coockie',
            'description'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'meta_title'            => 'Coockie',
            'meta_keywords'         => 'Coockie',
            'meta_description'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at'            => time(),
            'updated_at'            => time(),
        ]);

        $this->insert('{{%page_i18n}}', [
            'page_id'               => 12,
            'i18n'                  => 'en',
            'title'                 => 'Coockie',
            'description'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'meta_title'            => 'Coockie',
            'meta_keywords'         => 'Coockie',
            'meta_description'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'created_at'            => time(),
            'updated_at'            => time(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%page}}', [
            'slug'          => 'cancel'
        ]);
    }
}
