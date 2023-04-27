<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%check_positions}}`.
 */
class m230427_141938_create_check_positions_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%check_positions}}', [
            'id' => $this->primaryKey(),
            'check_id' => $this->bigInteger()->notNull(),
            'menu_position_id' => $this->bigInteger()->notNull(),
            'created_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%check_positions}}');
    }
}
