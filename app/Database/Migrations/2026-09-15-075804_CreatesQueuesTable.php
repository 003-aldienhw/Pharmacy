<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateQueuesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'sender_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],

            'receiver_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],

            'data' => [
                'type' => 'JSON',
            ],

            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'pending',
            ],

            'read_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'completed_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addForeignKey(
            'sender_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'receiver_id',
            'users',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addKey('receiver_id');
        $this->forge->addKey('status');

        $this->forge->createTable('queues');
    }

    public function down()
    {
        $this->forge->dropTable('queues');
    }
}