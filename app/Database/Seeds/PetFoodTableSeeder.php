<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PetFoodTableSeeder extends Seeder
{
    private $table = 'pet_food';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Royal Canin',
                'price' => '250000',
            ],
            [
                'id' => 2,
                'name' => 'Whiskas',
                'price' => '100000',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
