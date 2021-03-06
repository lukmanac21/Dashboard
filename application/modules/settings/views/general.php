<div class="main">
    <div class="page-header">
        <h4 class="page-title">General</h4>
        <div class="breadcrumb">
            <div class="breadcrumb-item"><a href="index.html"> Settings </a></div>
            <div class="breadcrumb-item"><a href="javascript:void(0)"> General </a></div>
        </div>
    </div>
    <div class="card">
    <?php if ($this->session->flashdata('status')['status'] == 'success') { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Berhasil !</strong> <?= $this->session->flashdata('status')['msg']; ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php } else if ($this->session->flashdata('status')['status'] == 'error') {  ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Gagal !</strong> <?= $this->session->flashdata('status')['msg']; ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		<?php } ?>
        <div class="card-body">
            <h4>General Setting</h4>
            <div class="mt-4">
                <div class="row">
                    <div class="col-md-6">
                    <?php 
                        if(!empty($settings)){
                            $title = $settings->site_title;
                            $name = $settings->name;
                            $email = $settings->email;
                            $telepon = $settings->phone;
                            $alamat = $settings->address;
                            $footer = $settings->footer;
                        }else{
                            $title = 'No Data';
                            $name = 'No Data';
                            $email = 'No Data';
                            $telepon = 'No Data';
                            $alamat = 'No Data';
                            $footer = 'No Data';
                        }
                    ?>
                        <form>
                            <div class="row mb-4">
                                <label for="inputtitle" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Judul</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="title" value="<?= $title?>" class="form-control" id="inputtitle">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="inputnama" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Nama</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="text" value="<?= $name?>" class="form-control" id="inputnama">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="inputemail" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Email</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="email" value="<?= $email?>" class="form-control" id="inputemail">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="inputtelepon" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Telepon</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="telepon" value="<?= $telepon?>" class="form-control" id="inputtelepon">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="inputalamat" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Alamat</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="alamat" value="<?= $alamat?>" class="form-control" id="inputalamat">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="inputfooter3" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Footer</label>
                                <div class="col-sm-8 col-md-9 col-lg-10">
                                    <input type="footer" value="<?= $footer?>" class="form-control" id="inputfooter3">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="row mb-4">
                                <label for="inputEmail3" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Logo</label>
                                <div class="col-sm-5 col-md-6 col-lg-7">
                                    <input type="file" class="form-control" id="inputEmail3">
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <button type="submit" class="btn btn-primary" data-inline="true">Save</button>
                                </div>
                            </div>
                        </form>
                        <form>
                            <div class="row mb-4">
                                <label for="inputPassword3" class="col-sm-4 col-md-3 col-lg-2 col-form-label">Icon</label>
                                <div class="col-sm-5 col-md-6 col-lg-7">
                                    <input type="file" class="form-control" id="inputPassword3">
                                </div>
                                <div class="col-sm-3 col-md-3 col-lg-3">
                                    <button type="submit" class="btn btn-primary" data-inline="true">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

