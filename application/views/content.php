 <!-- ########## START: MAIN PANEL ########## -->
       <link rel = "stylesheet" href = "https://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css"/>
     <script src="https://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
     <link rel="stylesheet" href="<?php echo base_url(); ?>assets/leaflet/leaflet.css" />
<script src="<?php echo base_url(); ?>assets/leaflet/leaflet.js"></script>
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="<?php echo base_url('Dashboard/Dashboard');?>">Sukaluyu</a>
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">

        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 bg-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Data Penduduk</h6>
                <a href="<?php echo base_url('Dashboard/lihat_penduduk');?>" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                
                <h6 class="mg-b-0 tx-white tx-lato tx-bold">Jumlah Penduduk:</h6>
                <?php
                if (isset($jumlahPenduduk)) {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">' . $jumlahPenduduk . '</h4>';
                } else {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">Data tidak tersedia</h4>';
                }
                ?>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Penduduk Desa</span>
                  <h6 class="tx-white mg-b-0">Desa Sukaluyu</h6>
                </div>
                <div>
              <span class="tx-11 tx-white-6">Tahun</span>
              <h6 class="tx-white mg-b-0"><?php echo date('Y'); ?></h6>
          </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Data Kartu Keluarga</h6>
                <a href="<?php echo base_url('Dashboard/lihat_kartukeluarga');?>" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
              <h6 class="mg-b-0 tx-white tx-lato tx-bold">Jumlah Kartu Keluarga:</h6>
              <?php
                if (isset($jumlah_kartukeluarga)) {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">' . $jumlah_kartukeluarga. '</h4>';
                } else {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">Data tidak tersedia</h4>';
                }
                ?>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Kartu Keluarga</span>
                  <h6 class="tx-white mg-b-0">Desa Sukaluyu</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tahun</span>
                  <h6 class="tx-white mg-b-0"><?php echo date('Y'); ?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Data Jumlah Pekerja</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
              <h6 class="mg-b-0 tx-white tx-lato tx-bold">Jumlah Pekerja:</h6>
              <?php
                if (isset($Pekerja)) {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">' . $Pekerja. '</h4>';
                } else {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">Data tidak tersedia</h4>';
                }
                ?>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              <div>
                  <span class="tx-11 tx-white-6">Jumlah Pekerja</span>
                  <h6 class="tx-white mg-b-0">Desa Sukaluyu</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tahun</span>
                  <h6 class="tx-white mg-b-0"><?php echo date('Y'); ?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Data Jumlah Pengangguran</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
              <h6 class="mg-b-0 tx-white tx-lato tx-bold">Jumlah Pengangguran:</h6>
              <?php
                if (isset($Pengangguran)) {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">' . $Pengangguran. '</h4>';
                } else {
                    echo '<h4 class="mg-b-0 tx-white tx-lato tx-bold">Data tidak tersedia</h4>';
                }
                ?>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
              <div>
                  <span class="tx-11 tx-white-6">Jumlah Pengangguran</span>
                  <h6 class="tx-white mg-b-0">Desa Sukaluyu</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tahun</span>
                  <h6 class="tx-white mg-b-0"><?php echo date('Y'); ?></h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->

        <div class="container">
          <div class="row">
            <div class="col-8"><div class="card pd-10 pd-sm-20 mg-t-20">
    <div class="card-body">
        <h6 class="card-title">Informasi Lokasi</h6>
        <p class="card-text">Nama Lokasi:Desa Sukaluyu</p>
        <p class="card-text">Alamat: Jl. Raya Telukjambe No. 1, Dusun Kalipandan RT. 003/001 Kab Karawang 41361, Jawa Barat – Indonesia</p>
     

      Peta akan ditampilkan di sini 
        <div id="map"class="ht-300 ht-sm-400 bd bg-gray-100"></div>
 </div>
</div>
</div>
            <div class="col-4">
              <div class="mt-4">
        <div class="card">
              <div class="card-body">
                  <h6 class="card-title">Pie Chart</h6>
                  <p class="card-text">Distribusi Penduduk berdasarkan Kategori</p>
                  <div class="chart-container">
                      <canvas id="flotPie2" class="ht-200 ht-sm-250"></canvas>
                  </div>
              </div>
        </div> </div>
        </div>
        </div>


      </div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2023. University Horizon Indonesia</div>
          <div>Made by Horizon.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var ctx = document.getElementById('flotPie2').getContext('2d');
        var data = {
            labels: ['Kategori 1: 1-17 tahun', 'Kategori 2: 18-40 tahun', 'Kategori 3: 41-60 tahun', 'Kategori 4: 61-90 tahun'],
            datasets: [{
                data: <?php echo json_encode(array_values($dataForPieChart)); ?>,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50'], // Replace with your colors
            }]
        };

        var options = {
            tooltips: {
                callbacks: {
                    label: function (tooltipItem, data) {
                        var dataset = data.datasets[tooltipItem.datasetIndex];
                        var total = dataset.data.reduce(function (previousValue, currentValue, currentIndex, array) {
                            return previousValue + currentValue;
                        });
                        var currentValue = dataset.data[tooltipItem.index];
                        var percentage = Math.round(((currentValue / total) * 100));
                        return data.labels[tooltipItem.index] + ': ' + currentValue + ' (' + percentage + '%)';
                    }
                }
            },
            responsive: true,
            maintainAspectRatio: false,
            legend: {
                display: true,
                position: 'bottom',
            }
        };

        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: options
        });

        // Add legend
        var legend = myPieChart.generateLegend();
        document.getElementById('legend').innerHTML = legend;
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Koordinat Lokasi
        var latitude = -6.33058;
        var longitude = 107.29257;

        // Inisialisasi Peta Leaflet
        var map = L.map('map').setView([latitude, longitude], 15);

        // Tambahkan Peta OSM (OpenStreetMap)
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);

        // Tambahkan Penanda pada Lokasi
        L.marker([latitude, longitude]).addTo(map)
            .bindPopup('Lokasi Sukaluyu')
            .openPopup();
    });
</script>
