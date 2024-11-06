<?php $this->load->view('header'); ?>
<?= $this->session->flashdata('message'); ?>
<div class="sl-pagebody">
            <div class="sl-page-title">
                <h5>Form Kartu keluarga</h5>
                <p>Form yang digunakan untuk input data keluarga.</p>
            </div><!-- sl-page-title -->
            <div class="col-xl-7 mg-t-25 mg-xl-t-0">
                <div class="card pd-20 pd-sm-30 form-layout form-layout-4">
                    <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Input Data Keluarga</h6>
                    <p class="mg-b-30 tx-gray-600"></p>
                    <form action="<?php echo site_url('Kartu_keluarga/add_data') ?>" method="post" enctype="multipart/form-data">
                        <!-- Nama Lengkap -->
                        <div class="row row-xs">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger">*</span> Nomor Kartu Keluarga:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="nomer_kartukeluarga" class="form-control" placeholder="Masukan Nomer Kartu Keluarga" required>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger"></span> Alamat:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <textarea rows="2" name="alamat" class="form-control" placeholder="Masukan Alamat"></textarea>
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger"></span>
                                RT:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="rt" class="form-control " placeholder="Masukan RT">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger"></span>
                                RW:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="rw" class="form-control " placeholder="Masukan RW">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger"></span>
                                Desa:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="desa" class="form-control " placeholder="Masukan Desa">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger"></span>
                                Kecamatan:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="kecamatan" class="form-control " placeholder="Masukan Kecamatan">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger"></span>
                                Kabupaten:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="kabupaten" class="form-control " placeholder="Masukan Kabupaten">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger"></span>
                                Provinsi:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="provinsi" class="form-control " placeholder="Masukan Provinsi">
                            </div>
                        </div>
                        <div class="row row-xs mg-t-20">
                            <label class="col-sm-4 form-control-label"><span class="tx-danger"></span>
                                Kode Pos:</label>
                            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                                <input type="text" name="kode_pos" class="form-control " placeholder="Masukan Kode Pos">
                            </div>
                        </div>
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