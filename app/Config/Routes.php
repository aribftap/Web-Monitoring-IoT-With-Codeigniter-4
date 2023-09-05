<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get("/", "Home::index");
$routes->get("/Pages", "Pages::index");
$routes->get("/Pages/sensor_getar", "Pages::sensor_getar", ['as' => 'sensor_getar']);
$routes->get("/Pages/riwayat_sensor_gyro", "Pages::sensor_gyro", ['as' => 'sensor_gyro']);
// Rute untuk Sensor Getar
$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('SensorApiGetar/getSensorData', 'SensorApiGetar::getSensorData');
    $routes->post('SensorApiGetar/postSensorData', 'SensorApiGetar::postSensorData');
    $routes->post('SensorApiGetar/testPostGetar/(:segment)', 'SensorApiGetar::testPostGetar/$1');
});

// Rute untuk Sensor Gyro
$routes->group('api', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('SensorApiGyro/getSensorData1', 'SensorApiGyro::getSensorData1');
    $routes->get('SensorApiGyro/getSensorData2', 'SensorApiGyro::getSensorData2');
    $routes->get('SensorApiGyro/getSensorData3', 'SensorApiGyro::getSensorData3');
    $routes->get('SensorApiGyro/getSensorData4', 'SensorApiGyro::getSensorData4');
    $routes->post('SensorApiGyro/postSensorData', 'SensorApiGyro::postSensorData');
    $routes->post('SensorApiGyro/testPostGyro/(:segment)/(:segment)/(:segment)', 'SensorApiGyro::testPostGyro/$1/$2/$3');
});
// $routes->group("api", ["namespace" => "App\Controllers"], static function ($routes) {
//     $routes->get(
//         "/SensorApiGetar/getSensorData",
//         "SensorApiGetar::getSensorData"
//     );
//     $routes->post(
//         "/SensorApiGetar/postSensorData",
//         "SensorApiGetar::postSensorData"
//     );
//     $routes->post(
//         "/SensorApiGetar/testPostGetar/(:segment)",
//         "SensorApiGetar::testPostGetar/$1"
//     );
// });
// $routes->group("api", ["namespace" => "App\Controllers"], static function ($routes) {
//     $routes->get(
//         "api/SensorApiGyro/getSensorData1",
//         "SensorApiGyro::getSensorData1"
//     );
//     $routes->get(
//         "/SensorApiGyro/getSensorData2",
//         "SensorApiGyro::getSensorData2"
//     );
//     $routes->get(
//         "/SensorApiGyro/getSensorData3",
//         "SensorApiGyro::getSensorData3"
//     );
//     $routes->get(
//         "/SensorApiGyro/getSensorData4",
//         "SensorApiGyro::getSensorData4"
//     );
//     $routes->post(
//         "api/SensorApiGyro/postSensorData",
//         "SensorApiGyro::postSensorData"
//     );
//     $routes->post(
//         "/SensorApiGyro/testPostGyro/(:segment)/(:segment)/(/segment)",
//         "SensorApiGyro::testPostGyro/$1/$2/$3"
//     );
