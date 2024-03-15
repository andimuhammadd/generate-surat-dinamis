    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan Membuat Surat Otomatis</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="container col-lg-5">
            <div class="card mt-4">
                <form action="proses.php" method="post">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <label for="">Nama Pengaju</label>
                            <input type="text" name="nama_pengaju" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Jabatan</label>
                            <input type="text" name="jabatan" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Tanggal Berakhir</label>
                            <input type="date" name="tanggal_berakhir" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <label for="">Alasan</label>
                            <input type="text" name="alasan" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <button type="submit" class="btn btn-success">Kirim</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

    </html>