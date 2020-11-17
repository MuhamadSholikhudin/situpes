<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <form action="<?= base_url('sekre/absensi/acc_absen/') ?>" enctype="multipart/form-data" method="POST">

                    <div class="card">
                        <div class="header">
                            <h2>
                                Jadwal Penugasan
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                                            <th>Ubah</th>
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
                                                        <?= $jad->status_jadwal ?>
                                                    </button>
                                                    <input type="hidden" name="status_jadwal[]" value="<?= $jad->status_jadwal ?>">

                                                </td>
                                                <td>
                                                    <a href="" class="btn btn-success waves-effect" type="button">
                                                        <i class="material-icons">remove_red_eye</i>
                                                    </a>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary float-right">ACC Absensi</button>

                </form>
            </div>
        </div>
        <!-- #END# Basic Examples -->

    </div>
</section>