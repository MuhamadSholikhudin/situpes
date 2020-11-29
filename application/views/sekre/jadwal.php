<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2 class="text-center">
                            Jadwal Penugasan
                        </h2>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>No Surat</th>
                                        <th>Judul Surat</th>
                                        <th>Isi Surat</th>
                                        <th>keterangan</th>
                                        <th>Status</th>
                                        <th>Ubah</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($surat as $sus) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><a href="<?= base_url('sekre/jadwal/data/') . $sus->no_surat ?>"><?= $sus->no_surat ?></a></td>
                                            <td><?= $sus->judul ?></td>
                                            <td><?= $sus->isi_surat ?></td>
                                            <td><?= $sus->keterangan ?></td>
                                            <td>

                                                <button class="btn btn-primary waves-effect" type="button">
                                                    <i class="material-icons">checked</i>
                                                    <span>Sudah di acc</span>
                                                </button>

                                            </td>
                                            <td>
                                                <a href="<?= base_url('sekre/jadwal/data/') . $sus->no_surat ?>" class="btn btn-success waves-effect" type="button">
                                                    <i class="material-icons">remove_red_eye</i>
                                                    <span>Lihat</span>
                                                </a>


                                            </td>

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