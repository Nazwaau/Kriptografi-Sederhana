<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nazwa</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" type="text/css" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" type="text/css" href="dist/css/skins/_all-skins.min.css">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Kri</b>pto</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Kriptog</b>Rapi</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs">Nzwerr</span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                  <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                  <p>
                    Nzwerr - Web Developer
                    <small>2018</small>
                  </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      <a href="#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="#">Friends</a>
                    </div>
                  </div>
                  <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="#" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
          <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
          </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

          <li><a href="enkripsi"><i class="fa fa-circle-o text-red"></i> <span>ENKRIPSI</span></a></li>
          <li><a href="dekripsi"><i class="fa fa-circle-o text-yellow"></i> <span>DEKRIPSI</span></a></li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Tugas Keamanan Informasi

        </h1>

      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->

            <!-- /.box -->

            <!-- Form Element sizes -->

            <!-- /.box -->


            <!-- /.box -->

            <!-- Input addon -->
          </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
              <div class="box-header with-border">

              </div>
              <!-- /.box-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="box-body">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Pesan</label>

                    <div class="col-sm-10">
                      <input class="form-control" placeholder="Masukkan Pesan" type="text" name="text" value="<?= isset($_POST['text']) ? $_POST['text'] : '' ?>" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Kunci</label>

                    <div class="col-sm-10">
                      <input class="form-control" placeholder="Masukkan Kunci" type="text" name="key" value="<?= isset($_POST['key']) ? $_POST['key'] : '' ?>" />
                    </div>
                  </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <button type="reset" class="btn btn-default">Reset</button>
                  <button type="submit" name="submit" value="Simpan" class="btn btn-info pull-right">Proses</button>
                </div>
              </form>
            </div>
            <!-- /.box -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
        <div class="form-group">
          <div class="form-group">
            <?php
            // Cipher.php

            class Cipher
            {
              // Metode enkripsi
              public static function encrypt($text, $key)
              {
                // IV harus dihasilkan secara acak untuk setiap enkripsi
                $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('aes-256-cbc'));
                $encrypted = openssl_encrypt($text, 'aes-256-cbc', $key, 0, $iv);
                // IV harus disertakan dalam hasil enkripsi agar dapat digunakan dalam proses dekripsi
                return base64_encode($encrypted . '::' . $iv);
              }

              // Metode dekripsi
              public static function decrypt($encrypted_text, $key)
              {
                // Pemisahan IV dari teks terenkripsi
                list($encrypted_data, $iv) = explode('::', base64_decode($encrypted_text), 2);
                return openssl_decrypt($encrypted_data, 'aes-256-cbc', $key, 0, $iv);
              }
            }
            ?>

            <?php
            $encrypted_text = "";
            $decrypted_text = "";

            if (isset($_POST['submit'])) {
              $text = isset($_POST['text']) ? $_POST['text'] : '';
              $key = isset($_POST['key']) ? $_POST['key'] : '';

              // Enkripsi teks jika kedua input tersedia
              if (!empty($text) && !empty($key)) {
                $encrypted_text = Cipher::encrypt($text, $key);
                // Dekripsi teks yang baru saja dienkripsi untuk menunjukkan fungsi dekripsi bekerja
                $decrypted_text = Cipher::decrypt($encrypted_text, $key);
              }
            }
            ?>

            <h1>HASIL ENKRIPSI:</h1>
            <p><?= $encrypted_text ?></p>
            <h1>HASIL DEKRIPSI:</h1>
            <p><?= $decrypted_text ?></p>


          </div>

        </div>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright Nzwerr.
        All rights reserved.</strong>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- jQuery 3 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fastclick/1.0.6/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>