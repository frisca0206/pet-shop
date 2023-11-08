<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ConditionModel;


class ConditionController extends BaseController
{
    protected $ConditionModel;

    public function __construct()
    {
        $this->ConditionModel = new ConditionModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Condition Management',
            'page_title' => 'Condition List',
            'conditions' => $this->ConditionModel->findAll()
        ];
        return view('condition/index', $data);          
    }

    public function create()
    {
        $data = [
            'title' => 'Condition Management',
            'page_title' => 'Create Condition',
        ];

        return view('condition/create', $data);
    }

    public function store()
    {
        $condition = $this->request->getPost('condition');

        $new_condition = [
            'condition' => $condition,
        ];

        $insert_condition = $this->ConditionModel->insert($new_condition);
        return redirect()->to('condition');
    }

    public function edit($condition_id)
    {
        $data = [
            'title' => 'Condition Management',
            'page_title' => 'Edit Condition',
            'condition' => $this->ConditionModel->find($condition_id)
        ];
        return view('condition/edit', $data);
    }

    public function update()
    {
        $condition_id = $this->request->getPost('condition_id');
        $condition = $this->request->getPost('condition');

        $edit_condition = [
            'condition' => $condition,
        ];

        $update_condition = $this->ConditionModel->update($condition_id, $edit_condition);
        return redirect()->to('condition');
    }

    public function delete($condition_id)
    {
        $this->ConditionModel->delete($condition_id);
        return redirect()->to('condition');
    }
}