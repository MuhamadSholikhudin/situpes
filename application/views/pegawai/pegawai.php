<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Data Absensi Pegawai
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
                                        <th>Nama</th>
                                        <th>Nip</th>
                                        <th>tanggal</th>
                                        <th>Lihat</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($jadwal as $jad) : ?>
                                        <tr>
                                            <td>a</td>
                                            <td><?= $this->session->userdata('nama') ?></td>
                                            <td><?= $jad->nip ?></td>
                                            <td><?= $jad->jadwal ?></td>
                                            <td><a href="<?= base_url("pegawai/absensi/input/") . $jad->id_jadwal . "/". $jad->no_surat ?>"><i class="material-icons">edit</i>input</a> 
                                               <a href="<?= base_url("pegawai/absensi/edit/") . $jad->id_jadwal ?>"><i class="material-icons">edit</i>edit</a></td>
                                            <td>
                                                <?php if ($jad->status_jadwal == 2) {
                                                    echo "Sudah Di Acc";
                                                }elseif ($jad->status_jadwal == 1) {
                                                    echo "Sudah Bertugas";
                                                }elseif ($jad->status_jadwal == 0) {
                                                    echo "Belum Bertugas";
                                                }
                                                ?>                                                    
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                    <tr>
                                        <td>b</td>
                                        <td><?= $this->session->userdata('nama') ?></td>
                                        <td>adel</td>
                                        <td>sekretaris</td>
                                        <td>sekre</td>
                                        <td></td>
                                    </tr>
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