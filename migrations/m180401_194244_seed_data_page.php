<?php

use yii\db\Migration;

/**
 * Class m180401_194244_seed_data_page
 */
class m180401_194244_seed_data_page extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->insert('{{%page}}', [
            'slug'          => 'coockie',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page}}', [
            'slug'          => 'about',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page}}', [
            'slug'          => 'shop',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page}}', [
            'slug'          => 'special',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page}}', [
            'slug'          => 'cart',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page}}', [
            'slug'          => 'contact',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page}}', [
            'slug'          => 'success',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page}}', [
            'slug'          => 'fail',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        $this->insert('{{%page}}', [
            'slug'          => 'index',
            'status'        => 1,
            'created_at'    => time(),
            'updated_at'    => time(),
        ]);

        for ($i=1; $i<=9; $i++){
            $this->insert('{{%page_i18n}}', [
                'page_id'               => $i,
                'i18n'                  => 'pl',
                'title'                 => 'Coockie',
                'description'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'meta_title'            => 'Coockie',
                'meta_description'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'created_at'            => time(),
                'updated_at'            => time(),
            ]);

            $this->insert('{{%page_i18n}}', [
                'page_id'               => $i,
                'i18n'                  => 'en',
                'title'                 => 'Coockie',
                'description'           => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'meta_title'            => 'Coockie',
                'meta_description'      => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'created_at'            => time(),
                'updated_at'            => time(),
            ]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->delete('{{%page}}', [
            'slug'          => 'coockie'
        ]);

        $this->delete('{{%page}}', [
            'slug'          => 'about'
        ]);

        $this->delete('{{%page}}', [
            'slug'          => 'shop'
        ]);

        $this->delete('{{%page}}', [
            'slug'          => 'special'
        ]);

        $this->delete('{{%page}}', [
            'slug'          => 'cart'
        ]);

        $this->delete('{{%page}}', [
            'slug'          => 'contact'
        ]);

        $this->delete('{{%page}}', [
            'slug'          => 'success'
        ]);

        $this->delete('{{%page}}', [
            'slug'          => 'fail'
        ]);

        $this->delete('{{%page}}', [
            'slug'          => 'index'
        ]);
    }
}
