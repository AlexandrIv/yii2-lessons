<?php

use yii\db\Migration;

/**
 * Class m191017_195814_vs_posts
 */
class m191017_195814_vs_posts extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('vs_posts', [
            'id'        => $this->primaryKey(),
            'title'     => $this->string(200),
            'text'      => $this->string(2000),
            'author_id' => $this->integer(),
            'alias'     => $this->string(200),
            'data'      => $this->date("Y-m-d H:i:s"),
            'likes'     => $this->integer(),
            'hits'      => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191017_195814_vs_posts cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191017_195814_vs_posts cannot be reverted.\n";

        return false;
    }
    */
}
