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


                                                <td><a href="<?= base_url('sekre/surat/hapus/') ?>" id="ubahbutton" class="btn btn-danger waves-effect" type="button">
                                                        <i class="material-icons">delete_forever</i>
                                                    </a></td>
                                                <td><a href="<?= base_url('sekre/surat/hapus/') ?>" class="btn btn-danger waves-effect" type="button">
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

        $('.tombolTambahData').on('click', function() {
            $('#formModalLabel').html('Tambah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Tambah Data');
            $('#nama').val('');
            $('#nrp').val('');
            $('#email').val('');
            $('#jurusan').val('');
            $('#id').val('');
        });

        $('.tampilModalUbah').on('click', function() {
            $('#formModalLabel').html('Ubah Data Mahasiswa');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', '<?= base_url('sekre/jadwal/edit/') ?>');

            const id = $(this).data('id');

            $.ajax({
                url: 'http://localhost/phpmvc/public/mahasiswa/getubah',
                data: {
                    id: id
                },
                method: 'post',
                dataType: 'json',
                success: function(data) {
                    $('#nama').val(data.nama);
                    $('#nrp').val(data.nrp);
                    $('#email').val(data.email);
                    $('#jurusan').val(data.jurusan);
                    $('#id').val(data.id);
                }
            });

        });

    });
</script>