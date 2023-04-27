<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%menu_positions}}`.
 */
class m230427_141905_create_menu_positions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%menu_positions}}', [
            'id' => $this->primaryKey(),
            'cook_id' => $this->bigInteger()->notNull(),
            'name' => $this->string()->notNull(),
            'price' => $this->float()->notNull(),
            'is_available' => $this->boolean()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%menu_positions}}');
    }
}
