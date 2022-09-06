<?php

namespace App\Models;

use CodeIgniter\Model;

class CarModel extends Model
{
    protected $db;

    public function __construct()
    {
        $db = \Config\Database::connect();
        $this->db = &$db;
    }

    public function getAllCar()
    {
        $builder = $this->db->table('list_car');

        $data =  $builder->get()->getResult();
        return $data;
    }

    public function insertCar($data)
    {
        $builder = $this->db->table('list_car');

        $insert =  $builder->insert($data);
        return $insert;
    }
    public function updateCar($data,$id)
    {
        $builder = $this->db->table('list_car');
        $builder->where('id', $id);
        $update =  $builder->update($data);
       
        return $update;
    }
    public function deleteCar($data,$id)
    {
        $builder = $this->db->table('list_car');
        $builder->delete(['id' => $id]);
        $delete =  $builder->delete($data);
        return $delete;
    }
}