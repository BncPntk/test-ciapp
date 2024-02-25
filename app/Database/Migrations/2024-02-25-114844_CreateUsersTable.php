<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'auto_increment' => true,
                'null' => false,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 128,
                'null' => false,
            ],
            'first_number' => [
                'type' => 'INT',
                'null' => false,
            ],
            'second_number' => [
                'type' => 'INT',
                'null' => false,
            ],
            'summ' => [
                'type' => 'INT',
                'null' => false,
            ],
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
}
