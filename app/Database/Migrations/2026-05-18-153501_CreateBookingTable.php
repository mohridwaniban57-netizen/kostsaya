<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBookingTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'booking_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'user_id' =>[
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'kamar_id' =>[
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,
            ],
            'status' =>[
                'type' => 'ENUM',
                'constraint' =>[
                    'pending',
                    'diterima',
                    'ditolak',
                ],
                'default' => 'pending',
            ],
            'created_at' =>[
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('booking_id', true);
        $this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('kamar_id', 'kamar', 'kamar_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('booking');
    }

    public function down()
    {
        $this->forge->dropTable('booking');
    }
}
