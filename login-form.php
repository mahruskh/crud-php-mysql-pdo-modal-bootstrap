
<html>
  <head>
    <title>Sign Administrator</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  </head>
  <body class="hold-transition login-page ">
    <?php
      session_start();

      include 'addfile/koneksi.php';
      if(!empty($_SESSION['level'])){
        header("location:index.php") ;
      }

     //proses-cek-login
      if (isset($_POST['proses-login'])) {
        $username = trim($_POST['username']);
        $password = md5(trim($_POST['password']));

        if ($username=="" || $password=="") {
          $error="Username and Password is Required";
        }
        else {
          $login = $koneksi->prepare("SELECT username, password, level, nama FROM tb_admin WHERE username=:username");
          $login->bindParam(':username',$username);
          $login->execute();
          $data = $login->fetch(PDO::FETCH_ASSOC);
          if (COUNT($data['username']) == 1 && $password == $data['password']) {
              $_SESSION['username'] = $data['username'];
              $_SESSION['level'] = $data['level'];
              $_SESSION['nama'] = $data['nama'];
              header("location:index.php");
          }
          else {
            $error="Username or Password is Incorrect";
	    $username = "";
	    $password = "";
		
          }
        }
      }
     ?>
    <div class="login-box">
      <div class="login-logo">
        <b>SIM Data Siswa</b>
      </div>
      <div class="login-box-body">
          <p class="login-box-msg">Sign in Administrator </p>     
          <?php
            if (isset($error)) {
              echo  '<div class="alert alert-danger alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>'.$error. '</strong>
                     </div>' ;
            }
           ?>     
          <form action="login-form.php" method="post">
            <div class="form-group has-feedback">
              <input type="text" class="form-control" name="username" placeholder="Username">
              <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
              <input type="password" class="form-control" name="password" placeholder="Password">
              <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <button type="submit" name="proses-login" class="btn btn-primary btn-block btn-flat"><span class="glyphicon glyphicon-log-in"></span><b> Sign In</b></button>
          </form>
      </div>
    </div>




    <!-- jQuery 2.2.3 -->
    <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js"></script>
  </body>
</html>
