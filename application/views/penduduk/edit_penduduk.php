<?php $this->load->view('header'); ?>
<?php
foreach ($penduduk as $row) {
?>

<?php if ($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
<?php echo $this->session->flashdata('success'); ?>
</div>
<?php endif; ?>

<div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Form Edit Penduduk</h5>
                <p>Form yang digunakan untuk edit data penduduk.</p>
            </div><!-- sl-page-title -->
            <div class="col-xl-7 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-30 form-layout form-layout-4">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Edit Data Penduduk</h6>
                    <p class="mg-b-30 tx-gray-600"></p>
                    <form action="<?php echo site_url('penduduk/update/'.$row->id_penduduk)?>" method="post" enctype="multipart/form-data" >
                        <!-- Nama Lengkap -->
                        <div class="row row-xs">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nama
                                Lengkap:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="nama" value="<?php echo $row->nama; ?>" class="form-control" placeholder="Masukan Nama Lengkap">
                            </div>
                        </div><!-- row -->
                        <!-- NIK -->
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> NIK:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="nik" value="<?php echo $row->nik; ?>" class="form-control" placeholder="Masukan NIK" readonly>
                            </div>
                        </div>
                        <!-- Jenis Kelamin -->
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Jenis Kelamin:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="jenis_kelamin" value="<?php echo $row->jenis_kelamin; ?>" class="form-control" placeholder="Masukan Jenis Kelamin">
                            </div>
                        </div>
                        <!-- Tempat Lahir  -->
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Tempat Lahir:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->tempat_lahir; ?>" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                            </div>
                        </div>

                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Tanggal Lahir:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="date" value="<?php echo $row->tanggal_lahir; ?>" name="tanggal_lahir" class="form-control fc-datepicker" placeholder="Bulan/Tanggal/Tahun">
                            </div>
                        </div>

                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Agama:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->agama; ?>" name="agama" class="form-control" placeholder="Masukan Agama">
                            </div>
                        </div>

                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Alamat:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea rows="2" name="alamat" class="form-control" placeholder="Masukan Alamat"><?php echo $row->alamat; ?></textarea>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                RT:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text"  value="<?php echo $row->rt; ?>" name="rt" class="form-control " placeholder="Masukan RT">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                RW:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->rw; ?>" name="rw" class="form-control " placeholder="Masukan RW">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Desa:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->desa; ?>" name="desa" class="form-control " placeholder="Masukan Desa">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Kewarganegaraaan:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->kewarganegaraan; ?>" name="kewarganegaraan" class="form-control " placeholder="Masukan Kewarganegaraan">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Status Perkawinan:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->status_perkawinan; ?>" name="status_perkawinan" class="form-control " placeholder="Masukan Status Perkawinan">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Tanggal Kawin:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="date" value="<?php echo $row->tanggal_kawin; ?>" name="tanggal_kawin"  class="form-control " placeholder="Masukan Tanggal Kawin">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Pendidikan:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->pendidikan; ?>" name="pendidikan" class="form-control " placeholder="Masukan Pendidikan">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Pekerjaan:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->pekerjaan; ?>" name="pekerjaan" class="form-control " placeholder="Masukan Pekerjaan">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                No Telepon:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->nomor_telepon; ?>" name="nomor_telepon" class="form-control " placeholder="Masukan Nomor Telepon">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Nama Ayah :</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->ayah; ?>" name="ayah" class="form-control " placeholder="Masukan Nama Ayah">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span>
                                Nama Ibu:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" value="<?php echo $row->ibu; ?>" name="ibu" class="form-control " placeholder="Masukan Nama Ibu">
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row row-xs mg-t-30">
                            <div class="col-sm-8 mg-l-auto">
                                <div class="form-layout-footer">
                                    <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
                                    <button type="cancel" class="btn btn-secondary">Cancel</button>
                                </div><!-- form-layout-footer -->
                            </div><!-- col-8 -->
                        </div>
                    </form>
                </div><!-- card -->
            </div><!-- col-6 -->
            <?php } ?>