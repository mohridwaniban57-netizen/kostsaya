<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKosTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'kos_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'pemilik_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],

            'nama_kos' => [
                'type'       => 'VARCHAR',
                'constraint' => 100,
            ],

            'lokasi' => [
                'type' => 'TEXT',
            ],

            'harga' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],

            'foto' => [
                'type'       => 'VARCHAR',
                'constraint' => 255,
                'null'       => true,
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

        $this->forge->addKey('kos_id', true);

        $this->forge->addForeignKey(
            'pemilik_id',
            'user',
            'user_id',
            'CASCADE',
            'CASCADE'
        );

        $this->forge->createTable('kos');
    }

    public function down()
    {
        $this->forge->dropTable('kos');
    }
}

