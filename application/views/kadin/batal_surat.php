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
                <form action="<?= base_url('kadin/surat/batalkan/') ?>" enctype="multipart/form-data" method="POST">
                    <h3 class="text-center"><u>SURAT TUGAS</u> </h3>
                    <?php foreach ($surat as $sur) : ?>
                        <h4 class="text-center">NO : <?= $sur->no_surat ?>/DINBLK/20/08/2020</h4>
                        <input class="form-control" type="hidden" name="no_surat" value="<?= $sur->no_surat ?>">

                    <?php endforeach; ?>
                    <br>
                    <br>
                    <br>
                    <br>
                    <?php foreach ($surat as $sur) : ?>
                        <p class="lead">

                            <?= $sur->alamat ?>
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
                                                        <input class="form-control" type="hidden" name="id[]" value="<?= $dsur->id; ?>">

                                                    </td>
                                                    <td>
                                                        <h4>&nbsp;<?= $dsur->nama ?> &nbsp; &nbsp;</h4>
                                                        <input class="form-control" type="hidden" name="status_pegawai[]" value="0">

                                                    </td>
                                                    <td>
                                                        <h4> &nbsp;<?= $dsur->nip ?></h4>
                                                    </td>
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
                            <?= $sur->keterangan ?>
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
                                <a href="<?= base_url('kadin/surat') ?>" class="btn btn-success">Kembali </a>
                            </div>
                        </div>

                        <div class="col-sm-4 ">
                            <?php foreach ($kadin as $kad) : ?>
                                <div>
                                    <h4 class="text-center">Kudus, <?= date('d-m-Y') ?> </h4>
                                    <h4 class="text-center">Kepala Dinas BLK Kudus</h4>
                                </div>
                                <div>
                                    <br>
                                    <div class="justify-content-center">
                                        <button type="submit" class="btn btn-danger btn-lg btn-block">Batalkan Acc Surat </button>
                                    </div>
                                    <br>
                                </div>
                                <div>
                                    <h4 class="text-center"><u><?= $kad->nama ?></u> </h4>
                                    <h4 class="text-center">NIP :<?= $kad->username ?></h4>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </form>
            </div>

        </div>
</section>