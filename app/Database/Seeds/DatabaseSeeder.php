<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('PetTypeTableSeeder');
        $this->call('PetTableSeeder');
        $this->call('ConditionTableSeeder');
        $this->call('PetSalesTableSeeder');
        $this->call('PetFoodTableSeeder');
    }
}
