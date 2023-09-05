const express = require("./public/node_modules/express");
const http = require("http");
const socketio = require("./public/node_modules/socket.io/dist");
const mysql = require("./public/node_modules/mysql");
const cors = require("./public/node_modules/cors/lib");

// Create an Express app
const app = express();
const server = http.createServer(app);
app.use(cors());

// Create a Socket.io server
const io = socketio(server, {
  cors: {
    origin: "http://localhost:8080",
    credentials: true,
    methods: ["GET", "POST"],
  },
}).listen(8000);

// Create Mysql Connection Pool
const connection = mysql.createConnection({
  connectionLimit: 10,
  host: "localhost",
  user: "root",
  password: "",
  database: "db_pjl",
});

// Connect to MySQL database
connection.connect((err) => {
  if (err) throw err;
  console.log("Connected to MySQL database");
});

// Listen for connections
io.on("connection", (socket) => {
  console.log("A new client has connected");

  // Get data from the "sensor_getar" table
  socket.on("getGetarData", () => {
    setInterval(function () {
      // Query the database for the newest data
      const sql =
        'SELECT sensor_getar.nilai, DATE_FORMAT(sensor_getar.created_at, "%T") as created_at FROM sensor_getar ORDER BY sensor_getar.created_at DESC LIMIT 10';
      connection.query(sql, (error, results) => {
        if (error) {
          console.error(error);
        } else {
          const newGetarData = results.reverse().map((result) => {
            return {
              x: result.created_at,
              y: result.nilai,
            };
          });
          // Emit the newest data to the client
          socket.emit("newGetarData", newGetarData);
          console.log('DATA TERBARU SENSOR GETAR MASUK');
          console.log(newGetarData);
        }
      });
    }, 5000);
  });

  // Get data from the "sensor_gyro" table
  socket.on("getAccelData", () => {
    setInterval(function () {
      // Query the database for the newest data
      const sql =
        'SELECT sensor_gyro.accel_x, sensor_gyro.accel_y, sensor_gyro.accel_z, DATE_FORMAT(sensor_gyro.created_at, "%T") as created_at FROM sensor_gyro ORDER BY sensor_gyro.created_at DESC LIMIT 10';
      connection.query(sql, (error, results) => {
        if (error) {
          console.error(error);
        } else {
          const newAccelData = results.reverse().map((result) => {
            return {
              x: result.created_at,
              y1: result.accel_x,
              y2: result.accel_y,
              y3: result.accel_z
            };
          });
          // Emit the newest data to the client
          socket.emit("newAccelData", newAccelData);
          console.log('DATA TERBARU SENSOR GYRO ACCELERATION X, Y & Z MASUK');
          console.log(newAccelData);
        }
      });
    }, 5000);
  });


  // Get data from the "sensor_getar" table
  socket.on("getRealNotif", () => {
    setInterval(function () {
      // Query the database for the newest data
      const sql =
        'SELECT sensor_getar.nilai, DATE_FORMAT(sensor_getar.created_at, "%T") as created_at FROM sensor_getar ORDER BY sensor_getar.created_at DESC LIMIT 1';
      connection.query(sql, (error, results) => {
        if (error) {
          console.error(error);
        } else {
          const getNilai = results.reverse().map((result) => {
            return {
              nilai: result.nilai,
              waktu: result.created_at,
            };
          });
          // Emit the newest data to the client
          socket.emit("getNilai", getNilai);
          console.log('DATA TERBARU KEADAAN REL MASUK');
          console.log(getNilai);
        }
      });
    }, 5000);
  });
  // Handle disconnection event
  socket.on("disconnect", () => {
    console.log("Disconnected from server");
  });
});


// Start the server
const PORT = process.env.PORT || 3000;
server.listen(PORT, () => {
  console.log(`Server started on port ${PORT}`);
});
