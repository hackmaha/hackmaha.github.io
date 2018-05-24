<?php
$conn=mysqli_connect('localhost','root','','hackm');
 if(mysqli_connect_errno())
 {
     echo 'Database connection failed with following error: '.mysqli_connect_error();

 }
     if (isset($_POST['sLogin']))
 {
     $name = mysqli_real_escape_string($conn,$_POST['uname']);
     $email = mysqli_real_escape_string($conn,$_POST['email']);

     $pass =md5( mysqli_real_escape_string($conn,$_POST['pass']));

     $query="select * from registration where"



}



?>






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="/static/img/nexttech-icon.png">
  <title>Login</title>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <!-- Your custom styles (optional) -->
  <link href="/static/css/style.min.css" rel="stylesheet">

<style>

p.dashed {border-style: dashed;}

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 75%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.container {
    padding: 2px 16px;
}
</style>

<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>

<style>
header {
    font-family: 'Roboto';
}
</style>
<style type="text/css">
  .btn-round-lg{
border-radius: 22.5px;
font-family: 'Roboto';font-size: 15px;
}
</style>
<link href='https://fonts.googleapis.com/css' rel='stylesheet'>

</head>

<body>

  <!-- Navbar -->
      <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container">

          <!-- Brand -->
          <a class="navbar-brand" href="/">
            <button type="button" class="btn btn-default btn-round-lg"><strong>HOME</strong></button>
          </a>

          <!-- Collapse -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- Links -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left -->
            <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                <a class="nav-link" href="/whitepaper"><strong>Whitepaper</strong></a>
              </li>


            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">


              <li class="nav-item">
                  <a href="/login" class="nav-link border border-light rounded">
                    <i class="fa fa-user mr-2"></i>Login
                  </a>
                </li>&nbsp;&nbsp;
                <li class="nav-item">
                  <a href="/register" class="nav-link border border-light rounded">
                    <i class="fa fa-user mr-2"></i>Sign Up
                  </a>
                </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- Navbar -->

  <!--Main layout-->
  <main class="mt-5 pt-4">
    <div class="container">

      <h3 class="my-5 h3 text-center">Login</h3>

<center>

<div class="row">

  <!-- the right hand side elements-->
  <div class="col-md-6">

<div class="card">
<div class="container">
    <center>


<button type="button" class="btn btn-primary disabled">Supplier Login</button>
<form action="/login" method=post>
    <dl>

    <dt><label for="id">Login ID</label>
    <dd><input id="id" name="supplier" type="text" value="">

    </dd>


    <dt><label for="pwd">Password</label>
    <dd><input id="pwd" name="supplier_pass" type="password" value="">

    </dd>

    </dl>
    <p><input type=submit value=sLogin></p>
</form>

</center>
</div>
</div>

</div>

  <div class="col-md-6">

<div class="card">
<div class="container">
    <center>


<button type="button" class="btn btn-primary disabled">Admin Login</button>
<form action="/login" method=post>
    <dl>

    <dt><label for="id">Login ID</label>
    <dd><input id="id" name="admin" type="text" value="">

    </dd>


    <dt><label for="pwd">Password</label>
    <dd><input id="pwd" name="admin_pass" type="password" value="">

    </dd>

    </dl>
    <p><input type=submit value=aLogin></p>
</form>

</center>
</div>
</div>


</center>

</div></div>
<div class="container"><center>
<div class="row">
    <div class="col-md-6">

  <div class="card">
  <div class="container">
      <center>


  <button type="button" class="btn btn-primary disabled">Godown Login</button>
  <form action="/login" method=post>
      <dl>

      <dt><label for="id">Login ID</label>
      <dd><input id="id" name="godown" type="text" value="">

      </dd>


      <dt><label for="pwd">Password</label>
      <dd><input id="pwd" name="godown_pass" type="password" value="">

      </dd>

      </dl>
      <p><input type=submit value=gLogin></p>
  </form>

  </center>
  </div>
  </div>




      </div>
      <div class="col-md-6">

    <div class="card">
    <div class="container">
        <center>


    <button type="button" class="btn btn-primary disabled">Shop Login</button>
    <form action="/login" method=post>
        <dl>

        <dt><label for="id">Login ID</label>
        <dd><input id="id" name="shop" type="text" value="">

        </dd>


        <dt><label for="pwd">Password</label>
        <dd><input id="pwd" name="shop_pass" type="password" value="">

        </dd>

        </dl>
        <p><input type=submit value=shLogin></p>
    </form>

    </center>
    </div>
    </div>


    </center>

        </div></div>
      </center></div>
  </main>
  <!--Main layout-->

<!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->

    <!--/.Call to action-->

    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/mdbootstrap" target="_blank">
        <i class="fa fa-facebook mr-3"></i>
      </a>

      <a href="https://twitter.com/MDBootstrap" target="_blank">
        <i class="fa fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
        <i class="fa fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
        <i class="fa fa-google-plus mr-3"></i>
      </a>

      <a href="https://dribbble.com/mdbootstrap" target="_blank">
        <i class="fa fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/mdbootstrap" target="_blank">
        <i class="fa fa-pinterest mr-3"></i>
      </a>

      <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
        <i class="fa fa-github mr-3"></i>
      </a>

      <a href="http://codepen.io/mdbootstrap/" target="_blank">
        <i class="fa fa-codepen mr-3"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="https://nextech.io" target="_blank"> nextech.io </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="/static/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="/static/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="/static/js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
</body>

</html>
