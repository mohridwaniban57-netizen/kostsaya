<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKamarTable extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'kamar_id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'kos_id' => [
                'type'       => 'INT',
                'constraint' => 11,
                'unsigned'   => true,
            ],

            'nomor' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
            ],

            'harga' => [
                'type'       => 'INT',
                'constraint' => 11,
            ],

            'status' => [
                'type'       => 'ENUM',
                'constraint' => ['kosong', 'terisi'],
                'default'    => 'kosong',
            ],

            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],

            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => 'null',
            ],

        ]);

        $this->forge->addKey('kamar_id', true);

        $this->forge->addForeignKey('kos_id','kos','kos_id','CASCADE','CASCADE');

        $this->forge->createTable('kamar');
    }

    public function down()
    {
        $this->forge->dropTable('kamar');
    }
}