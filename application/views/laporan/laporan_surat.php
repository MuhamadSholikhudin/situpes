<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                            Laporan Surat Penugasan
                        </h2>
                        <h2 class="text-center">
                            Dinas Tenaga Inkop dan UMKM
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul Surat</th>
                                        <th>Isi Surat</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($surat as $sur) : ?>

                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $sur->judul ?></td>
                                            <td><?= $sur->isi_surat ?></td>
                                            <td><?= $sur->keterangan ?></td>
                                            <td><?= $sur->tgl_buat ?></td>
                                            <td>
                                                <a target="blank" href="<?= base_url('sekre/laporan/cetak_surat/' . $sur->no_surat) ?>" target="blank" class="btn btn-warning"><i class="material-icons">print</i> Cetak</a>

                                            </td>
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