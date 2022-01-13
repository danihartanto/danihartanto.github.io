<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body style="position: relative;">
    <?php include ('navbar.php'); ?>
    
    <main class="batas-atas">
        <div class="card text-white bg-primary mb-3">
          <h5 class="card-header">Hasil Keputusan</h5>
          <br>
          <br>
          <div class="card-body text-left ukuran-30 ">
            <div class="text-center">
                <p>SISTEM PAKAR MENENTUKAN JENIS OLAHRAGA</p>
              </div>
              <script>
              function myFunction() {
                  window.print();
              }
              </script>
            <table class="table table-bordered">
              <thead class="text-center">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Usia</th>
                  <th scope="col">Rekomendasi</th>
                  <th scope="col-sm-2 row-sm-2" rowspan="2">Informasi</th>
                </tr>
              </thead>
              <tbody class="text-center">
                <tr>
                  <?php
                  include ('koneksi.php');
                  //$kode='m01';
                  session_start();
                  //echo "<p>Nama : ".$_SESSION['nama']."</p>";
                  //echo "<p>Umur : ".$_SESSION['umur']."</p>";
                      
                      if(isset($_GET['kode'])){
                          $kode=$_GET['kode'];
                      }   
                  ?>
                  <th scope="row">1</th>
                  <td><?= $_SESSION['nama']?></td>
                  <td><?= $_SESSION['umur'] ?></td>


                  

                  <?php
                  $sql = "SELECT * from tb_solusi WHERE kode_solusi='$kode'";
                  $data = mysqli_query($connect,$sql);
                  $row = mysqli_fetch_assoc($data);

                  if ($row['kode_solusi']=="x-1" || $row['isi_solusi']=="x-2" || $row['isi_solusi']=="x-3" || $row['isi_solusi']=="x-4" || $row['isi_solusi']=="x-5") {
                       echo "<center><p><strong style='color:red'>SISTEM TIDAK MENEMUKAN JAWABAN !</strong></p></center><hr>";
                  }
                  
                  else{
                      $hasil = $row['isi_solusi'];
                      $informasi = $row['information'];
                  }
                  
                  ?>

                  <td class="text-center"><?= "$hasil"; ?></td>
                  <td style="text-align: justify-all;"><?= "$informasi"; ?></td>
                </tr>
                
              </tbody>
            </table>

            <br>
            <div class="text-center">
                <a style="margin-bottom: 10px;" href="hapus-session.php" class="btn btn-outline-danger col-sm-2">Akhiri</a>
                <a style="margin-bottom: 10px;"  onclick="myFunction()" class="btn btn-outline-warning col-sm-2">Cetak</a>
            </div>
          </div>
          <br>
          <br>
          <p>*hasil keputusan dari sistem pakar ini bisa saja berbeda dengan yang lain.</p>
          
        </div>
    



    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
  <?php include ('footer.php'); ?>
</body>
</html>