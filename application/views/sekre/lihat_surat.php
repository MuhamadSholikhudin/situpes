    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="card">
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
                    <h4 class="text-center">NO : /DINBLK/20/08/2020</h4>
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


                            <div class="col-sm-4"></div>
                            <div class="col-sm-2">
                                <h4>Nama</h4>
                                <!-- <button class="btn btn-dark">Tambah Pegawai</button> -->
                            </div>
                            <div class="col-sm-6">
                                <div>
                                    <h4>
                                        <i class="material-icons">delete</i> &nbsp;1 : Herman
                                    </h4>
                      
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <p class="lead">
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
                                <a href="<?= base_url('sekre/surat') ?>" class="btn btn-success">Kembali </a>
                                <button class="btn btn-primary">Tambah </button>
                            </div>
                        </div>
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
        </div>
    </section>