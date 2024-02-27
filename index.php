<!DOCTYPE html>
<html>
<head>
  <title> Form Login APP Digital</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="card mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <img src="assets/img/login.png" width="500">
                    </div>
                    <div class="col-sm-6">

                        <div class="card-body">
                            <h5> Silahkan Masukan Akun Anda</h5>
                            
                            <?php
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="gagal"){

                            echo "<div class= 'alert alert-danger'>UserName dan Password tidak sesuai.!!</div>";
                                }
                            }
                            if(isset($_GET['pesan'])){
                            if($_GET['pesan']=="info_login"){

                                echo "<div class= 'alert alert-info'>Maaf Anda Belum Login.!!</div>";
                                }
                            }
                            if(isset($_GET['pesan'])){
                            if($_GET['pesan']=="info_logout"){

                                echo "<div class= 'alert alert-success'>Anda Berhasil Logout</div>";
                                }
                            }
                            if(isset($_GET['pesan'])){
                                if($_GET['pesan']=="info_daftar"){
    
                                    echo "<div class= 'alert alert-success'>Anda Berhasil Daftar</div>";
                                    }
                                }
                            
                            ?>

                            <form method="post" action="cek_login.php">
                                <div class="form-group mt-3">
                                    <label>UserName</label>
                                    <input type="text" name="Username" class="form-control">
                                </div>
                           
                                <div class="form-group mt-2">
                                    <label>Password </label>
                                    <input type="Password" name="Password" class="form-control">
                                </div>

                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                                <div class="form-group mt-2">
                                    <label>Belum Punya Akun Silahkan Klik :</label>
                                    <a href="daftar.php" class="btn btn-warning btn-sm">Daftar Akun</a>
                                </div>
                            </form>
                        </div>
                    </div>
               </div>
            </div>
        </div>
    </div>
             
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist
    /umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/
    bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>