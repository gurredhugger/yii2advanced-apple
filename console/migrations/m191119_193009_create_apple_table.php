<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%apple}}`.
 */
class m191119_193009_create_apple_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%apple}}', [
            'id' => $this->primaryKey(),
            'color' => $this->string(6),
            'created_at' => $this->dateTime(),
            'drop_at' => $this->dateTime(),
            'on_tree' => $this->boolean(),
            'eat_progress' => $this->tinyInteger(3),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%apple}}');
    }
}
