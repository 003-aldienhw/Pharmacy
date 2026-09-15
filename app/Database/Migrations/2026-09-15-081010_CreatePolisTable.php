<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePolisTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ]
        ]);

        $this->forge->addKey('id', true);

        $this->forge->createTable('polis');
    }

    public function down()
    {
        $this->forge->dropTable('polis');
    }
}