<?= $this->extend("layout/templates") ?>

<?= $this->Section("content") ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><b> Data Sensor Getar </b></h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><b>Riwayat Sensor</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead align="center">
                  <tr>
                    <th>ID</th>
                    <th>Waktu</th>
                    <th>Sensor</th>
                    <th>Nilai</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($sensor as $s) : ?>
                    <tr align="center">
                      <th><?= $s["id"] ?></th>
                      <th><?= $s["created_at"] ?></th>
                      <th><?= $s["nama_sensor"] ?></th>
                      <th><?= $s["nilai"] ?></th>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot align="center">
                  <tr>
                    <th>ID</th>
                    <th>Waktu</th>
                    <th>Sensor</th>
                    <th>Nilai</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<?= $this->endSection() ?>