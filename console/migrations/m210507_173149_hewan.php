<?php

use yii\db\Migration;

/**
 * Class m210507_173149_hewan
 */
class m210507_173149_hewan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('hewan', [
            'id' => $this->primaryKey(),
            'nama_hewan' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210507_173149_hewan cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210507_173149_hewan cannot be reverted.\n";

        return false;
    }
    */
}
