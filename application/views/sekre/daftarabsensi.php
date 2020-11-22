<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="<?= base_url('sekre/absensi/acc_absen/') ?>" enctype="multipart/form-data" method="POST">

                    <div class="card">
                        <div class="header">
                            <h2 class="text-center">
                                Data Absensi
                            </h2>

                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nip</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($no_sur as $nos) : ?>
                                            <input type="hidden" name="no_surat" value="<?= $nos ?>">
                                        <?php endforeach; ?>
                                        <?php $no = 1; ?>
                                        <?php foreach ($jadwal as $jad) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $jad->nip ?>

                                                </td>

                                                <td><?php
                                                    $nip = $jad->nip;
                                                    $nam = $this->db->query("SELECT nama FROM user WHERE username = '$nip' ")->result();
                                                    ?>
                                                    <?php foreach ($nam as $na) : ?>
                                                        <?= $na->nama; ?>
                                                    <?php endforeach; ?>
                                                    <input type="hidden" name="id_jadwal[]" value="<?= $jad->id_jadwal ?>">


                                                </td>
                                                <td><?= $jad->jabatan ?></td>
                                                <td><?= $jad->jadwal ?></td>
                                                <td>
                                                    <button class="btn btn-primary waves-effect" type="button">
                                                        <?php if ($jad->status_jadwal == 5 or $jad->status_jadwal == 0) {
                                                            echo "Tidak Bertugas";
                                                        } elseif ($jad->status_jadwal == 6 or $jad->status_jadwal == 1) {
                                                            echo " Bertugas";
                                                        }
                                                        ?>
                                                    </button>
                                                    <input type="hidden" name="status_jadwal[]" value="<?= $jad->status_jadwal ?>">

                                                </td>
                                               

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-10"></div>
                            <div class="col-sm-2">
                                <button type="submit" class="btn btn-primary float-right">ACC Absensi</button>
                            </div>

                            <div class="col-sm-12">&nbsp;</div>
                        </div>

                    </div>



                </form>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>