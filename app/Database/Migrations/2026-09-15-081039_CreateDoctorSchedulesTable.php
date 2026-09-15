<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDoctorSchedulesTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'doctor_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],

            'poli_id' => [
                'type'     => 'INT',
                'unsigned' => true,
            ],

            'practice_date' => [
                'type' => 'DATE',
            ],

            'start_time' => [
                'type' => 'TIME',
            ],

            'end_time' => [
                'type' => 'TIME',
            ],

            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'default'    => 'active',
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
            'doctor_id',
            'accounts',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addForeignKey(
            'poli_id',
            'polis',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->addKey('doctor_id');
        $this->forge->addKey('poli_id');
        $this->forge->addKey('practice_date');

        $this->forge->createTable('doctor_schedules');
    }

    public function down()
    {
        $this->forge->dropTable('doctor_schedules');
    }
}   