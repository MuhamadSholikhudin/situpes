    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TAMBAH PENGGUNA
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('sekre/pengguna/update') ?>" method="POST" enctype="multipart/form-data">
                            <?php foreach ($user as $us) :
                            ?>
                                <label for="nama">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="nama" type="text" name="nama" value="<?= $us->nama ?>">
                                        <input class="form-control" id="id_user" type="hidden" name="id_user" value="<?= $us->id_user ?>">
                                    </div>
                                </div>
                                <label for="username">Username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="username" type="hidden" name="usernamelama" value="<?= $us->username ?>">
                                        <input class="form-control" id="username" type="text" name="username" value="<?= $us->username ?>">
                                    </div>
                                </div>
                                <label for="password">Pasword</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="password" type="password" name="password" value="<?= $us->password ?>">
                                    </div>
                                </div>
                                <label for="hakakses">Hak Akses</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="hakakses" type="number" name="level" value="<?= $us->level ?>">
                                    </div>
                                </div>

                                <br>
                                <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>
                            <?php endforeach;
                            ?>
                        </form>
                    </div>
                </div>
            </div>
    </section>