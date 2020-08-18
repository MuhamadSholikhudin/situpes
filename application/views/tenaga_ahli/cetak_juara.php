<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Laporan juara Lomba</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mt-4 mb-4">
                <strong>

                    Laporan data Juara Lomba Desa Kabupaten Kudus
                </strong>
            </div>
            <div class="col-sm-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>Kecamatan</th>
                            <th>Desa</th>
                            <th>Juara</th>
                            <th>Total Nilai</th>
                            <th>Tahun</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($juara as $jur) : ?>
                            <tr>
                                <td>
                                    <?= $no;  ?>
                                </td>
                                <td>
                                    <?= $jur->kecamatan ?>
                                </td>
                                <td>
                                    <?= $jur->desa ?>
                                </td>
                                <td>
                                    <?= $jur->juara ?>
                                </td>
                                <td>
                                    <?= $jur->total_nilai ?>
                                </td>
                                <td><?= $jur->tahun  ?>

                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
            <div class="col-sm-12">
                One of three columns
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