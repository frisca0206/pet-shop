<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PetTableSeeder extends Seeder
{
    private $table = 'pet';

    public function run()
    {
        $data = [
            [
                'id' =>  1,
                'name' => 'cat',
            ],
            [
                'id' => 2,
                'name' => 'dog',
            ],
            [
                'id' => 3,
                'name' => 'hamster',
            ],
            [
                'id' => 4,
                'name' => 'bird',
            ],
            [
                'id' => 5,
                'name' => 'rabbit',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
