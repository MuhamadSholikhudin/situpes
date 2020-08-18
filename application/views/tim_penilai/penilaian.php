<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1 class="m-0 text-dark">PENILAIAN</h1>
                    <br>
                    <div class="callout callout-success alert-danger ">
                        <h5>Perhatian !</h5>
                        <p>
                            Data Dukung yang dipakai adalah data berkas selama dua tahun ke belakang yaitu berkas tahun <?php echo date('Y') - 1; ?> &nbsp; dan <?php echo date('Y') - 2; ?>.
                        </p>
                    </div>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Form Penilaian Desa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <div class="card-body p-0">
                            <form action="<?= base_url('tim_penilai/penilaian/edit_aksi/') ?>" enctype="multipart/form-data" method="POST">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">NO</th>
                                            <th>Judul</th>
                                            <th>Nilai maks</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($njadwal as $njd) : ?>
                                            <input class="form-control" type="hidden" name="no_jadwal" value="<?= $njd->no_jadwal; ?>">
                                        <?php endforeach; ?>
                                        <?php $no = 1; ?>
                                        <?php foreach ($nilai as $nil) : ?>
                                            <tr>
                                                <td style="width: 10px"><?= $no; ?></td>
                                                <td><?= $nil->judul; ?></td>
                                                <td><?= $nil->nilai_maks; ?></td>
                                                <td style="width: 100px">
                                                    <input class="form-control" type="hidden" name="id_nilai[]" value="<?= $nil->id_nilai; ?>">
                                                    <input class="form-control" type="hidden" name="nilai_maks[]" value="<?= $nil->nilai_maks; ?>">
                                                    <input class="form-control" type="number" name="nilai[]" min="0" max="<?= $nil->nilai_maks; ?>" value="<?= $nil->nilai; ?>">
                                                </td>
                                            </tr>
                                            <?php $no++; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">


                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</div>