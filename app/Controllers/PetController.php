<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetModel;


class PetController extends BaseController
{
    protected $PetModel;

    public function __construct()
    {
        $this->PetModel = new PetModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pet Management',
            'page_title' => 'Pet List',
            'pets' => $this->PetModel->findAll()
        ];
        return view('pet/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pet Management',
            'page_title' => 'Create Pet',
        ];

        return view('pet/create', $data);
    }

    public function store()
    {
        $pet = $this->request->getPost('pet');

        $new_pet = [
            'pet' => $pet,
        ];

        $insert_pet = $this->PetModel->insert($new_pet);
        return redirect()->to('pet');
    }

    public function edit($pet_id)
    {
        $data = [
            'title' => 'Pet Management',
            'page_title' => 'Edit Pet',
            'pet' => $this->PetModel->find($pet_id)
        ];
        return view('pet/edit', $data);
    }

    public function update()
    {
        $pet_id = $this->request->getPost('pet_id');
        $pet = $this->request->getPost('pet');

        $edit_pet = [
            'pet' => $pet
        ];

        $update_pet = $this->PetModel->update($pet_id, $edit_pet);
        return redirect()->to('pet');
    }

    public function delete($pet_id)
    {
        $this->PetModel->delete($pet_id);
        return redirect()->to('pet');
    }
}