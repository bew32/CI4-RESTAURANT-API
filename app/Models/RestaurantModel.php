<?php

namespace App\Model;

use CodeIgniter\Models;

class RestaurantModel extends Model
{
    protected $table = 'restaurant';
    protected $primaryKey = "id";
    protected $allowsFields = ['id' , 'name' ,'type' ,'imageurl'];
}