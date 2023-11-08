<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PetTypeTable extends Migration
{
    private $table = 'pet_type';

    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'int',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'type' => [
                'type' => 'varchar',
                'constraint' =>225,
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
