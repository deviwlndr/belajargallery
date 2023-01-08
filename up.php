<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form_upload.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-12 row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="col-md-12 mt-4">
                    <h2>Foto Sudah Terupload</h2>
                </div>
                <div class="col-md-12 mt4">
                    <a href="form_upload.php" class="btn btn-success">Upload</a>
                </div>
                
                <div class="col-md-12">
                    <?php
                        include "koneksi.php";
                        $data = mysqli_query($conn, "SELECT * FROM siswa order by id_siswa DESC ");

                        while ($row = mysqli_fetch_array($data)) {

                        
                    ?>
                    <div class="col-md-12 row mb-5">
                        <div class="col-md-12">
                            <img src = "file/<?php echo $row['foto'] ; ?>" >
                        </div>
                        <div class="col-mb-9">
                            <h2><?php echo $row['nama'] ; ?> </h2>
                            <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger mt-4">Delete</a>
                        </div>
                        
                        </div>
                    </div>
                        <?php }?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>