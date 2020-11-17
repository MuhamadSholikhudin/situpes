<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
            <!-- <div id="div1">
                <h2>Let jQuery AJAX Change This Text</h2>
            </div>

            <button>Get External Content</button> -->
        </div>
        <div class="card p-4">
            <div class="header">
                <div class="row">
                    <div class="col-md-2">
                        <img src="<?= base_url('assets/img/logo_kudus.png') ?>" alt="" width="100%" height="180px">
                    </div>
                    <div class="col-md-10">
                        <h3 class="text-center">PEMERINTAH KABUPATEN KUDUS</h3>
                        <h3 class="text-center">DINAS TENAGA KERJA PERINDUSTRIAN</h3>
                        <h3 class="text-center">KOPERASI DAN USAHA KECIL DAN MENENGAH</h3>
                        <h5 class="text-center">stain-ngembalrejo, Ngembal Rejo, Ngembalrejo, Kec. Bae, Kabupaten Kudus, Jawa Tengah 59322</h5>
                        <h5 class="text-center">KOPERASI DAN USAHA KECIL DAN MENENGAH</h5>
                    </div>
                </div>

            </div>
            <div class="body">

                <h3 class="text-center"><u>SURAT TUGAS</u> </h3>
                <?php foreach ($surat as $sur) : ?>
                    <h4 class="text-center">NO : <?= $sur->no_surat ?>/DINBLK/20/08/2020</h4>
                <?php endforeach; ?>
                <br>
                <br>
                <br>
                <br>
                <form action="<?= base_url('sekre/surat/edit_surat_aksi') ?>" method="post" enctype="multipart/form-data">
                    <?php foreach ($surat as $sur) : ?>
                        <p class="lead">

                            <textarea name="isi_surat" id="isi_surat" cols="95"><?= $sur->isi_surat ?></textarea>
                        </p>
                        <br>
                        <br>
                        <div class="row">


                            <div class="col-sm-3"></div>
                            <div class="col-sm-2">
                                <h4>Nama</h4>
                                <!-- <button class="btn btn-dark">Tambah Pegawai</button> -->
                            </div>
                            <div class="col-sm-5">
                                <div>

                                    <table>
                                        <tbody class="text-left">
                                            <?php $no = 1; ?>
                                            <?php foreach ($datatugas as $dsur) : ?>
                                                <tr>
                                                    <td>
                                                        <h4>&nbsp;<?= $no++; ?> &nbsp;: &nbsp;</h4>
                                                    </td>
                                                    <td>
                                                        <h4>&nbsp;<?= $dsur->nama ?> &nbsp; &nbsp;</h4>
                                                    </td>
                                                    <td>
                                                        <h4> &nbsp;<?= $dsur->nip ?></h4>
                                                    </td>
                                                    <td><a href="<?= base_url('sekre/surat/hapus_pegawai_aksi/' . $dsur->no_surat . '/' . $dsur->nip) ?>"><i class="material-icons">delete</i></a></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>

                                </div>
                            </div>
                            <div class="col-sm-2">


                            </div>
                        </div>
                        <br>


                        <p class="lead">
                            <input type="hidden" name="no_surat" value="<?= $sur->no_surat ?>">
                            <textarea name="keterangan" id="keterangan" cols="95"><?= $sur->keterangan ?></textarea>
                        </p>
                        <p class="lead">
                            Demikian Surat ini diberikan agar dapat digunakan dengan semestinya.
                        </p>
                    <?php endforeach; ?>

                    <div class="row">
                        <div class="col-sm-8">
                            <div class="content-bottom">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <a href="<?= base_url('sekre/surat') ?>" class="btn btn-success">Kembali </a>
                                <button type="submit" class="btn btn-primary">Edit Surat </button>
                                <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH PEGAWAI BERTUGAS</button>


                            </div>
                        </div>
                </form>
                <div class="col-sm-4">
                    <?php foreach ($kadin as $kad) : ?>
                        <div>
                            <h4 class="text-center">Kudus, <?= date('d-m-Y') ?> </h4>
                            <h4 class="text-center">Kepala Dinas BLK Kudus</h4>
                        </div>
                        <div class="mb-3">
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                        <div>
                            <h4 class="text-center"><u><?= $kad->nama ?></u> </h4>
                            <h4 class="text-center">NIP :<?= $kad->username ?></h4>
                        </div>
                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
</section>
<div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TAMBAH SURAT TUGAS
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('sekre/surat/tambah_pegawai_aksi/') ?>" method="POST" enctype="multipart/form-data">
                            <label for="nip">nip</label>
                            <div class="form-group">
                                <select class="selectpicker form-line" name="nip" id="nipku">
                                    <?php
                                    foreach ($user as $sur) : ?>
                                        <option class="d-none" value="<?= $sur->username ?>"><?= $sur->nama ?> 2/ <?= $sur->username ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <label for="nama">Nama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="namapeg" type="text" name="nama">
                                </div>
                            </div>
                            <?php foreach ($surat as $sur) : ?>
                                <input class="form-control" id="no_surat" type="hidden" name="no_surat" value="<?= $sur->no_surat ?>">
                            <?php endforeach; ?>
                            <!-- <input type="text" id="jb">
                            <input type="text" id="pk"> -->
                            <label for="jb">Jabtan</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="jb" type="text" name="jabatan">
                                </div>
                            </div>
                            <label for="pk">Pangkat</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="pk" type="text" name="pangkat">
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


</div>