<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PetSalesModel;
use App\Models\PetModel;
use App\Models\PetTypeModel;
use App\Models\ConditionModel;


class PetSalesController extends BaseController
{
    protected $PetSalesModel;

    public function __construct()
    {
        $this->PetSalesModel = new PetSalesModel();
        $this->PetModel = new PetModel();
        $this->PetTypeModel = new PetTypeModel();
        $this->ConditionModel = new ConditionModel();
    }

    public function index()
    {
        $pets_sales = $this->PetSalesModel->select('pet_sales.*,pet.pet,pet_type.type,condition.condition')
        ->join('pet','pet.id = pet_sales.pet_id')
        ->join('pet_type','pet_type.id = pet_sales.type_id')
        ->join('condition','condition.id = pet_sales.condition_id')->findAll();

        foreach ($pets_sales as $key => $pet_sales){
            $pets_sales[$key]['price'] = $this->rupiah($pet_sales['price']);
        }

        $data = [
            'title' => 'Pet Sales Management',
            'page_title' => 'Pet Sales List',
            'pets_sales' => $pets_sales
        ];
    
        return view('pet_sales/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Pet Sales Management',
            'page_title' => 'Create Pet Sales',
            'pets_sales' => $this->PetSalesModel->findAll(),
            'pets' => $this->PetModel->findAll(),
            'pets_type' => $this->PetTypeModel->findAll(),
            'conditions' => $this->ConditionModel->findAll(),
        ];

        return view('pet_sales/create', $data);
    }

    public function store()
    {
        $pet = $this->request->getPost('pet');
        $type = $this->request->getPost('type');
        $condition = $this->request->getPost('condition');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');

        $new_pet_sales = [
            'pet_id' => $pet,
            'type_id' => $type,
            'condition_id' => $condition,
            'description' => $description,
            'price' => $price,
        ];

        $insert_pet_sales = $this->PetSalesModel->insert($new_pet_sales);
        return redirect()->to('pet_sales');
    }

    public function edit($pet_sales_id)
    {
        $data = [
            'title' => 'Pet Sales Management',
            'page_title' => 'Edit Pet Sales',
            'pet_sales' => $this->PetSalesModel->find($pet_sales_id),
            'pets' => $this->PetModel->findAll(),
            'pets_type' => $this->PetTypeModel->findAll(),
            'conditions' => $this->ConditionModel->findAll(),
        ];
        return view('pet_sales/edit', $data);
    }

    public function update()
    {
        $pet_sales_id = $this->request->getPost('pet_sales_id');
        $pet = $this->request->getPost('pet');
        $type = $this->request->getPost('type');
        $condition = $this->request->getPost('condition');
        $description = $this->request->getPost('description');
        $price = $this->request->getPost('price');

        $edit_pet_sales = [
            'pet_id' => $pet,
            'type_id' => $type,
            'condition_id' => $condition,
            'description' => $description,
            'price' => $price,
        ];

        $update_pet_sales = $this->PetSalesModel->update($pet_sales_id, $edit_pet_sales);
        return redirect()->to('pet_sales');
    }

    public function delete($pet_sales_id)
    {
        $this->PetSalesModel->delete($pet_sales_id);
        return redirect()->to('pet_sales');
    }

    public function rupiah($angka)
    {
	    $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
        return $hasil_rupiah;
    }
}