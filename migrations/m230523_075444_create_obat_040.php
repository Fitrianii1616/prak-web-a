<?php

use yii\db\Migration;

/**
 * Class m230523_075444_create_obat_040
 */
class m230523_075444_create_obat_040 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230523_075444_create_obat_040 cannot be reverted.\n";

        return false;
    }
    public function up()
    {
        $this->createTable('obat040', [
            'id' => $this->primaryKey(),
            'kode_obat' => $this->string()->notNull(),
            'harga' => $this->decimal(10, 2)->notNull(),
            'stok_obat' => $this->integer()->notNull(),
        ]);

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230523_075444_create_obat_040 cannot be reverted.\n";

        return false;
    }
    */
}
