<?php

use yii\db\Migration;

/**
 * Class m230523_185218_queue_statuses
 */
class m230523_185218_queue_statuses extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('queue_statuses', [
            'id'        => $this->primaryKey(),
            's_name'    => $this->string(512),
            'c_name'    => $this->string(512),
            'c_id'      => $this->string(32),
            'a_type'    => $this->string(128),
            'direction' => $this->string(32),
            'activation'=> $this->string(32),
            'c_state'   => $this->string(32),
            'control'   => $this->string(32),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('queue_statuses');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230523_185218_queue_statuses cannot be reverted.\n";

        return false;
    }
    */
}
