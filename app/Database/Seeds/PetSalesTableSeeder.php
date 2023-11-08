<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PetSalesTableSeeder extends Seeder
{
    private $table = 'pet_sales';

    public function run()
    {
        $data = [
            [
                'id' => 1,
                'name_id' => 2,
                'type_id' => 9,
                'condition_id' => 1,
                'description' => 'Chihuahua pada dasarnya adalah ras anjing yang penyayang, 
                                  sering menggonggong dan suka mencari perhatian pada pemiliknya. 
                                  Meskipun bertubuh mungil, chihuahua memiliki tingkat kepercayaan diri yang tinggi, 
                                  bahkan mereka berani untuk menyerang hewan lain yang berukuran lebih besar darinya ketika dirinya merasa terintimidasi.',
                'price' => 1000000,
            ],
        ];
        $this->db->table($this->table)->insertBatch($data);
    }
}
