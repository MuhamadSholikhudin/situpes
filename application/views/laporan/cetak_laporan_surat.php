<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Surat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
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
        <br>
        <br>
        <div class="body">

            <h3 class="text-center"><u>SURAT TUGAS</u> </h3>
            <?php foreach ($surat as $sur) : ?>
                <h4 class="text-center">NO : <?= $sur->no_surat ?>/DINBLK/20/08/2020</h4>
            <?php endforeach; ?>

            <br>
            <br>
            <form action="<?= base_url('sekre/surat/edit_surat_aksi') ?>" method="post" enctype="multipart/form-data">
                <?php foreach ($surat as $sur) : ?>
                    <h4>

                        <p name="isi_surat" id="isi_surat" cols="95"><?= $sur->isi_surat ?></p>
                    </h4>
                    <br>
                    <br>
                    <div class="row">


                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-10">
                            <div>

                                <table>
                                    <thead>
                                        <tr class="text-center">
                                            <td>
                                                <h4>No</h4>
                                            </td>
                                            <td>
                                                <h4>Nip</h4>
                                            </td>
                                            <td>
                                                <h4>Nama</h4>
                                            </td>
                                            <td>
                                                <h4>Jabatan</h4>
                                            </td>
                                            <td>
                                                <h4>penempatan</h4>
                                            </td>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-left">
                                        <?php $no = 1; ?>
                                        <?php foreach ($datatugas as $dsur) : ?>
                                            <tr>
                                                <td>
                                                    <h4><?= $no++; ?></h4>
                                                    <input class="form-control" type="hidden" name="id[]" value="<?= $dsur->id; ?>">

                                                </td>
                                                <td>
                                                    <h4> &nbsp;<?= $dsur->nip ?>&nbsp; &nbsp;</h4>
                                                </td>
                                                <td>
                                                    <input class="form-control" type="hidden" name="status_pegawai[]" value="2">
                                                    <h4>&nbsp;<?= $dsur->nama ?> &nbsp; &nbsp;</h4>
                                                    <input class="form-control" type="hidden" name="status_pegawai[]" value="1">
                                                </td>
                                                <td>
                                                    <h4><?= $dsur->jabatan ?>&nbsp; &nbsp;</h4>
                                                </td>
                                                <td>
                                                    <h4><?= $dsur->penempatan ?>&nbsp; &nbsp;</h4>
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


                    <h4>
                        <input type="hidden" name="no_surat" value="<?= $sur->no_surat ?>">
                        <p name="keterangan" id="keterangan" cols="95"><?= $sur->keterangan ?></p>
                    </h4>
                    <h4>
                        Demikian Surat ini diberikan agar dapat digunakan dengan semestinya.
                    </h4>
                <?php endforeach; ?>

                <div class="row">
                    <div class="col-sm-8">

                    </div>
            </form>
            <div class="col-sm-4">
                <br><br><br><br>
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
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    window.print()
</script>

</html>