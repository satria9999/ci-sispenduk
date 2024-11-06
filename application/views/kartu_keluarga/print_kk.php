
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha384-j4RkP2tV4iSyYbD06M4ZUuYkNuZyGGf8R3qMpLql4Rn5rx6O5SkfQk98vX9bTJP2" crossorigin="anonymous">


    < <title>Print KK</title>

<!-- Starlight CSS -->
<!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/css/starlight.css"> -->
</head>
<body>
<center style="margin-bottom: 0;">
    <h2 style="margin-bottom: 0;">KARTU KELUARGA</h2>
    <?php foreach ($kartu_keluarga as $key): ?>
        <h3 style="margin-bottom: 20px;"> NO.<?php echo $key->nomer_kartukeluarga; ?></h3>
    <?php endforeach ?>
</center>

            <?php foreach ($kartu_keluarga as $key): ?>
        <!-- Left Column -->
        <table style="border-collapse: collapse; width: 100%; border-spacing: 0; margin-bottom: 20px;">
    <tr>
        <td style="padding: 0;">
        <?php foreach ($namaKepalaKeluarga as $nama): ?>
                <p style="margin: 0;"> Nama Kepala Keluarga: <?php echo ($nama != '') ? $nama : 'Tidak ditemukan'; ?> </p>
            <?php endforeach; ?>
        </td>
        <td style="padding: 0;">
            <p style="margin: 0;">Kecamatan : <?php echo $key->kecamatan; ?></p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0;">
        <p style="margin: 0;">Alamat : <?php echo $key->alamat; ?></p>
        </td>
        <td style="padding: 0;">
            <p style="margin: 0;">Kabupaten/Kota : <?php echo $key->kabupaten; ?></p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0;">
            <p style="margin: 0;">RT/RW : <?php echo $key->rt; ?>/<?php echo $key->rw; ?></p>
        </td>
        <td style="padding: 0;">
            <p style="margin: 0;">Kode Pos : <?php echo $key->kode_pos; ?></p>
        </td>
    </tr>
    <tr>
        <td style="padding: 0;">
            <p style="margin: 0;">Desa/Kelurahan : <?php echo $key->desa; ?></p>
        </td>
        <td style="padding: 0;">
            <p style="margin: 0;">Provinsi : <?php echo $key->provinsi; ?></p>
        </td>
    </tr>
</table>



<?php endforeach; ?>

<?php if (!empty($penduduk)): ?>

<table style="border-collapse: collapse; width: 100%; margin-bottom: 20px;">
    <thead>
        <tr>
            <th style="border: 1px solid #ddd; padding: 8px;">No</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Nama</th>
            <th style="border: 1px solid #ddd; padding: 8px;">NIK</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Jenis Kelamin</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Tempat Lahir</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Tanggal Lahir</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Agama</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Pendidikan</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Pekerjaan</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        foreach ($penduduk as $key):
            $no++;
        ?>
            <tr>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $no; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->nama; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->nik; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->jenis_kelamin; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->tempat_lahir; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->tanggal_lahir; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->agama; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->pendidikan; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->pekerjaan; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<table style="border-collapse: collapse; width: 100%;">
    <thead>
        <tr>
            <th rowspan="2" style="border: 1px solid #ddd; padding: 8px;">No</th>
            <th rowspan="2" style="border: 1px solid #ddd; padding: 8px;">Status Perkawinan</th>
            <th rowspan="2" style="border: 1px solid #ddd; padding: 8px;">Status dalam Keluarga</th>
            <th rowspan="2" style="border: 1px solid #ddd; padding: 8px;">Kewarganegaraan</th>
            <th colspan="2" style="border: 1px solid #ddd; padding: 8px;">Dokumen Imigrasi</th>
            <th colspan="2" style="border: 1px solid #ddd; padding: 8px;">Nama Orang Tua</th>
        </tr>
        <tr>
        <th style="border: 1px solid #ddd; padding: 8px;">No. Paspor</th>
            <th style="border: 1px solid #ddd; padding: 8px;">No. KITAP</th>
        <th style="border: 1px solid #ddd; padding: 8px;">Ayah</th>
            <th style="border: 1px solid #ddd; padding: 8px;">Ibu</th>
        </tr>
    </thead>
    <tbody>
        <?php  $no = 0;
         foreach ($penduduk as $key): 
              $no++;?>
            <tr>
            <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $no; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->status_perkawinan; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;">
                    <?php
                    $status =  $this->db->get_where('detail_kartukeluarga', array('id_penduduk' => $key->id_penduduk))->result_array();
                    foreach ($status as $s) {
                        echo $s['status'];
                    }
                    ?>
                </td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->kewarganegaraan; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;">-</td>
                <td style="border: 1px solid #ddd; padding: 8px;">-</td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->ayah; ?></td>
                <td style="border: 1px solid #ddd; padding: 8px;"><?php echo $key->ibu; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<p>Data penduduk tidak ditemukan.</p>
<?php endif; ?>


<!-- ... (your script tags) ... -->
</body>