<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PetSalesTable extends Migration
{
    private $table = 'pet_sales';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'name_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'type_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'condition_id' => [
                'type' => 'int',
                'unsigned' => true,
            ],
            'description' => [
                'type' => 'text',
            ],
            'price' => [
                'type' => 'int',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('name_id', 'pet', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('type_id', 'pet_type', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('condition_id', 'condition', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable($this->table);
    }

    public function down()
    {
        $this->forge->dropTable($this->table);
    }
}
