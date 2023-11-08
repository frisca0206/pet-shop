<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetTypeModel;

class PetTypeController extends BaseController
{
    protected $PetTypeModel;

    public function __construct()
    {
        $this->PetTypeModel = new PetTypeModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pet Shop Management',
            'page_title' => 'Pet Type List',
            'pets_type' => $this->PetTypeModel->findAll()
        ];
        return view('pet_type/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pet Type Management',
            'page_title' => 'Create Pet Type',
        ];

        return view('pet_type/create', $data);
    }

    public function store()
    {
        $pet_type = $this->request->getPost('type');

        $new_pet_type = [
            'type' => $pet_type,

        ];

        $insert_pet_type = $this->PetTypeModel->insert($new_pet_type);
        return redirect()->to('pet_type');
    }

    public function edit($pet_type_id)
    {
        $data = [
            'title' => 'Pet Type Management',
            'page_title' => 'Edit Pet Type',
            'pet_type' => $this->PetTypeModel->find($pet_type_id)
        ];
        return view('pet_type/edit', $data);
    }

    public function update()
    {
        $pet_type_id = $this->request->getPost('pet_type_id');
        $type = $this->request->getPost('type');

        $edit_pet_type = [
            'type' => $type,
        ];

        $update_pet_type = $this->PetTypeModel->update($pet_type_id, $edit_pet_type);
        return redirect()->to('pet_type');
    }

    public function delete($pet_type_id)
    {
        $this->PetTypeModel->delete($pet_type_id);
        return redirect()->to('pet_type');
    }
}