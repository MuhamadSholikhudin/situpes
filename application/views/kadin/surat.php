<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h3 class="text-center"> DATA PENGAJUAN SURAT PENUGASAN </h3>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Surat</th>
                                        <th>Judul</th>
                                        <th>Isi Surat</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Status</th>
                                        <th>Lihat</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($surat as $sus) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><a href="<?= base_url('sekre/surat/lihat/') . $sus->no_surat ?>"><?= $sus->no_surat ?></a></td>
                                            <td><?= $sus->judul ?></td>
                                            <td><?= $sus->isi_surat ?></td>
                                            <td><?= $sus->keterangan ?></td>
                                            <td>
                                                <?php if ($sus->status_surat == 1) { ?>
                                                    <button class="btn btn-primary waves-effect" type="button">
                                                        <i class="material-icons">call_received</i>
                                                    </button>
                                                <?php } elseif ($sus->status_surat == 2) { ?>
                                                    <button class="btn btn-dark waves-effect" type="button">
                                                        <i class="material-icons">verified_user</i>
                                                    </button>
                                                <?php } ?>
                                            </td>
                                            <td><?php if ($sus->status_surat == 0) { ?>
                                                    <a href="<?= base_url('kadin/surat/edit/') . $sus->no_surat ?>" class="btn btn-warning waves-effect" type="button">
                                                        <i class="material-icons">mode_edit</i>
                                                    </a>
                                                <?php } elseif ($sus->status_surat == 1) { ?>
                                                    <a href="<?= base_url('kadin/surat/lihat_acc/') . $sus->no_surat ?>" class="btn btn-success waves-effect" type="button">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                <?php } elseif ($sus->status_surat == 2) { ?>
                                                    <a href="<?= base_url('kadin/surat/lihat_batalkan/') . $sus->no_surat ?>" class="btn btn-danger waves-effect" type="button">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                <?php } ?>

                                            </td>
                                            <td><a href="<?= base_url('kadin/surat/hapus/') ?>" class="btn btn-danger waves-effect" type="button">
                                                    <i class="material-icons">delete_forever</i>
                                                </a></td>
                                        </tr>
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