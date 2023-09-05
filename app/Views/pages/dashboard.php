<?= $this->extend("layout/templates") ?>

<?= $this->Section("content") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><b>Dashboard</b></h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-danger elevation-1"><i class="far fa-lightbulb"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">LED MERAH</span>
              <button id="ledMerah-status-btn" class="btn bg-warning">MENUNGGU DATA</button>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="far fa-lightbulb"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">LED HIJAU</span>
              <button id="ledHijau-status-btn" class="btn bg-warning">MENUNGGU DATA</button>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><img src="<?= base_url() ?>/dist/img/track.png" width="50px" height="50px" alt="railway"></span>

            <div class="info-box-content">
              <span class="info-box-text">Keadaan Rel</span>
              <button id="rel-status-btn" class="btn bg-warning">MENUNGGU DATA</button>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-train"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Info Kereta Yang Melintas</span>
              <button id="kereta-status-btn" class="btn bg-warning">MENUNGGU DATA</button>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-6">
          <!-- GETAR LINE CHART -->
          <div class="card card-teal">
            <div class="card-header">
              <h3 class="card-title">Sensor Getar</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body bg-white">
              <div id="chart1div" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col (LEFT) -->
        <div class="col-md-6">
          <!-- GYRO ACCEL LINE CHART -->
          <div class="card card-teal">
            <div class="card-header">
              <h3 class="card-title">Sensor Gyro | Accelerometer Axis X</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body bg-white">
              <div id="chartAccelX" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col (RIGHT) -->
        <div class="col-md-6">
          <!-- GYRO ACCEL LINE CHART -->
          <div class="card card-teal">
            <div class="card-header">
              <h3 class="card-title">Sensor Gyro | Accelerometer Axis Y</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body bg-white">
              <div id="chartAccelY" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col (RIGHT) -->
        <div class="col-md-6">
          <!-- GYRO ACCEL LINE CHART -->
          <div class="card card-teal">
            <div class="card-header">
              <h3 class="card-title">Sensor Gyro | Accelerometer Axis Z</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body bg-white">
              <div id="chartAccelZ" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col (RIGHT) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Connect to the Socket.io server
    var socket = io("http://localhost:8000");

    // Check if the socket is connected
    socket.on("connect", function() {
      console.log("Socket RealNotif is connected.");
    });


    // Get a reference to the button elements
    const keretaStatusBtn = document.querySelector('#kereta-status-btn');
    const relStatusBtn = document.querySelector('#rel-status-btn');
    const ledMerahBtn = document.querySelector('#ledMerah-status-btn');
    const ledHijauBtn = document.querySelector('#ledHijau-status-btn');

    socket.on("getNilai", function(data) {
      // Extract the data from the response
      var newNilai = parseInt(data[0].nilai);
      console.log(newNilai);

      // Update for function LedStatus, RelStatus and KeretaStatus based on the new value of "nilai"
      updateLedStatusBtn(newNilai); // Call the function to update the button text
      updateRelStatusBtn(newNilai); // Call the function to update the button text
      updateKeretaStatusBtn(newNilai); // Call the function to update the button text


      // Define a function to update the button text for rel status
      function updateLedStatusBtn(newNilai) {
        if (newNilai > 845) {
          ledMerahBtn.textContent = 'OFF';
          ledMerahBtn.classList.remove('bg-warning');
          ledMerahBtn.classList.remove('bg-success');
          ledMerahBtn.classList.add('bg-danger');
          ledHijauBtn.textContent = 'ON';
          ledHijauBtn.classList.remove('bg-warning');
          ledHijauBtn.classList.remove('bg-danger');
          ledHijauBtn.classList.add('bg-success');
        } else {
          ledMerahBtn.textContent = 'ON';
          ledMerahBtn.classList.remove('bg-warning');
          ledMerahBtn.classList.remove('bg-danger');
          ledMerahBtn.classList.add('bg-success');
          ledHijauBtn.textContent = 'OFF';
          ledHijauBtn.classList.remove('bg-warning');
          ledHijauBtn.classList.remove('bg-success');
          ledHijauBtn.classList.add('bg-danger');
        }
      }

      // Define a function to update the button text for rel status
      function updateRelStatusBtn(newNilai) {
        if (newNilai > 845) {
          relStatusBtn.textContent = 'KOSONG';
          relStatusBtn.classList.remove('bg-warning');
          relStatusBtn.classList.remove('bg-danger');
          relStatusBtn.classList.add('bg-success');
        } else {
          relStatusBtn.textContent = 'TERISI';
          relStatusBtn.classList.remove('bg-warning');
          relStatusBtn.classList.remove('bg-success');
          relStatusBtn.classList.add('bg-danger');
        }
      }

      // Define a function to update the button text for kereta status
      function updateKeretaStatusBtn(newNilai) {
        if (newNilai > 845) {
          keretaStatusBtn.textContent = 'TIDAK ADA KERETA';
          keretaStatusBtn.classList.remove('bg-warning');
          keretaStatusBtn.classList.remove('bg-danger');
          keretaStatusBtn.classList.add('bg-success');
        } else {
          keretaStatusBtn.textContent = 'ADA KERETA';
          keretaStatusBtn.classList.remove('bg-warning');
          keretaStatusBtn.classList.remove('bg-success');
          keretaStatusBtn.classList.add('bg-danger');
        }
      }

    });

    // Listen for the "disconnect" event
    socket.on('disconnect', function() {
      console.log('Socket RealNotif is disconnected.');
    });

    // Trigger the "newData" event to fetch the initial data from the server
    socket.emit('getRealNotif');
  });
</script>

<script>
  // Connect to the Socket.io server
  var socket = io('http://localhost:8000');

  // Check if the socket is connected
  socket.on('connect', function() {
    console.log('Socket Getar is connected.');
  });

  // Listen for the "newGetarData" event
  socket.on('newGetarData', function(data) {
    // Extract the data from the response
    var newData = data.map(function(item) {
      return item.y;
    });
    var newCategories = data.map(function(item) {
      return item.x;
    });
    console.log(newCategories); // Debugging line

    // Define the chart options
    var chartOptions = {
      series: [{
        name: "Output Analog | Sensor Getar",
        data: []
      }, ],
      chart: {
        height: 250,
        type: 'line',
        dropShadow: {
          enabled: true,
          color: '#000',
          top: 18,
          left: 7,
          blur: 10,
          opacity: 0.2
        },
        toolbar: {
          show: false
        }
      },
      colors: ['#58B6EE'],
      dataLabels: {
        enabled: true,
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: 'Data Sensor Getar',
        align: 'left'
      },
      grid: {
        borderColor: '#e7e7e7',
        row: {
          colors: ['#f3f3f3', 'transparent'],
          opacity: 0.5
        },
      },
      markers: {
        size: 1
      },
      xaxis: {
        categories: [],
        title: {
          text: 'Waktu'
        }
      },
      yaxis: {
        title: {
          text: 'Analog'
        },
      },
      legend: {
        showForSingleSeries: true,
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5
      }
    };

    // Initialize the chart
    var chart = new ApexCharts(
      document.querySelector("#chart1div"),
      chartOptions
    );

    // Render the chart
    chart.render();

    // Update the chart
    chart.updateSeries([{
      name: "Output Sensor Getar",
      data: newData,
      color: "#0E185F" // Set the color for series 1
    }]);
    chart.updateOptions({
      xaxis: {
        categories: newCategories
      }
    });
    console.log('DATA TERBARU SENSOR GETAR MASUK'); // Debugging line
  });

  // Listen for the "disconnect" event
  socket.on('disconnect', function() {
    console.log('Socket Getar is disconnected.');
  });

  // Trigger the "newData" event to fetch the initial data from the server
  socket.emit('getGetarData');
</script>
<script>
  // Connect to the Socket.io server
  var socket = io('http://localhost:8000');

  // Check if the socket is connected
  socket.on('connect', function() {
    console.log('Socket Accel connected.');
  });

  // Update the charts
  socket.on('newAccelData', function(data) {
    // Extract the data from the response
    var newData1 = data.map(function(item) {
      return item.y1;
    });
    var newCategories = data.map(function(item) {
      return item.x;
    });

    // Define the chart Accel axis X
    var chartAccelX = {
      series: [{
        name: "Accelerometer | Axis X",
        data: []
      }, ],
      chart: {
        height: 250,
        type: 'line',
        dropShadow: {
          enabled: true,
          color: '#000',
          top: 18,
          left: 7,
          blur: 10,
          opacity: 0.2
        },
        toolbar: {
          show: false
        }
      },
      colors: ['#30E3DF'],
      dataLabels: {
        enabled: true,
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: 'Data Sensor Gyro',
        align: 'left'
      },
      grid: {
        borderColor: '#e7e7e7',
        row: {
          colors: ['#f3f3f3', 'transparent'],
          opacity: 0.5
        },
      },
      markers: {
        size: 1
      },
      xaxis: {
        categories: [0, 0, 0, 0, 0, 0, 0],
        title: {
          text: 'Waktu'
        }
      },
      yaxis: {
        title: {
          text: 'Akselerasi (m/s²)'
        },
      },
      legend: {
        showForSingleSeries: true,
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5
      },
    };

    // Initialize and render the charts
    var chartX = new ApexCharts(
      document.querySelector("#chartAccelX"),
      chartAccelX);

    chartX.render();


    chartX.updateSeries([{
      name: "Accelerometer | Axis X",
      data: newData1
    }]);
    chartX.updateOptions({
      xaxis: {
        categories: newCategories
      }
    });

    console.log('DATA TERBARU ACCELEROMETER AXIS X MASUK');
  });

  // Listen for the "disconnect" event
  socket.on('disconnect', function() {
    console.log('Socket Accel is disconnected.');
  });

  // Trigger the "newData" event to fetch the initial data from the server
  socket.emit('getAccelData');
</script>
<script>
  // Connect to the Socket.io server
  var socket = io('http://localhost:8000');

  // Check if the socket is connected
  socket.on('connect', function() {
    console.log('Socket Accel Axis Y connected.');
  });

  // Update the charts
  socket.on('newAccelData', function(data) {
    // Extract the data from the response
    var newData2 = data.map(function(item) {
      return item.y2;
    });
    var newCategories = data.map(function(item) {
      return item.x;
    });

    // Define the chart Accel axis Y
    var chartAccelY = {
      series: [{
        name: "Accelerometer | Axis Y",
        data: []
      }, ],
      chart: {
        height: 250,
        type: 'line',
        dropShadow: {
          enabled: true,
          color: '#000',
          top: 18,
          left: 7,
          blur: 10,
          opacity: 0.2
        },
        toolbar: {
          show: false
        }
      },
      colors: ['#FF9A00'],
      dataLabels: {
        enabled: true,
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: 'Data Sensor Gyro',
        align: 'left'
      },
      grid: {
        borderColor: '#e7e7e7',
        row: {
          colors: ['#f3f3f3', 'transparent'],
          opacity: 0.5
        },
      },
      markers: {
        size: 1
      },
      xaxis: {
        categories: [0, 0, 0, 0, 0, 0, 0],
        title: {
          text: 'Waktu'
        }
      },
      yaxis: {
        title: {
          text: 'Akselerasi (m/s²)'
        },
      },
      legend: {
        showForSingleSeries: true,
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5
      },
    };
    // Initialize and render the charts
    var chartY = new ApexCharts(document.querySelector("#chartAccelY"), chartAccelY);
    chartY.render();



    chartY.updateSeries([{
      name: "Accelerometer | Axis Y",
      data: newData2
    }]);
    chartY.updateOptions({
      xaxis: {
        categories: newCategories
      }
    });

    console.log('DATA TERBARU ACCELEROMETER AXIS Y MASUK');
  });

  // Listen for the "disconnect" event
  socket.on('disconnect', function() {
    console.log('Socket Accel is disconnected.');
  });

  // Trigger the "newData" event to fetch the initial data from the server
  socket.emit('getAccelData');
</script>
<script>
  // Connect to the Socket.io server
  var socket = io('http://localhost:8000');

  // Check if the socket is connected
  socket.on('connect', function() {
    console.log('Socket Accel Axis Z connected.');
  });

  // Update the charts
  socket.on('newAccelData', function(data) {
    // Extract the data from the response
    var newData3 = data.map(function(item) {
      return item.y3;
    });
    var newCategories = data.map(function(item) {
      return item.x;
    });

    // Define the chart Accel axis Z
    var chartAccelZ = {
      series: [{
        name: "Accelerometer | Axis Z",
        data: []
      }, ],
      chart: {
        height: 250,
        type: 'line',
        dropShadow: {
          enabled: true,
          color: '#000',
          top: 18,
          left: 7,
          blur: 10,
          opacity: 0.2
        },
        toolbar: {
          show: false
        }
      },
      colors: ['#38E54D'],
      dataLabels: {
        enabled: true,
      },
      stroke: {
        curve: 'smooth'
      },
      title: {
        text: 'Data Sensor Gyro',
        align: 'left'
      },
      grid: {
        borderColor: '#e7e7e7',
        row: {
          colors: ['#f3f3f3', 'transparent'],
          opacity: 0.5
        },
      },
      markers: {
        size: 1
      },
      xaxis: {
        categories: [0, 0, 0, 0, 0, 0, 0],
        title: {
          text: 'Waktu'
        }
      },
      yaxis: {
        title: {
          text: 'Akselerasi (m/s²)'
        },
      },
      legend: {
        showForSingleSeries: true,
        position: 'top',
        horizontalAlign: 'right',
        floating: true,
        offsetY: -25,
        offsetX: -5
      },
    };
    // Initialize and render the charts
    var chartZ = new ApexCharts(document.querySelector("#chartAccelZ"), chartAccelZ);
    chartZ.render();


    chartZ.updateSeries([{
      name: "Accelerometer | Axis Z",
      data: newData3
    }]);
    chartZ.updateOptions({
      xaxis: {
        categories: newCategories
      }
    });

    console.log('DATA TERBARU ACCELEROMETER AXIS Z MASUK');
  });

  // Listen for the "disconnect" event
  socket.on('disconnect', function() {
    console.log('Socket Accel is disconnected.');
  });

  // Trigger the "newData" event to fetch the initial data from the server
  socket.emit('getAccelData');
</script>
<?= $this->endSection() ?>