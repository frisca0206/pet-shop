<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetFoodModel;


class PetFoodController extends BaseController
{
    protected $PetFoodModel;

    public function __construct()
    {
        $this->PetFoodModel = new PetFoodModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pet Food Management',
            'page_title' => 'Pet Food List',
            'pet_foods' => $this->PetFoodModel->findAll()
        ];
        return view('pet_food/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pet Food Management',
            'page_title' => 'Create Food',
        ];

        return view('pet_food/create', $data);
    }

    public function store()
    {
        $name = $this->request->getPost('name');
        $price = $this->request->getPost('price');

        $new_pet_food = [
            'name' => $name,
            'price' => $price,
        ];

        $insert_pet_food = $this->PetFoodModel->insert($new_pet_food);
        return redirect()->to('pet_food');
    }

    public function edit($pet_food_id)
    {
        $data = [
            'title' => 'Pet Food Management',
            'page_title' => 'Edit Pet Food',
            'pet_food' => $this->PetFoodModel->find($pet_food_id)
        ];
        return view('pet_food/edit', $data);
    }

    public function update()
    {
        $pet_food_id = $this->request->getPost('pet_food_id');
        $name = $this->request->getPost('name');
        $price = $this->request->getPost('price');

        $edit_pet_food = [
            'name' => $name,
            'price' => $price,
        ];

        $update_pet_food = $this->PetFoodModel->update($pet_food_id, $edit_pet_food);
        return redirect()->to('pet_food');
    }

    public function delete($pet_food_id)
    {
        $this->PetFoodModel->delete($pet_food_id);
        return redirect()->to('pet_food');
    }

    public function rupiah($angka)
    {
        $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    }
}