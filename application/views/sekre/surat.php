<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH SURAT TUGAS</button>
                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    TAMBAH SURAT TUGAS
                                                </h2>
                                                <ul class="header-dropdown m-r--5">
                                                    <li class="dropdown">
                                                        <a class="dropdown-toggle" role="button" aria-expanded="false" aria-haspopup="true" href="javascript:void(0);" data-toggle="dropdown">
                                                            <i class="material-icons">more_vert</i>
                                                        </a>
                                                        <ul class="dropdown-menu pull-right">
                                                            <li><a class=" waves-effect waves-block" href="javascript:void(0);">Action</a></li>
                                                            <li><a class=" waves-effect waves-block" href="javascript:void(0);">Another action</a></li>
                                                            <li><a class=" waves-effect waves-block" href="javascript:void(0);">Something else here</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="body">
                                                <form action="<?= base_url('sekre/pengguna/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">
                                                    <label for="judul">judul </label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <!-- <input class="form-control" id="judul" type="text" name="judul" placeholder="Enter your email address"> -->
                                                            <textarea name="judul" id="judul" cols="70" rows="10"></textarea>

                                                        </div>
                                                    </div>
                                                    <label for="keterangan">Keterangan</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <!-- <input class="form-control" id="keterangan" type="text" name="keterangan" placeholder="Enter your password"> -->
                                                            <textarea name="keterangan" id="keterangan" cols="70" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                    <label for="tgl_berlaku">Berlaku sampai tanggal</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="tgl_berlaku" type="date" name="tgl_berlaku" placeholder="Enter your password">
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <!-- <button class="btn btn-link waves-effect" type="button">SAVE CHANGES</button> -->
                                        <button class="btn btn-link waves-effect" type="button" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                            </div>

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
                                            <th>No Surat</th>
                                            <th>Judul</th>
                                            <th>Tanggal Berakhir</th>
                                            <th>Status</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($surat as $sus) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><a href="<?= base_url('sekre/surat/lihat/') . $sus->no_surat ?>"><?= $sus->no_surat ?></a></td>
                                                <td><?= $sus->alamat ?></td>
                                                <td><?= $sus->keterangan ?></td>
                                                <td>

                                                    <?php if ($sus->status_surat == 0) { ?>
                                                        <a href="<?= base_url('sekre/surat/ajukan_surat/') . $sus->no_surat ?>" class="btn btn-primary waves-effect" type="button">
                                                            <i class="material-icons">done</i>
                                                        </a>
                                                    <?php } elseif ($sus->status_surat == 1) { ?>
                                                        <button class="btn btn-warning waves-effect" type="button">
                                                            <i class="material-icons">call_missed_outgoing</i>
                                                        </button>
                                                    <?php } ?>
                                                </td>
                                                <td><?php if ($sus->status_surat == 0) { ?>
                                                        <a href="<?= base_url('sekre/surat/edit/') . $sus->no_surat ?>" class="btn btn-warning waves-effect" type="button">
                                                            <i class="material-icons">mode_edit</i>
                                                        </a>
                                                    <?php } elseif ($sus->status_surat == 1) { ?>
                                                        <a href="<?= base_url('sekre/surat/lihat/') . $sus->no_surat ?>" class="btn btn-warning waves-effect" type="button">
                                                            <i class="material-icons">remove_red_eye</i>
                                                        </a>
                                                    <?php } ?>

                                                </td>
                                                <td><a href="<?= base_url('sekre/surat/hapus/') ?>" class="btn btn-danger waves-effect" type="button">
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