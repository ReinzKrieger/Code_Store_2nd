<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_part/head.php") ?>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <?php $this->load->view("admin/_part/navbar.php") ?>

        <?php $this->load->view("admin/_part/sidebar.php") ?>

        <div class="content-wrapper">
            <div class="content-header">
                <?php $this->load->view("admin/_part/breadcrumb.php") ?>
            </div>

            <div class="content">
                <div class="container-fluid">

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo site_url('admin/products/add') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="name">Name*</label>
                                    <input class="form-control <?php echo form_error('nama_produk') ? 'is-invalid' : '' ?>" type="text" name="nama_produk" placeholder="Product name" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_produk') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="price">Price*</label>
                                    <input class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="number" name="harga" min="0" placeholder="Product price" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('harga') ?>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="name">Photo</label>
                                    <input class="form-control-file <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="file" name="gambar" accept=".jpg,.jpeg,.png" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('gambar') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Description*</label>
                                    <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" name="deskripsi" placeholder="Product description..."></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('deskripsi') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="name">Kategori*</label><br>
                                    <input type="radio" name="kategori" value="1"> Perabotan </input><br>
                                    <input type="radio" name="kategori" value="2"> Lampu </input><br>
                                    <input type="radio" name="kategori" value="3"> Kipas </input><br>
                                </div>

                                <input class="btn btn-success" type="submit" name="Save" value="Save" />
                            </form>

                        </div>

                        <div class="card-footer small text-muted">
                            * required fields
                        </div>


                    </div>


                </div>
                <!-- /.content-wrapper -->

            </div>
        </div>
        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <?php $this->load->view("admin/_part/footer.php") ?>
    </div>
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/js/adminlte.min.js') ?>"></script>
</body>

</html>