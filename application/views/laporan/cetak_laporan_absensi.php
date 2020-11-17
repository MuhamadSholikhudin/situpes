<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan Pegawai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymojad">
</head>

<body>
    <div class="container">


        <div class="row">
            <div class="col-sm-12 mt-4 mb-4 text-center">
                <strong>
                    <h3>Laporan Data Pegawai Bertugas Dinas Tenaga Kerja Perindustrian,</h3>
                    <h3>Koperasi dan Usaha Menengah Kabupaten Kudus</h3>
                </strong>
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jadwal</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Pangkat</th>
                            <th>Status_jadwal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($jadwal as $jad) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $jad->jadwal ?></td>
                                <td><?= $jad->nip ?></td>
                                <td><?= $jad->nama ?></td>
                                <td><?= $jad->id_jadwal ?></td>
                                <td>
                            <?php if($jad->status_jadwal == 6){
                                echo "Bertugas";
                            }elseif($jad->status_jadwal){
                                echo "Tidak Bertugas";

                            }?>
                            </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>

                <div class="row">
                    <div class="col-sm-4">

                    </div>
                    <div class="col-sm-4"></div>

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

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymojad"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymojad"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymojad"></script>
<script>
    window.print()
</script>

</html>