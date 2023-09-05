<?php

namespace App\Models;

use CodeIgniter\Model;

use App\Models\SensorGetarModel;

class SensorGetarModel extends Model
{
  protected $table = "sensor_getar";
  protected $primaryKey = "id";
  protected $createdField = "created_at";
  protected $allowedFields = ["nama_sensor", "nilai", "created_at"];
  protected $useTimestamps = true;
}
