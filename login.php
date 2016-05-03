<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login | SMART UMKM </title>


        <link rel="stylesheet" href="css/main.css">
        <!-- Bootstrap CSS -->
            <link href="assets/css/bootstrap.css" rel="stylesheet">
            <link href="assets/css/animate.css" rel="stylesheet">
            <link href="assets/css/font-awesome.css" rel="stylesheet">
         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
     <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
     <![endif]-->
    </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-lg-offset-4 col-md-offset-4">
                    <h1 style="animation-delay: 1s;" class="title-apps animated fadeInDown">SMART UMKM</h1>
                    <h3 class="sub-title">
                        <span class='animated bounceInLeft' style="animation-delay: 1s;">Silahkan&nbsp;</span>
                        <span class='animated bounceInUp' style="animation-delay: 1s;">Login&nbsp;</span>
                        <span class='animated bounceInRight' style="animation-delay: 1s;"> Untuk Memulai </span>
                    </h3>
                        <div class="box animated bounceInDown">
                        <small class="animated fadeIn" style="animation-delay: 1s;">Sign In To Application</small>
                        <hr />
                           
                           
<!--
<form method="post" action ="proses_login.php">
 Username : <input type="text" name="username" size="40" /> <br />
 Password : <input type="password" name="password" size="40" /><br />
 <input type="submit" value="Login">
 </form>
-->
                               
                            <form name="frmLogin" action="proses_login.php" method="POST"  class="form-horizontal" role="form">
                                <div class="form-group has-feedback animated bounceInLeft" style="animation-delay: 1s;">
                                    <input type="text" name="id_user" id="id_user" class="form-control" placeholder="Username"/>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>

                                <div class="form-group has-feedback animated bounceInRight" style="animation-delay: 1s;">
                                    <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                 </div>

                                <div class="form-group animated bounceInDown" style="animation-delay: 2s;">
                                     <div class="col-sm-4 ">
                                    <a href="registrasi.php" class="btn btn-success " >  Register <span class="fa fa-key"></span></a>
                                    </div>     
                                       <div class="col-sm-4 col-sm-offset-4">
                                       <button type="submit" class="btn btn-primary btn-block"> Login  <span class="fa fa-key"></span></button>
                                        
                                    </div>
                                   
                                </div>
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <!-- jQuery -->
            <script src="assets/js/jquery-2.1.3.min.js"></script>
            <!-- Bootstrap JavaScript -->
            <script src="assets/js/bootstrap.min.js"></script>
    </body>
    </html>