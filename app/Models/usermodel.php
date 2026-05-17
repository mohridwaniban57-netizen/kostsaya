<?php

namespace App\Database\Migration;

class CreateUsers extends Migration 
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'STRING',
                'constraint' => 100,
            ],
            'email' => [
                'type' => 'STRING',
                'constraint' => 100,
                'unique' => true,
            ],
            'password' => [
                'type' => 'STRING',
                'constraint' => 100,
                'unique' => true,
            ], 
            'foto' => [
                'type' => 'STRING',
                'constraint' =>
            ]



        ])


    }



}