<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Kontak Saya</title>
  </head>

  <?php 
  include 'koneksi.php';
   ?>

  <body>
  
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary shadow p-3">
      <div class="container">
        <a class="navbar-brand" href="#">
        <img src="../assets/img/favicon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
          Kontak saya
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="../index.html">Home</a>
      </div>
    </div>
      </div>
    </nav>
    <!-- akhir Navbar -->

    <!-- table -->
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12 mx-auto">
          <div class="card">
            <div class="card-body">

              <div class="table-responsive">
              <table class="table dataTable" id="dataTable" width="100%" cellspacing="0">
                  <thead class="table table-info">
                    <tr>
                      <th width="1%">No</th>
                      <th>Nama Pengirim</th>
                      <th>No Telp Wa</th>
                      <th>Subject</th>
                      <th>Pesan</th>
                      <th width="20%">Aksi</th>
                    </tr>
                  </thead>
                  <?php 
                  $no = 1;
                  $kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
                  while ($k = mysqli_fetch_array($kontak)) {

                    ?>
                    <tbody>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $k['nama'] ?></td>
                        <td><?php echo $k['no_telp'] ?></td>
                        <td><?php echo $k['subject'] ?></td>
                        <td><?php echo $k['pesan'] ?></td>
                        <td>
                          <button class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</button>

                          <button class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                        </td>
                      </tr>
                    </tbody>

                    <?php 
                  }
                  ?>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- akhir table -->
    


    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- scrpit memanggil table -->
    <script src="../assets/demo/datatables-demo.js"></script>
  </body>
</html>