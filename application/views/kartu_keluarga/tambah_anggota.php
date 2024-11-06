<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Sukaluyu</a>
    <a class="breadcrumb-item" href="index.html">Kartu Keluarga</a>
    <span class="breadcrumb-item active">Form Tambah Anggota</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Data Kartu Keluarga</h5>
        <p>Data-data Penduduk</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title"></h6><p></p>

        <form action="<?php echo site_url('Detail_kk/add_data') ?>" method="post" enctype="multipart/form-data">
            <?php foreach ($kartu_keluarga as $key) { ?>  
                <p style="text-align: left;">No Kartu Keluarga : <?php echo $key->nomer_kartukeluarga;?></p>
                <input class="form-control" type="hidden" value="<?php echo $key->id_kartukeluarga; ?>" name="id_kartukeluarga" readonly/>        
            <?php } ?>

            <div class="form-group">
                <label for="id_penduduk_select" class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">ID Penduduk</label>
                <select class="form-control select2-show-search" name="id_penduduk" id="id_penduduk_select" data-placeholder="Search Menggunakan NIK atau Nama">
                    <?php foreach ($penduduk as $key) { ?>
                        <option value="<?php echo $key->id_penduduk; ?>"><?php echo $key->nik; ?>: <?php echo $key->nama; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="nama" class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Nama *</label>
                <input class="form-control" type="text" name="nama" id="nama" readonly>
            </div>

            <div class="form-group">
                <label for="status" class="d-block tx-11 tx-uppercase tx-medium tx-spacing-1">Status</label>
                <select class="form-control select2" data-placeholder="Kategori" name="status">
                    <option label="Status"></option>
                    <option value="Kepala keluarga">Kepala Keluarga</option>
                    <option value="Istri">Istri</option>
                    <option value="Anak ke 1">Anak ke 1</option>
                    <option value="Anak ke 2">Anak ke 2</option>
                    <option value="Anak ke 3">Anak ke 3</option>
                    <option value="Anak ke 4">Anak ke 4</option>
                    <option value="Anak ke 5">Anak ke 5</option>
                    <option value="Anak ke 6">Anak ke 6</option>
                </select>
            </div><!-- form-group -->

            <button type="submit" class="btn btn-success pull-center">Submit</button>
        </form>
    </div><!-- card -->
</div><!-- sl-pagebody -->
<script>
      'use strict';

$('.select2').select2({
  minimumResultsForSearch: Infinity
});

// Select2 by showing the search
$('.select2-show-search').select2({
  minimumResultsForSearch: ''
});

// Select2 with tagging support
$('.select2-tag').select2({
  tags: true,
  tokenSeparators: [',', ' ']
});
</script>
<script>
    var selectElement = document.getElementById("id_penduduk_select");
    var namaElement = document.getElementById("nama");

    selectElement.addEventListener("change", function() {
        var selectedOption = selectElement.options[selectElement.selectedIndex];
        var idPenduduk = selectedOption.value;

        // Mengirim permintaan AJAX ke server untuk mendapatkan data nama
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var data = JSON.parse(xhr.responseText);
                namaElement.value = data.nama;
            }
        };
        xhr.open("GET", "<?php echo site_url('Penduduk/get_nama'); ?>?id=" + idPenduduk, true);
        xhr.send();
    });
</script>
