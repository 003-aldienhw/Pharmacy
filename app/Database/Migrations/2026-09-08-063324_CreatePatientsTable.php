<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePatientsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true
            ],

            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => 100
            ],
            
            'nik' => [
                'type' => 'CHAR',
                'constraint' => 16,
                'unique' => true
            ],

            'tanggal_lahir' => [
                'type' => 'DATE',
            ],

            'jenis_kelamin' => [
                'type'       => 'ENUM',
                'constraint' => ['L', 'P'],
            ],

            'alamat_lengkap' => [
                'type' => 'TEXT'
            ],

            'nomor_telepon' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('patients');
    }

    public function down()
    {
        $this->forge->dropTable('patients');
    }
}
