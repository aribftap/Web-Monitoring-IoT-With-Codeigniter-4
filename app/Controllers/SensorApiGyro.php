<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;


class SensorApiGyro extends BaseController
{
  use ResponseTrait;

  public function getSensorData1()
  {
    // Fetch data from Blynk API
    $url =
      "https://sgp1.blynk.cloud/external/api/get?token=j6x74589S3GflPaPQu6WZry88SMXpo98&pin=V1";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    // Extract sensor data from response
    $sensorData1 = $response;

    return $sensorData1;
  }

  public function getSensorData2()
  {
    // Fetch data from Blynk API
    $url =
      "https://sgp1.blynk.cloud/external/api/get?token=j6x74589S3GflPaPQu6WZry88SMXpo98&pin=V2";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    // Extract sensor data from response
    $sensorData2 = $response;

    return $sensorData2;
  }

  public function getSensorData3()
  {
    // Fetch data from Blynk API
    $url =
      "https://sgp1.blynk.cloud/external/api/get?token=j6x74589S3GflPaPQu6WZry88SMXpo98&pin=V3";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    // Extract sensor data from response
    $sensorData3 = $response;

    return $sensorData3;
  }

  public function postSensorData()
  {
    // Get sensor data 1 - 3
    $sensorData1 = "0.01";
    $sensorData2 = $this->getSensorData2();
    $sensorData3 = $this->getSensorData3();

    // $dataRaw = [
    //   $sensorData1 = $this->getSensorData1(),
    //   $sensorData2 = $this->getSensorData2(),
    //   $sensorData3 = $this->getSensorData3(),
    // ];

    // dd($dataRaw);

    // Validate data
    if (
      empty($sensorData1) &&
      empty($sensorData2) &&
      empty($sensorData3)
    ) {
      return $this->failValidationErrors("Nilai sensor diperlukan.");
    }

    // Fungsi untuk memeriksa apakah nilai adalah float atau double
    function ValidDataGyro($data)
    {
      if (is_numeric($data) && strpos($data, '.') !== false && is_float(floatval($data))) {
        return true;
      }

      return false;
    }


    // Ensure sensor value is a float or double
    if (!ValidDataGyro($sensorData1)) {
      return $this->failValidationErrors("Nilai sensor harus berupa bilangan desimal.");
    } elseif (!ValidDataGyro($sensorData2)) {
      return $this->failValidationErrors("Nilai sensor harus berupa bilangan desimal.");
    } elseif (!ValidDataGyro($sensorData3)) {
      return $this->failValidationErrors("Nilai sensor harus berupa bilangan desimal.");
    }



    // Tetapkan data sensor dari masing-masing kolom dalam tabel
    $nilai_accelx = $sensorData1;
    $nilai_accely = $sensorData2;
    $nilai_accelz = $sensorData3;

    // Insert data into database
    $db = db_connect();
    $builder = $db->table("sensor_gyro");
    $data = [
      "accel_x" => $nilai_accelx,
      "accel_y" => $nilai_accely,
      "accel_z" => $nilai_accelz,
    ];
    $builder->insert($data);

    // Return success response
    return $this->respondCreated([
      "status" => "success",
      "Nilai Accel X" => $nilai_accelx,
      "Nilai Accel Y" => $nilai_accely,
      "Nilai Accel Z" => $nilai_accelz,
      "message" => "Data Sensor Gyro berhasil dimasukkan.",
    ]);
  }

  public function testPostGyro($sensorData1, $sensorData2, $sensorData3)
  {
    // Validate data
    if (
      empty($sensorData1) &&
      empty($sensorData2) &&
      empty($sensorData3)
    ) {
      return $this->failValidationErrors("Nilai sensor diperlukan.");
    }

    // Fungsi untuk memeriksa apakah nilai adalah float atau double
    function tesValidDataGyro($data)
    {
      if (is_numeric($data) && strpos($data, '.') !== false && is_float(floatval($data))) {
        return true;
      }

      return false;
    }

    // Ensure sensor value is a float or double
    if (!tesValidDataGyro($sensorData1)) {
      return $this->failValidationErrors("Nilai sensor harus berupa bilangan desimal.");
    } elseif (!tesValidDataGyro($sensorData2)) {
      return $this->failValidationErrors("Nilai sensor harus berupa bilangan desimal.");
    } elseif (!tesValidDataGyro($sensorData3)) {
      return $this->failValidationErrors("Nilai sensor harus berupa bilangan desimal.");
    }


    // Tetapkan data sensor dari masing-masing kolom dalam tabel
    $nilai_accelx = $sensorData1;
    $nilai_accely = $sensorData2;
    $nilai_accelz = $sensorData3;


    // Insert data into database
    $db = db_connect();
    $builder = $db->table("sensor_gyro");
    $data = [
      "accel_x" => $nilai_accelx,
      "accel_y" => $nilai_accely,
      "accel_z" => $nilai_accelz,
    ];
    $builder->insert($data);

    // Return success response
    return $this->respondCreated([
      "status" => "success",
      "Nilai Accel X" => $nilai_accelx,
      "Nilai Accel Y" => $nilai_accely,
      "Nilai Accel Z" => $nilai_accelz,
      "message" => "Data Sensor Gyro berhasil dimasukkan.",
    ]);
  }
}
