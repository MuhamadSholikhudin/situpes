<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Absensi
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
                                        <th>Judul Surat</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Tanggal</th>
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>a</td>
                                        <td>Latihan Kewiraushaan Kec Bae</td>
                                        <td>121212</td>
                                        <td>Sri Lestari</td>
                                        <td>Pegawai</td>
                                        <td>19</td>
                                        <td><a href="<?= base_url('sekre/absensi/edit/') ?>" class="btn btn-warning waves-effect" type="button">
                                                <i class="material-icons">mode_edit</i>
                                            </a></td>
                                        <td><a href="<?= base_url('sekre/absensi/hapus/') ?>" class="btn btn-danger waves-effect" type="button">
                                                <i class="material-icons">delete_forever</i>
                                            </a></td>
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