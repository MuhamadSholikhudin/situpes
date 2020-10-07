    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Input Absensi</h2>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            UPDATE ABSENSI PEGAWAI BERTUGAS
                        </h2>

                    </div>
                    <div class="body">
                        <form action="<?= base_url('sekre/pegawai/update') ?>" method="POST" enctype="multipart/form-data">


                            <label for="username">NIP</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="username" type="hidden" name="niplama" value="">
                                    <input class="form-control" id="username" type="text" name="nip" value="">
                                </div>
                            </div>
                            <label for="nama">Nama</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input class="form-control" id="nama" type="text" name="nama" value="">
                                </div>
                            </div>
                            <label for="jabatan">Tanggal</label>
                            <div class="form-group">
                                <div class="form-line">

                                    <input class="form-control" id="tanggal" type="date" name="tanggal" value="">

                                </div>
                            </div>
                            <label for="pangkat">Keterangan</label>
                            <div class="form-group">
                                <div class="form-line">

                                    <input class="form-control" id="keterangan" type="text" name="keterangan" value="">

                                </div>
                            </div>
                            <div class="demo-radio-button">
                                <input name="group1" type="radio" id="radio_1" value="1" checked="">
                                <label for="radio_1">Bertugas</label>
                                <input name="group1" type="radio" value="0" id="radio_2">
                                <label for="radio_2">Tidah</label>                                
                            </div>

                            <br>
                            <button class="btn btn-primary m-t-15 waves-effect" type="submit">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </section>