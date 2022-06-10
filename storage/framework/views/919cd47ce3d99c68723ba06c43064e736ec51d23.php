<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .btn {
      background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 12px 16px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .btn:hover {
      background-color: RoyalBlue;
    }
    #footer {
            position: fixed-bottom;
            padding: 10px 10px 0px 10px;
            bottom: 0;
            width: 100%;
            /* Height of the footer*/ 
            height: auto;
            background: grey;
    }
    </style>

    <title>Siakad</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Siakad</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"  aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="/sisw"> Data Mahasiswa </a></li>
            <li class="nav-item"><a class="nav-link" href="/create"> Input Data </a></li>
            <li class="nav-item"><a class="nav-link" href="/"> About Me </a></li>
          </ul>
        </div> <!-- navbar-collapse.// -->
      </div> <!-- container-fluid.// -->
    </nav>
    <div class="container mt-3 bg-white">
        <?php echo $__env->yieldContent('header'); ?>
    </div>
    <div class="container bg-white">
        <?php echo $__env->yieldContent('konten'); ?>
    </div>

      <footer id="footer" style="background-color: rgb(0,0,0);">
      
        <div class="container-fluid">
          <div class="row">
            <div class="col-4">
              <br>
              <img src="data:image/jpeg;base64,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" alt="utm.png" height="75" width="75">
                  <br><br>
                  <p class="text-light"><b>Jurusan Teknik Informatika<br>Universitas Trunojoyo Madura</b><br>Jl. Raya Telang, Kecamatan Kamal, Bangkalan, 69162 Indonesia<br>Kampus Universitas Trunojoyo Madura</p>
                  <br>
            </div>

            <div class="col-3">
              <br><br>
              <h5 class="text-light mb-0">Contact</h5><br>

              <ul class="list-unstyled">
                <li>
                  <p>
                  <p class="text-light">Telp : 031-3011146</a></p>
                </li>
                <li>
                  <p class="text-light">Fax : 031-301506</a></p>
                </li>
                <li>
                  <p class="text-light">email : <a href="if.ft@trunojoyo.ac.id" class="text-white">if.ft@trunojoyo.ac.id</a></p>
                </li>
              </ul>
            </div>

            <div class="col-3">
            <br><br>
              <h5 class="text-light">Layanan</h5><br>

              <ul class="list-unstyled mb-0">
                <li>
                  <p>
                  <p class="text-light">Pembayaran UKT</a></p>
                </li>
                <li>
                  <p class="text-light">Pendaftaran KP</a></p>
                </li>
                <li>
                  <p class="text-light">Pendaftaran Wisuda</a></p>
                </li>
                <li>
                  <p class="text-light">Administrasi</a></p>
                </li>
              </ul>
            </div>
            
            <div class="col-auto ">
            <br><br>
              <h5 class="text-light mb-0">Resource</h5><br>

              <ul class="list-unstyled text-light">
                <li>
                  <p>
                  <p class="text-light">e-Journal</a></p>
                </li>
                <li>
                  <p class="text-light">Portal Tugas Akhir</a></p>
                </li>
                <li>
                  <p class="text-light">Website Resmi Kampus</a></p>
                </li>
                <li>
                  <p class="text-light">Download Administrasi</a></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  </body>
</html>

<?php /**PATH C:\Users\SONY\Desktop\modul7\resources\views/layout/main.blade.php ENDPATH**/ ?>