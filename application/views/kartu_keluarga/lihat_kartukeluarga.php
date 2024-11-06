<!-- ########## START: MAIN PANEL ########## -->
<?= $this->session->flashdata('message'); ?>
<nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Tables</a>
    <span class="breadcrumb-item active">Data Table</span>
</nav>

<div class="sl-pagebody">
    <div class="sl-page-title">
        <h5>Data Kartu Keluarga</h5>
        <p>Data-data Penduduk</p>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40">
        <h6 class="card-body-title">Tabel Penduduk</h6>
        <p class="mg-b-20 mg-sm-b-30">Searching, ordering, and paging goodness will be immediately added to the
            table, as shown in this example.</p>

        <div class="table-container" style="overflow-x: auto;">
            <table id="datatable1" class="table table-striped" style="font-size: 80%;">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nomor Kartu Keluarga</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 0;
                    foreach ($kartu_keluarga as $key) {
                        $no++;?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $key->nomer_kartukeluarga; ?></td>
                            <td>
                                <a href="<?php echo site_url('Detail_kk/detail_anggotakk/'. $key->id_kartukeluarga); ?>"
                                   class="btn btn-success btn-circle btn-sm">Detail
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div><!-- table-container -->
    </div><!-- card -->
</div><!-- card -->
<!-- ... Your HTML code ... -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#datatable1').DataTable({
            
        });
    } );
</script>
<!-- ... The rest of your HTML code ... -->


<!-- ########## END: MAIN PANEL ########## -->
