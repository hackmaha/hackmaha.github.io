<?php


       $conn=mysqli_connect('localhost','root','','hackm');
        if(mysqli_connect_errno())
        {
            echo 'Database connection failed wiht following error: '.mysqli_connect_error();

        }
            if (isset($_POST['sub']))
        {
            $name = mysqli_real_escape_string($conn,$_POST['uname']);
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $number = mysqli_real_escape_string($conn,$_POST['phonenumber']);
            $radio_input = mysqli_real_escape_string($conn,$_POST['radio']);
            $pass =md5( mysqli_real_escape_string($conn,$_POST['pass']));
            $cpass =md5( mysqli_real_escape_string($conn,$_POST['cpass']));

            if($pass != $cpass)
            {
              echo("Password did not  match");
            }


            if(isset($_POST['radio']))
                  {
                  echo "<span>You are reistered as a :<b> ".$_POST['radio']."</b></span>";
                  }
                  else{ echo "<span>Please choose your privelege type</span>";}

            if(isset($_POST['email'])){
            $sql ="select * from registration where(email='$email')";
            $res=mysqli_query($conn,$sql);
            if(mysqli_num_rows($res)>0)
            {
                echo "<script>email id already exists</script>";
            }
            else {

                          $query = "insert into registration ( `email`,`name`,`phone`,`password`,`type_of`) values ('$email','$name','$number','$pass','$radio_input')";


                          $result = mysqli_query($conn, $query);
                          if(!$result)

                              {
                                  echo "error occured";
                              }
            }

}


        }
?>





  <!DOCTYPE html>
   <html>
  <head>
<title>Post your ad</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" >
    <meta charset="utf-8">
    <title>INTEGER Innovation</title>
    <meta name="author" content="Adtile">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/5c50c79e2e.js"></script>
    <link rel="stylesheet" href="css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <script src="js/responsive-nav.js"></script>

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- //pop-up-box -->
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <link href="//fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

  </head>
     <link rel ="stylesheet" href="main.css">
<style>

    #login-form
    {


    }
    .form-control{
      border-radius: 0px;
    }
</style>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
       <body >

         <div class="container-fluid">
          <div class="container" id="submit-form" >
              <div class="col-xs-2"></div>
              <div class="col-xs-8" style="border:1px solid grey;">
                <div id="login-form">
                        <form method="post" autocomplete="off">

                            <div class="col-md-12">

                                <div class="form-group">
                                    <center><h2 class="">Registration form</h2></center>
                                </div>

                                <div class="form-group">
                                    <hr/>
                                </div>

                                <?php
                                if (isset($errMSG)) {
                                    ?>
                                    <div class="form-group">
                                        <div class="alert alert-<?php echo ($errTyp == "success") ? "success" : $errTyp; ?>">
                                            <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user-circle" aria-hidden="true"></i></span>
                                        <input type="text" name="uname" class="form-control" placeholder="Enter Your Fullname" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone-square" aria-hidden="true"></i></span>
                                        <input type="tel" name="phonenumber" class="form-control" placeholder="Enter Your mobile number" required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i>
</span>
                                        <input type="password" name="pass" class="form-control" placeholder="Enter Password"
                                               required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i>
</span>
                                        <input type="password" name="cpass" class="form-control" placeholder="Confirm your Password"
                                               required/>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">

                                                    <input name="radio" type="radio" value="Admin">Admin
                                                    <input name="radio" type="radio" value="Supplier">Supplier
                                                    <input name="radio" type="radio" value="Godown">Godown
                                                    <input name="radio" type="radio" value="Shop">Shop
                                    </div>
                                </div>




                                <div class="checkbox">
                                    <label><input type="checkbox" id="TOS" href="#" required>I agree with
                                            terms of service</a></label>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn    btn-block btn-primary" name="sub" id="reg">Register</button>
                                </div>

                                <div class="form-group">
                                    <hr/>
                                </div>

                                <!-- <div class="form-group">
                                    <a href="login.php" type="button" class="btn btn-block btn-success" name="btn-login">Login</a>
                                </div> -->

                            </div>

                        </form>
                    </div>


              <div class="col-xs-2"></div>
              </div>
           </div>

        <script>


       </script>

   <script>

   document.getElementById('submit-form').addEventListener('sub', function(event){
       if(document.getElementById('TOS').checked == false){
           event.preventDefault();
           alert("By signing up, you must accept our terms and conditions!");
           return false;
       }
   });



   </script>
       </body>


       </html>
