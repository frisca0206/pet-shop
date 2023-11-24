<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PetFoodTable extends Migration
{
    private $table = 'pet_food';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 225,
            ],
            'price' => [
                'type' => 'int',
                'unsigned' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table); 
    }
}