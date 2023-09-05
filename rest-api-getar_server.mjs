import axios from './public/node_modules/axios/index.js';

const url = 'http://localhost:8080/api/SensorApiGetar/postSensorData';

function getData() {
  axios.post(url)
    .then(response => {
      console.log(`statusCode: ${response.status}`);
      console.log("Data Analog Sensor Getar =", response.data);
      // Panggil fungsi getData lagi setelah mendapatkan data
      setTimeout(getData, 5000); // Berikan fungsi getData sebagai argumen
    })
    .catch(error => {
      console.error(error);
      // Panggil fungsi getData lagi setelah terjadi error
      setTimeout(getData, 5000); // Berikan fungsi getData sebagai argumen
    });
}

getData();
