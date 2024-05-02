<?php

/**
 * Cipher
 *
 * Simple class for encrypting and decrypting data using OpenSSL.
 *
 * @package     Cipher
 * @version     2.0.0
 */
class Cipher
{
    private $method;
    private $key;

    public function __construct($method = 'aes-256-cbc', $key = '')
    {
        $this->method = $method;
        $this->key = substr(hash('sha256', $key, true), 0, 32);
    }

    public function encrypt($input)
    {
        $iv_size = openssl_cipher_iv_length($this->method);
        $iv = openssl_random_pseudo_bytes($iv_size);
        $encrypted = openssl_encrypt($input, $this->method, $this->key, OPENSSL_RAW_DATA, $iv);
        return base64_encode($iv . $encrypted);
    }

    public function decrypt($input)
    {
        $input = base64_decode($input);
        $iv_size = openssl_cipher_iv_length($this->method);
        $iv = substr($input, 0, $iv_size);
        $input = substr($input, $iv_size);
        return openssl_decrypt($input, $this->method, $this->key, OPENSSL_RAW_DATA, $iv);
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BOBI</title>
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
                                <span class="hidden-xs">BOBI</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                    <p>
                                        Bobi - Web Developer
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
                    UAS KRIPTOGRAFI

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
                        // Include Cipher class
                        require_once("Cipher.php");

                        if (isset($_POST['submit'])) {
                            // Memperoleh teks dan kunci dari inputan pengguna
                            $text = isset($_POST['text']) ? $_POST['text'] : '';
                            $key = isset($_POST['key']) ? $_POST['key'] : '';

                            // Membuat instance dari kelas Cipher
                            $cipher = new Cipher();

                            // Melakukan enkripsi dan dekripsi menggunakan instance Cipher
                            $encrypted_text = $cipher->encrypt($text);
                            $decrypted_text = $cipher->decrypt($encrypted_text);
                        ?>
                            <h1>HASIL ENKRIPSI:</h1>
                            <p><?= $encrypted_text ?></p>
                            <h1>HASIL DEKRIPSI:</h1>
                            <p><?= $decrypted_text ?></p>
                        <?php
                        }
                        ?>

                        <h1>HASIL ENKRIPSI:</h1>
                        <p><?= $encrypted_text ?></p>
                        <h1>HASIL DEKRIPSI:</h1>
                        <p><?= $decrypted_text ?></p>
                        <?php

                        ?>

                        <h1>HASIL ENKRIPSI:</h1>
                        <p><?= $encrypted_text ?></p>
                        <h1>HASIL DEKRIPSI:</h1>
                        <p><?= $decrypted_text ?></p>
                        <?php

                        ?>
                    </div>

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright BOBI.
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