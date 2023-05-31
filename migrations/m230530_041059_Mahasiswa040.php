<?php

use yii\db\Migration;

/**
 * Class m230530_041059_Mahasiswa040
 */
class m230530_041059_Mahasiswa040 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{Mahasiswa040}}', [
            'id040' => $this->primaryKey(),
            'nim040' => $this->string(25)->notNull()->unique(),
            'nama040' => $this->string(225)->notNull(),
            'kelas040' => $this->string(10)->notNull(),
            'status040' => $this->string(50)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230530_041059_Mahasiswa040 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230530_041059_Mahasiswa040 cannot be reverted.\n";

        return false;
    }
    */
}
