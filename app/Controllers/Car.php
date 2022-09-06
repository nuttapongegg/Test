<?php

namespace App\Controllers;

class Car extends BaseController
{
    public function index()
    {
        $CarModel = new \App\Models\CarModel();
        $cars = $CarModel ->getAllCar();

        echo  '<pre>';
        print_r($cars);
        exit();
        return view('car');
    }
    
    public function AddCars()
    {
        $CarModel = new \App\Models\CarModel();
        $cars = $CarModel ->insertCar([
            'name' => 'MG'
        ]);

        echo  '<pre>';
        print_r($cars);
        exit();
        return view('car');
    }

    public function updateCars($id)
    {
        $CarModel = new \App\Models\CarModel();
        $cars = $CarModel ->updateCar([
            'name' => 'BMW'
        ],$id);

        echo  $id;
        exit();
        return view('car');
    }

    public function deleteCars($id)
    {
        $CarModel = new \App\Models\CarModel();
        $cars = $CarModel ->deleteCar([
            
        ],$id);

        echo  $id;
        exit();
        return view('car');
    }
}
