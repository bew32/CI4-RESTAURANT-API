<?php
namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class Restaurant extends ResourceController
{
    use ResponseTrait;
    protected $modelName = 'App\Models\RestaurantModel';
    protected $format = 'json';

    //Get all Restaurant
    public function index()
    {
        $data['restaurant'] = $this->model->orderBy('id','DESC')->findAll();
        return $this->respond($data);
    }
    //$this->model->method()
}