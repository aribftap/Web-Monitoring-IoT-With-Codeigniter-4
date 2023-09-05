<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;


class SensorApiGetar extends BaseController
{
  use ResponseTrait;

  public function getSensorData()
  {
    // Fetch data from Blynk API
    $url = "https://sgp1.blynk.cloud/external/api/get?token=j6x74589S3GflPaPQu6WZry88SMXpo98&pin=V0";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);

    // Check if cURL request was successful
    if ($response === false) {
      return $this->failServerError("Failed to fetch sensor data from Blynk API.");
    }

    // Check if the response is valid
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($httpCode !== 200) {
      return $this->failServerError("Invalid response from Blynk API: HTTP Code " . $httpCode);
    }

    curl_close($ch);

    // Extract sensor data from response
    $sensorData = $response;

    return $sensorData;
  }

  public function postSensorData()
  {
    // Get sensor data
    $sensorData = $this->getSensorData();

    // Validate data
    if (empty($sensorData)) {
      return $this->failValidationErrors("Nilai sensor diperlukan.");
    }

    // Ensure sensor value is an integer
    if (!is_numeric($sensorData)) {
      return $this->failValidationErrors(
        "Nilai sensor harus berupa bilangan bulat."
      );
    }
    $sensorValue = (int) $sensorData;

    // Insert data into database
    $db = db_connect();
    $builder = $db->table("sensor_getar");
    $data = [
      "nilai" => $sensorValue
    ];
    $builder->insert($data);

    // Check if data insertion was successful
    if ($db->affectedRows() === 0) {
      return $this->failServerError("Failed to insert sensor data into database.");
    }

    // Return success response
    return $this->respondCreated([
      "status" => "success",
      "Data Analog Sensor Getar" => $sensorValue,
      "message" => "Data Sensor Getar berhasil dimasukkan.",
    ]);
  }

  public function testPostGetar($sensorData)
  {
    // Validate data
    if (empty($sensorData)) {
      return $this->failValidationErrors("Nilai sensor diperlukan.");
    }

    // Validasi data
    if (!is_numeric($sensorData) || intval($sensorData) != $sensorData || strpos($sensorData, '.') !== false) {
      return $this->failValidationErrors("Nilai sensor harus berupa bilangan bulat.");
    }

    $sensorValue = $sensorData;

    // Insert data into database
    $db = db_connect();
    $builder = $db->table("sensor_getar");
    $data = [
      "nilai" => $sensorValue
    ];
    $builder->insert($data);

    // Check if data insertion was successful
    if ($db->affectedRows() === 0) {
      return $this->failServerError("Gagal memasukkan data sensor ke database.");
    }

    // Return success response
    return $this->respondCreated([
      "status" => "success",
      "Data Analog Sensor Getar" => $sensorValue,
      "message" => "Data Sensor Getar berhasil dimasukkan.",
    ]);
  }
}
