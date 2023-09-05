<?php

namespace App\Controllers;

use App\Models\SensorGetarModel;
use App\Models\SensorGyroModel;

class Pages extends BaseController
{
    protected $SensorGetarModel;
    protected $SensorGyroModel;

    public function __construct()
    {
        $this->SensorGetarModel = new SensorGetarModel();
        $this->SensorGyroModel = new SensorGyroModel();
    }

    public function index()
    {
        $data = [
            "title" => "Dashboard Monitoring IoT | Projek",
        ];

        return view("pages/dashboard", $data);
    }

    public function sensor_getar()
    {
        $sensor_getar = $this->SensorGetarModel->findAll();
        $data = [
            "title" => "Riwayat Sensor Getar Monitoring IoT | Projek ",
            "sensor" => $sensor_getar,
        ];

        return view("pages/sensor_getar", $data);
    }

    public function sensor_gyro()
    {
        $sensor_gyro = $this->SensorGyroModel->findAll();
        $data = [
            "title" => "Riwayat Sensor Gyro Monitoring IoT | Projek ",
            "sensor" => $sensor_gyro,
        ];

        return view("pages/sensor_gyro", $data);
    }
}
