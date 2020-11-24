<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <div>
                            Laporan Pegawai
                            <a href="<?= base_url('sekre/laporan/cetak_pegawai') ?>" target="blank" class="btn btn-warning"><i class="material-icons">print</i> Cetak</a>
                        </div>

                        <form action="" method="post">
                        
                        
                        </form>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Pangkat</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($user as $us) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $us->username ?></td>
                                            <td><?= $us->nama ?></td>
                                            <td><?= $us->jabatan ?></td>
                                            <td><?= $us->pangkat ?></td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>