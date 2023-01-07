<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12 row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="col-md-12">
                    <?php
                        include "koneksi.php";
                        $data = mysqli_query($conn, "SELECT * FROM 'siswa'");

                        while ($row = mysqli_fetch_array($data)) {

                        
                    ?>
                    <div class="col-md-12 row mb-5">
                        <div class="col-md">
                            <img src = "file/<?php echo $row['foto'] ; ?>">
                        </div>
                    </div>
                        <?php }?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>