<!-- HEAD -->
<?php $this->load->view('layouts/admin/head') ?>

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            <!-- TOPBAR -->
            <?php $this->load->view('layouts/admin/topbar') ?>

            <!-- SIDEBAR -->
            <?php $this->load->view('layouts/admin/sidebar') ?>


            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1><?= $title ?></h1>
                        <div class="section-header-button">
                            <a href="<?= base_url('admin/user/create') ?>" class="btn btn-primary">Tambah</a>
                        </div>
                        <div class="section-header-breadcrumb">
                            <div class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard') ?>">Dashboard</a></div>
                            <div class="breadcrumb-item"><a href="<?= base_url('admin/' . strtolower($title)) ?>"><?= $title ?></a></div>
                            <div class="breadcrumb-item">Data <?= $title ?></div>
                        </div>
                    </div>

                    <div class="section-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table class="table table-striped" id="dataTables">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Username</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>Foto</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($user as $item) { ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $item->username ?></td>
                                                        <td><?= $item->nama ?></td>
                                                        <td><?= $item->email ?></td>
                                                        <td>
                                                            <?php if ($item->role == 'admin') {
                                                                echo '<span class="badge badge-primary">' . $item->role . '</span>';
                                                            } else {
                                                                echo '<span class="badge badge-danger">' . $item->role . '</span>';
                                                            } ?>
                                                        </td>
                                                        <td>
                                                            <img src="<?= base_url('assets/uploads/user/' . $item->foto) ?>" alt="foto" class="rounded-circle" style="width: 70px;">
                                                        </td>
                                                        <td>
                                                            <a href="<?= base_url('admin/user/edit/' . $item->id) ?>" class="btn btn-default"><span class="fa fa-edit"></span></a>
                                                            <a href="<?= base_url('admin/user/destroy/' . $item->id) ?>" class="btn btn-default btn-hapus"><span class="fa fa-trash"></span></a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- FOOTER -->
            <?php $this->load->view('layouts/admin/footer') ?>


        </div>
    </div>

    <!-- SCRIPT -->
    <?php $this->load->view('layouts/admin/script') ?>
    <?php $this->load->view('layouts/admin/alert') ?>

</body>

</html>