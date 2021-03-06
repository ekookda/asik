<?php
  session_start();
  include '../library/koneksi.php';
  $link = koneksi();

  if (!isset($_SESSION['username'])) {
    echo "<script>
      window.alert('Maaf, anda belum login ');
      window.location=('index.php')</script>";
  } else {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Siswa</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style media="screen">
    .form-signin
      {
      max-width: 330px;
      padding: 15px;
      margin: 0 auto;
      }
    .form-signin .form-signin-heading, .form-signin .checkbox
      {
      margin-bottom: 10px;
      }
    .form-signin .checkbox
      {
      font-weight: normal;
      }
    .form-signin .form-control
      {
      position: relative;
      font-size: 16px;
      height: auto;
      padding: 10px;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;
      }
    .form-signin .form-control:focus
      z-index: 2;
      {
      }
    .form-signin input[type="text"]
      {
      margin-bottom: -1px;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 0;
      }
    .form-signin input[type="password"]
      {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      }
    .account-wall
      {
      margin-top: 20px;
      padding: 40px 0px 20px 0px;
      background-color: #f7f7f7;
      -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      }
    .login-title
      {
      color: #555;
      font-size: 18px;
      font-weight: 400;
      display: block;
      }
    .profile-img
      {
      width: 96px;
      height: 96px;
      margin: 0 auto 10px;
      display: block;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      }
    .need-help
      {
      margin-top: 10px;
      }
    .new-account
      {
      display: block;
      margin-top: 10px;
      }
    </style>
  </head>
  <body>
    <!-- nav tabs -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <img src="../img/logo.png" alt="logo-asik" width="120px" />
            <!-- <span class="glyphicon glyphicon-star"></span>&nbsp;ASIK&nbsp;<span class="glyphicon glyphicon-star"></span> -->
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin.php"><span class="glyphicon glyphicon-home"></span>&nbsp;</a></li>
            <li><a href="datasiswa.php"><span class="glyphicon glyphicon-education"></span>&nbsp;Data Siswa</a></li>
            <li><a href="datauser.php"><span class="glyphicon glyphicon-user"></span>&nbsp;User</a></li>
            <li><a href="bukutamu.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Buku Tamu</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $_SESSION['username']; ?></a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav><!-- /.end-nav -->
    <br>

    <!-- tambah data siswa -->
    <div class="alert alert-info" style="margin-top:50px">
      <div class="container">
        <h1 class="text-center login-title"><span class="glyphicon glyphicon-user"></span>&nbsp;Registrasi Data Kelulusan Siswa</h1><hr>
        <!-- Form tambah data siswa -->
        <form class="form-horizontal" method="post" action="registerdatasiswa.php" role="form">
          <div class="row">
            <div class="col-sm-6">
              <div class="form-group">
                <label for="id_peserta" class="control-label col-sm-4">Nomor Peserta Ujian :</label>
                <div class="col-sm-7">
                  <input type="text" name="nomorpeserta" class="form-control" autofocus required>
                </div>
              </div>
              <div class="form-group">
                <label for="nama_peserta" class="control-label col-sm-4">Nama Peserta Ujian :</label>
                <div class="col-sm-7">
                  <input type="text" name="namasiswa" class="form-control" required>
                </div>
              </div>
              <div class="form-group">
                <label for="nbindo" class="control-label col-sm-4">Nilai Bhs. Indonesia :</label>
                <div class="col-sm-7">
                  <input type="text" name="nbind" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="nbing" class="control-label col-sm-4">Nilai Bhs. Inggris :</label>
                <div class="col-sm-7">
                  <input type="text" name="nbing" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="nmat" class="control-label col-sm-4">Nilai Matematika :</label>
                <div class="col-sm-7">
                  <input type="text" name="nmtk" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="nipa" class="control-label col-sm-4">Nilai IPA :</label>
                <div class="col-sm-7">
                  <input type="text" name="nipa" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="nips" class="control-label col-sm-4">Nilai IPS :</label>
                <div class="col-sm-7">
                  <input type="text" name="nips" class="form-control">
                </div>
              </div>
            </div><!-- /.end col-sm-6 -->
            <div class="col-sm-6">
              <div class="form-group">
                <label for="programstudi" class="control-label col-sm-4">Program Studi :</label>
                <div class="col-sm-7">
                  <select class='form-control' name="jurusan">
                    <option value=""></option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="keterangan" class="control-label col-sm-4">Keterangan :</label>
                <div class="col-sm-7">
                  <select class='form-control' name="keterangan">
                    <option value=""></option>
                    <option value="LULUS">LULUS</option>
                    <option value="TIDAK LULUS">TIDAK LULUS</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="message" class="control-label col-sm-4">Message :</label>
                <div class="col-sm-7">
                  <textarea class='form-control' name="pesan" placeholder='Isi pesan' style="resize:none" rows="5"></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="control-label col-sm-4"></label>
                <div class="col-sm-7">
                  <button type="submit" class="btn btn-info btn-block" name="btn-simpan"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp;&nbsp;Simpan</button>
                  <input type="button" class="btn btn-danger btn-block" value="Kembali" onclick="history.back(-1)">
                </div>
              </div>
            </div><!-- /.end col-sm-6 -->
          </div><!-- End row -->
        </form>
        <br><br>
      </div><!-- End alert -->
    </div><!-- End Container -->

  <?php } // end-if ?>
<?php include '../template/footer.php'; ?>
