<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH PENGGUNA</button>
                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    TAMBAH PENGGUNA
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
                                                    <label for="nama">Nama</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="nama" type="text" name="nama" placeholder="Masukkan nama lengkap">
                                                        </div>
                                                    </div>
                                                    <label for="username">NIP / Username</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="username" type="number" name="username" placeholder="Masukkan NIP">
                                                        </div>
                                                    </div>
                                                    <label for="password">Pasword</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="password" type="password" name="password" placeholder="Masukkan password">
                                                        </div>
                                                    </div>
                                                    <label for="hakakses">Hak Akses</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="hakakses" id="hakakses">
                                                            <option value="2">Kepala dinas</option>
                                                            <option value="1">Sekretariat Dinas</option>
                                                            <option value="3">Pegawai</option>
                                                        </select>
                                                    </div>
                                                    <label for="jabatan">Jabatan</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="jabatan" id="jabatan">
                                                            <option value="Kepala Disnaker">Kepala Disnaker</option>
                                                            <option value="Seketariat Disnaker">Seketariat Disnaker</option>
                                                            <option value="Admin TU">Admin TU</option>
                                                            <option value="Admin TU / Keuangan">Admin TU / Keuangan</option>
                                                            <option value="Admin Program, Evaluasi dan Pelaporan Pelatihan">Admin Program, Evaluasi dan Pelaporan Pelatihan</option>
                                                            <option value="Admin Penyelenggara Pelatihan">Admin Penyelenggara Pelatihan</option>
                                                            <option value="Admin Pendaftaran Pelatihan">Admin Pendaftaran Pelatihan</option>
                                                            <option value="Admin Umum dan Gudang">Admin Umum dan Gudang</option>
                                                            <option value="Admin Pengadaan Barang dan Jasa">Admin Pengadaan Barang dan Jasa</option>
                                                            <option value="PWU Kecamatan Kota">PWU Kecamatan Kota</option>
                                                            <option value="PWU Kecamatan Bae">PWU Kecamatan Bae</option>
                                                            <option value="PWU Kecamatan Dawe">PWU Kecamatan Dawe</option>
                                                            <option value="PWU Kecamatan Gebog">PWU Kecamatan Gebog</option>
                                                            <option value="PWU Kecamatan Jati">PWU Kecamatan Jati</option>
                                                            <option value="PWU Kecamatan Jekulo">PWU Kecamatan Jekulo</option>
                                                            <option value="PWU Kecamatan Kaliwungu">PWU Kecamatan Kaliwungu</option>
                                                            <option value="PWU Kecamatan Mejobo">PWU Kecamatan Mejobo</option>
                                                            <option value="PWU Kecamatan Undaan">PWU Kecamatan Undaan</option>
                                                            <option value="toolman otomotif">toolman otomotif</option>
                                                            <option value="toolman otomotif">toolman otomotif</option>
                                                            <option value="Toolmen Las">Toolmen Las</option>
                                                            <option value="Toolmen komputer">Toolmen komputer</option>
                                                            <option value="TOOLMAN BUBUT & Perkayuan">TOOLMAN BUBUT & Perkayuan</option>
                                                            <option value="Toolman Boga">Toolman Boga</option>
                                                            <option value="TOOLMAN RIAS">TOOLMAN RIAS</option>
                                                            <option value="Toolman Jahit">Toolman Jahit</option>
                                                            <option value="Driver UPTD BLK">Driver UPTD BLK</option>
                                                            <option value="Adm. Sub Bag. Umum & Kepegawaian">Adm. Sub Bag. Umum & Kepegawaian</option>
                                                            <option value="Adm. Sub Bag. Keuangan Sekretariat">Adm. Sub Bag. Keuangan Sekretariat</option>
                                                            <option value="Adm. Sub Bag. PEP">Adm. Sub Bag. PEP</option>
                                                            <option value="Adm. Bidang Koperasi dan UKM">Adm. Bidang Koperasi dan UKM</option>
                                                            <option value="Adm. Bid. Perindustrian">Adm. Bid. Perindustrian</option>
                                                            <option value="Adm. Bidang HIP">Adm. Bidang HIP</option>
                                                            <option value="Adm. Bidang Penempatan Tenaga Kerja">Adm. Bidang Penempatan Tenaga Kerja</option>
                                                            <option value="Keamanan">Keamanan</option>
                                                            <option value="Penjaga">Penjaga</option>
                                                        </select>
                                                    </div>
                                                    <label for="pangkat">Pangkat</label>
                                                    <div class="form-group">
                                                        <select class="selectpicker form-line" name="pangkat" id="pangkat">
                                                            <option value="Pembina Utama IV/e">Pembina Utama IV/e</option>
                                                            <option value="Pembina UtamaMadya IV/d">Pembina UtamaMadya IV/d</option>
                                                            <option value="Pembina Utama Muda IV/c">Pembina Utama Muda IV/c</option>
                                                            <option value="Pembina Tingkat I IV/b">Pembina Tingkat I IV/b</option>
                                                            <option value="Pembina IV/a">Pembina IV/a</option>
                                                            <option value="Penata Tingkat I III/d">Penata Tingkat I III/d</option>
                                                            <option value="Penata III/c">Penata III/c</option>
                                                            <option value="Penata Muda Tingkat I III/b">Penata Muda Tingkat I III/b</option>
                                                            <option value="Penata Muda III/a">Penata Muda III/a</option>
                                                            <option value="Pengatur Tingkat I II/d">Pengatur Tingkat I II/d</option>
                                                            <option value="Pengatur	II/c">Pengatur II/c</option>
                                                            <option value="Pengatur Muda Tingkat I II/b">Pengatur Muda Tingkat I II/b</option>
                                                            <option value="Pengatur Muda II/a">Pengatur Muda II/a</option>
                                                            <option value="Juru Tingkat I I/d">Juru Tingkat I I/d</option>
                                                            <option value="Juru I/c">Juru I/c</option>
                                                            <option value="Juru Muda Tingkat I I/b">Juru Muda Tingkat I I/b</option>
                                                            <option value="Juru Muda I/a">Juru Muda I/a</option>
                                                        </select>
                                                    </div>

                                                    <br>
                                                    <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-link waves-effect" type="button">SAVE CHANGES</button>
                                        <button class="btn btn-link waves-effect" type="button" data-dismiss="modal">CLOSE</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Hak Akses</th>
                                        <th>Ubah</th>
                                        <th>Hapus</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php $no = 1; ?>
                                    <?php foreach ($user as $us) : ?>
                                        <tr>
                                            <td><?= $no ?></td>
                                            <td>
                                                <?= $us->nama ?>
                                            </td>
                                            <td><?= $us->username ?></td>
                                            <td>
                                                <?php if ($us->level == 1) {
                                                    echo "Sekeretariat Dinasnaker";
                                                } elseif ($us->level == 2) {
                                                    echo "Pegawai Disnaker";
                                                } elseif ($us->level == 3) {
                                                    echo "Kepala Disnaker";
                                                } ?>

                                            </td>
                                            <td><a href="<?= base_url('sekre/pengguna/edit/') . $us->id_user ?>" class="btn bg-light-green waves-effect" type="button">
                                                    <i class="material-icons">mode_edit</i>
                                                </a></td>
                                            <td><a class="btn btn-danger waves-effect" type="button">
                                                    <i class="material-icons">delete</i>
                                                </a></td>

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