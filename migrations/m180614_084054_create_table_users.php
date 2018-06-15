<?php
use yii\db\Migration;
class m180614_084054_create_table_users extends Migration
{
    public function Up()
    {
        $this->createTable('users', [
           'id' => $this->primaryKey()->notNull(),
           'username' => $this->string(50)->notNull(),
           'password' => $this->string(128)->notNull(),
           'email' => $this->string(128)->notNull(),
           'surname' => $this->string(20)->notNull(),
           'name' => $this->string(20)->notNull(), 
           'patronymic' => $this->string(20)->notNull(),
           'phone' =>  $this->string(20)->defaultValue(''),
           'specialization' => $this->string(20)->defaultValue(''),
           'profile_pic' => $this->string(20)->defaultValue('user.jpg'),
           'created_at' => 'datetime DEFAULT NOW()',
           'updated_at' => 'datetime DEFAULT NOW()'
        ]);
        
        $this->insert('users', [
           'id' => 0,
           'username' => 'admin',
           'password' => 'admin',
           'email' => 'admin@admin.ad',
           'surname' => 'Админов',
           'name' => 'Админ',
           'patronymic' => 'Админович',
        ]);
    }
    public function Down()
    {
       $this->dropTable('users');
    }
}