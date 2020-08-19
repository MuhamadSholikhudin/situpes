    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            TAMBAH PEGAWAI
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('sekre/pegawai/update') ?>" method="POST" enctype="multipart/form-data">
                            <?php foreach ($data_pegawai as $us) :
                            ?>

                                <label for="username">Username</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="username" type="hidden" name="niplama" value="<?= $us->nip ?>">
                                        <input class="form-control" id="username" type="text" name="nip" value="<?= $us->nip ?>">
                                    </div>
                                </div>
                                <label for="nama">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input class="form-control" id="nama" type="text" name="nama" value="<?= $us->nama ?>">
                                    </div>
                                </div>
                                <label for="jabatan">Jabatan</label>
                                <div class="form-group">
                                    <select class="selectpicker form-line" name="jabatan" id="jabatan">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <label for="pangkat">Pangkat</label>
                                <div class="form-group">
                                    <select class="selectpicker form-line" name="pangkat" id="pangkat">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <label for="status_pegawai">Status Pegawai</label>
                                <div class="form-group">
                                    <select class="selectpicker form-line" name="status_pegawai" id="status_pegawai">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
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