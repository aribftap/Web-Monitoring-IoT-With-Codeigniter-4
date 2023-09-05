<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Models\SensorGyroModel;

class SensorGyroModel extends Model
{
  protected $table = "sensor_gyro";
  protected $primaryKey = "id";
  protected $allowedFields = [
    "nama_sensor",
    "accel_x",
    "accel_y",
    "accel_z"

  ];
  protected $useTimestamps = true;
}
