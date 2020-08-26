<section class="content">
    <div class="container-fluid">

        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <button class="btn btn-default waves-effect m-r-20" type="button" data-target="#defaultModal" data-toggle="modal"> TAMBAH JADWAL PEGAWAI</button>
                        <div tabindex="-1" class="modal fade" id="defaultModal" role="dialog" style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    TAMBAH JADWAL PEGAWAI
                                                </h2>

                                            </div>
                                            <div class="body">
                                                <form action="<?= base_url('sekre/jadwal/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">

                                                    <label for="tgl_berlaku">Berlaku sampai tanggal</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="tgl_berlaku" type="date" name="jadwal">
                                                        </div>
                                                    </div>
                                                    <?php foreach ($pegawai as $peg) : ?>

                                                        <input class="form-control" id="no_surat" type="hidden" name="no_surat" value="<?= $peg->no_surat ?>">
                                                        <input class="form-control" id="id" type="hidden" name="id" value="<?= $peg->id ?>">
                                                        <input class="form-control" id="nip" type="hidden" name="nip" value="<?= $peg->nip ?>">
                                                    <?php endforeach; ?>

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


                        <div tabindex="-1" class="modal fade" id="ubahModal" role="dialog" style="display: none;">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="card">
                                            <div class="header">
                                                <h2>
                                                    UBAH JADWAL PEGAWAI
                                                </h2>

                                            </div>
                                            <div class="body">
                                                <form action="<?= base_url('sekre/jadwal/tambah_aksi') ?>" method="POST" enctype="multipart/form-data">

                                                    <label for="tgl_berlaku">Berlaku sampai tanggal</label>
                                                    <div class="form-group">
                                                        <div class="form-line">
                                                            <input class="form-control" id="ujadwal" type="date" name="jadwal">
                                                        </div>
                                                    </div>
                                                    <?php foreach ($pegawai as $peg) : ?>

                                                        <input class="form-control" id="uid_jadwal" type="hidden" name="id" value="<?= $peg->id ?>">
                                                    <?php endforeach; ?>

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


                        
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Tanggal </th>
                                            <th>Status</th>
                                            <th>Ubah</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($jadwal as $jad) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $jad->nip ?></td>
                                                <td><?= $jad->jadwal ?></td>
                                                <td><?= $jad->status_jadwal ?></td>


                                                <td><a href="<?= base_url('sekre/jadwal/pegawai_edit/') . $jad->id_jadwal ?>" id="Modalubahbutton" class="btn btn-dark waves-effect" data-toggle="modal" data-target="#ubahModal" data-id_jadwal="<?= $jad->id_jadwal ?>">
                                                        <i class="material-icons">edit</i>
                                                    </a></td>
                                                <td><a href="<?= base_url('sekre/jadwal/pegawai_hapus/') ?>" class="btn btn-danger waves-effect" type="button">
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
<script>
    $(function() {

        

        $('#Modalubahbutton').on('click', function() {
           
            const id = $(this).data('id');

            $.ajax({
                url: '<?= base_url('sekre/jadwal/jadwal_lihat/') ?>'. id_jadwal,
                data: {
                    id_jadwal: id_jadwal
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#ujadwal').val(data.jadwal);
                    $('#uid_jadwal').val(data.id_jadwal);
                }
            });

        });

    });
</script>