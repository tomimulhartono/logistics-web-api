<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="shortcut icon" href="img/icon.jpg">
    
    <style>
        .navbar {
            background-color: #343334;
        }
        .nav-item {
          font-size: 14px;
        }
          body {
           background-image: url(img/wallpaper6.jpg);
           background-size: cover;
            color: white;
        }
    </style>

 
     <title>Data Pegawai</title>
  <body>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <img class="ml-3" src="img/truck_logo.png" alt="" href="home.php">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item text-white font-weight-bold">
                        <a class="nav-link" href="home.php">BERANDA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown text-white font-weight-bold">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        DATA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-dark font-weight-bold" href="data_pegawai.php">Data Pegawai Logistik</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="data_purchase_order.php">Data Purchase Order</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="data_pelanggan.php">Data Pelanggan</a>
                        </div>
                    </li>
                    <li class="nav-item text-white font-weight-bold">
                        <a class="nav-link" href="pengiriman_input.php">PENGIRIMAN</a>
                    </li>
                    <li class="nav-item text-white font-weight-bold">
                        <a class="nav-link" href="jadwal_input.php">JADWAL</a>
                    </li>
                    <li class="nav-item dropdown text-white font-weight-bold">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        TRACKING
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="tracking_input.php">Input Data</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="tracking_update.php">Update Status</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="tracking_select.php">Tracking Details</a>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

    <?php  
        $sumber = 'http://ecommerce-sdm-api.herokuapp.com/api/pegawai/divisi/Logistics';
        $konten = file_get_contents($sumber);
        $data = json_decode($konten, true);
    ?>
    
    <br><br><br><br>
    
    <div class="container">
        <h1 class="display-5 font-weight-bold text-center">Data Pegawai Logistic</h1> <br><br>
        <div class="row">
            <table class="table table-bordered  text-center">
                <thead class="font-weight-bold">
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Pegawai</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Divisi</th>
                    <th scope="col">Posisi</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php   
                        for($a=1; $a < count($data); $a++)
                        {
                            print "<tr>";
                            
                            print "<td>".$a."</td>";
                            
                            print "<td>".$data[$a]['id_pegawai']."</td>";
                            print "<td>".$data[$a]['nama_pegawai']."</td>";
                            print "<td>".$data[$a]['divisi']."</td>";
                            print "<td>".$data[$a]['posisi']."</td>";
                            print "<td>".$data[$a]['ttl']."</td>";
                            print "<td>".$data[$a]['alamat']."</td>";
                            print "<td>".$data[$a]['status']."</td>";
                            print "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>