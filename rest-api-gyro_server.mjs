import axios from './public/node_modules/axios/index.js';
const url = 'http://localhost:8080/api/SensorApiGyro/postSensorData';

function getData() {
  axios.post(url)
    .then(response => {
      console.log(`statusCode: ${response.status}`);
      console.log(response.data);
      // Panggil fungsi getData lagi setelah mendapatkan data
      getData();
      setTimeout(getData, 5000); // Berikan fungsi getData sebagai argumen
    })
    .catch(error => {
      console.error(error);
      // Panggil fungsi getData lagi setelah terjadi error
      getData();
      setTimeout(getData, 5000); // Berikan fungsi getData sebagai argumen
    });
}

getData();
