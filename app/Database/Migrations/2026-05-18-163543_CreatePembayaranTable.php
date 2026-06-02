<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePembayaranTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'pembayaran_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'booking_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
             'user_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'bukti' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'status' =>[
                'type' => 'ENUM',
                'constraint' => ['pending', 'valid', 'ditolak'],
                'default' => 'pending',
            ],
            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
             'updated_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => 'null',
            ],

        ]);
         $this->forge->addKey('pembayaran_id', true);
         
         $this->forge->addForeignKey('booking_id', 'booking', 'booking_id', 'CASCADE', 'CASCADE');

        $this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE', 'CASCADE');

        $this->forge->createTable('pembayaran');
    }

    public function down()
    {
        $this->forge->dropTable('pembayaran');
    }
}
