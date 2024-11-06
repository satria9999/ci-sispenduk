<!-- ########## START: MAIN PANEL ########## -->
<?= $this->session->flashdata('message'); ?>
<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Data Table</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Data Penduduk</h5>
        <p>Data-data Penduduk</p>
        <br>
        <a href="<?php echo site_url('penduduk/export_pdf'); ?>">
  <button class="btn btn-outline-primary" style="width: 100px; ">
    <i class="fa fa-download mg-r-10"></i> PDF
  </button></a>
  <a href="<?php echo site_url('penduduk/export_excelall'); ?>" <button class="btn btn-outline-success" style="width: 100px; ">
    <i class="fa fa-download mg-r-10"></i> EXCEL
  </button>
</a>

    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Tabel Penduduk</h6>
        <p class="mg-b-20 mg-sm-b-30">Data Penduduk Sukaluyu</p>
        <div class="table-container" style="overflow-x: auto;">
        <table id="table" class="table table-striped table-bordered" style="font-size: 90%;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>NIK</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat, Tanggal Lahir</th>
                    <th>Agama</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 0;
                foreach ($penduduk as $key) {
                    $no++;?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $key->nama; ?></td>
                        <td><?php echo $key->nik; ?></td>
                        <td><?php echo $key->jenis_kelamin; ?></td>
                        <td><?php echo $key->tempat_lahir; ?>, <?php echo $key->tanggal_lahir; ?></td>
                        <td><?php echo $key->agama; ?></td>
                        <td><?php echo $key->pendidikan; ?></td>
                        <td><?php echo $key->pekerjaan; ?></td>
                        <td>
                        <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo site_url('penduduk/edit_data/'. $key->id_penduduk); ?>"><i class="icon ion-edit"></i> Edit</a>
                                        <a class="dropdown-item deleteButton"  href="<?php echo site_url('penduduk/aksi_hapus_penduduk/'. $key->id_penduduk); ?>"> <i class="icon ion-trash-a"></i> Hapus Data</a>
                                    </div>
                                </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        </div><!-- table-container -->
    </div><!-- card -->
</div><!-- card -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
        $('#table').DataTable({
            
        });
    } );
</script>
<script>
    // Tambahkan script AJAX untuk menampilkan konfirmasi
    $(document).on('click', '.deleteButton', function() {
    var idPenduduk = $(this).data('id');

    // Tampilkan konfirmasi alert menggunakan JavaScript
    $.ajax({
        type: 'POST',
        url: '<?php echo site_url('penduduk/delete/'); ?>' + idPenduduk,
        dataType: 'json',
        success: function(response) {
            if (confirm(response.message)) {
                // Jika dikonfirmasi, panggil fungsi untuk menghapus data
                deleteData(idPenduduk);
            }
        }
    });
});

    // Fungsi untuk menghapus data setelah konfirmasi
    function deleteData(idPenduduk) {
    $.ajax({
        type: 'POST',
        url: '<?php echo site_url('penduduk/aksi_hapus_penduduk/'); ?>' + idPenduduk,
        success: function() {
            alert('Data berhasil dihapus');
            // Lakukan apa pun setelah data dihapus
        }
    });
}

</script>
    
<!-- ########## END: MAIN PANEL ########## -->
