<!-- ########## START: MAIN PANEL ########## -->
<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Data Table</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Detail Data Keluarga</h5>
        <p>Data Anggota Keluarga</p>
        <br>
        <?php foreach ($kartu_keluarga as $key) : ?>
    <a href="<?= site_url('kartu_keluarga/tambah_anggota/'. $key->id_kartukeluarga); ?>" <button class="btn btn-primary" style="width: 100px; ">
    <i class="icon ion-plus-circled"></i> Tambah
  </button>
</a>
    </a> 
    <a href="<?= site_url('Detail_kk/export_pdf_kk/'. $key->id_kartukeluarga); ?>"" <button class="btn btn-success" style="width: 100px; ">
    <i class="icon ion-document-text"></i> 
        PDF
  </button>
</a>
<?php endforeach; ?>
    </div><!-- sl-page-title -->

</div>
    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">KARTU KELUARGA</h6>
        <!--<p class="mg-b-20 mg-sm-b-30">Searching, ordering, and paging goodness will be immediately added to the
            table, as shown in this example.</p>-->
            <div class="center" style="overflow-x: auto;">
            <?php
                    foreach ($kartu_keluarga as $key) {
                ?>
            <p style="text-align: left;">NO Kartu Keluarga : <?php echo $key->nomer_kartukeluarga;?> </p>
            <?php foreach ($namaKepalaKeluarga as $nama): ?>
    <p style="text-align: left;">
        Nama Kepala Keluarga: <?php echo ($nama != '') ? $nama : 'Tidak ditemukan'; ?>
    </p>
<?php endforeach; ?>

            <p style="text-align: left;">Alamat : <?php echo $key->alamat;?></p>
            <p style="text-align: left;">RT/RW : <?php echo $key->rt;?>/<?php echo $key->rw;?></p>
            <p style="text-align: left;">Desa : <?php echo $key->desa;?></p>
            <p style="text-align: left;">Kecamatan : <?php echo $key->kecamatan;?></p>
            <p style="text-align: left;">Kabupaten : <?php echo $key->kabupaten;?></p>
            <p style="text-align: left;">Provinsi : <?php echo $key->provinsi;?></p>
            <p style="text-align: left;">Kode Pos : <?php echo $key->kode_pos;?></p>
</div>
                    <?php } ?>
        <div class="table-container" style="overflow-x: auto;">
            <table id="datatable1" class="table display responsive nowrap" style="font-size: 80%;">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Status Perkawinan</th>
                <th>Tanggal Perkawinan</th>
                <th>Status dalam Keluarga</th>
                <th>Kewarganegaraan</th>
                <th>Ayah</th>
                <th>Ibu</th>
                <th>Action</th>
                </tr>
            </thead>
                <tbody>
                <?php if (!empty($penduduk)): ?>
    <h4>Detail Anggota Kartu keluarga</h4>
    <?php 
     $no = 0;
     foreach ($penduduk as $key):
     $no++; ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $key->nama; ?></td>
                        <td><?php echo $key->nik; ?></td>
                        <td><?php echo $key->jenis_kelamin; ?></td>
                        <td><?php echo $key->tempat_lahir; ?></td>
                        <td><?php echo $key->tanggal_lahir; ?></td>
                        <td><?php echo $key->agama; ?></td>
                        <td><?php echo $key->pendidikan; ?></td>
                        <td><?php echo $key->pekerjaan; ?></td>
                        <td><?php echo $key->status_perkawinan; ?></td>
                        <td><?php echo $key->tanggal_kawin; ?></td>
                        <td><?php  $status =  $this->db->get_where('detail_kartukeluarga' , array('id_penduduk' => $key->id_penduduk)) -> result_array();
                        foreach ($status as $s): ?>
                        <?php echo $s['status']?> 
                        <?php endforeach ?>    </td>
                        <td><?php echo $key->kewarganegaraan; ?></td>
                        <td><?php echo $key->ayah; ?></td>
                        <td><?php echo $key->ibu; ?></td>
                        <td>
                        <div class="btn-group">
                                    <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="<?php echo site_url('penduduk/edit_data/'. $key->id_penduduk); ?>">Edit</a>
                                        <a class="dropdown-item" href="<?php echo site_url('penduduk/delete/'. $key->id_penduduk); ?>" onclick="myFunction();">Delete</a>
                                    </div>
                                </div>
                        </td>
        <!-- Tambahkan informasi lain yang ingin ditampilkan -->
    <?php endforeach; ?>
<?php else: ?>
    <p>Data penduduk tidak ditemukan.</p>
<?php endif; ?>
                </tbody>
            </table>
        </div><!-- table-container -->
    </div><!-- card -->
    <script>
                    function myFunction() {
                        if(!confirm('Are you sure to delete this item! ?')){
                            event.preventDefault();
                            return;
                        }
                        return true;
                    }
                </script>
</div><!-- card -->

<!-- ########## END: MAIN PANEL ########## -->