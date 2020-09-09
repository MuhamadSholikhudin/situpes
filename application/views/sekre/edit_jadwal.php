<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DASHBOARD</h2>
        </div>
        <div>
            <div tabindex="-1" class="modal fade" id="ubahModal" role="dialog" style="display: none;">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <div class="header">
                                    <h2 id="iki">
                                        UBAH JADWAL PEGAWAI
                                    </h2>

                                </div>
                                <div class="body">
                                    <form action="<?= base_url('sekre/jadwal/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">

                                        <label for="tgl_berlaku">Berlaku sampai tanggal</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input class="form-control" id="ujadwal" type="date" name="jadwal">
                                                <input class="form-control" id="uid_jadwal" type="text" name="id_jadwal">

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
        </div>

    </div>
</section>