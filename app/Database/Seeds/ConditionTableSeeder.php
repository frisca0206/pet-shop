<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ConditionTableSeeder extends Seeder
{
    private $table = 'condition';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'condition' => 'good',
            ],
            [
                'id' => 2,
                'condition' => 'not good',
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
