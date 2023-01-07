<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Foto</title>
    <link rel="stylesheet" href="form_upload.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
     <div class="container">
        <div class="col-md-12 row justify-content-center">
            <div class="col-md-6 mt-5">
                <div class="col-md-12 text-center">
                    <h2>Upload Foto Yuk</h2>
                </div>
                    <div class="col-md-12 mt-5 p-5">
                        <form enctype="multipart/form-data" method="post" action="upload.php">
                            
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>   
                                <input type="text" name="nama" class="form-control"> 
                                </div>

                                <div class="mb-3">
                                <label class="form-label">Foto</label>
                                <input type="file" name="foto" class="form-control">
                                </div>

                                <div class="mb-3 ">
                                    <button type="submit" class="btn btn-success">Upload</button>
                                    
                                </div>
                            </form>                        
                    </div>
            </div>
        </div>
     </div>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>