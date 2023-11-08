<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PetTypeTableSeeder extends Seeder
{
    private $table = 'pet_type';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'type' => 'persia',
            ],
            [
                'id' => 2,
                'type' => 'anggora',
            ],
            [
                'id' => 3,
                'type' => 'lovebird',
            ],
            [
                'id' => 4,
                'type' => 'kakatua',
            ],
            [
                'id' => 5,
                'type' => 'satin',
            ],
            [
                'id' => 6,
                'type' => 'rex',
            ],
            [
                'id' => 7,
                'type' => 'suriah',
            ],
            [
                'id' => 8,
                'type' => 'kerdil',
            ],
            [
                'id' => 9,
                'type' => 'chihuahua',
            ],
            [
                'id' => 10,
                'type' => 'poodle',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
