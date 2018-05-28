<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="bootstrap/vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="bootstrap/css/sb-admin.css" rel="stylesheet">
</head>



<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register an Account</div>
      <div class="card-body">
        <form name="form" ">
    <?php echo form_open('User/confirmregistration'); ?>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputName">First name</label>
                <input class="form-control" id="exampleInputName" type="text" aria-describedby="nameHelp" placeholder="Enter first name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Last name</label>
                <input class="form-control" name="lastname" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
              </div>
              <div class="col-md-6">
                <label for="exampleInputLastName">Username</label>
                <input class="form-control" name="username" type="text" aria-describedby="nameHelp" placeholder="Enter your username">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputFbPseudo">Facebook Pseudo</label>
            <input class="form-control" name="fbpseudo" type="text" aria-describedby="nameHelp" placeholder="Enter your Facebook Pseudo">
          </div>
          <div class="form-group">
            <label for="exampleInputTel">tel</label>
            <input class="form-control" name="tel" type="text" aria-describedby="nameHelp" placeholder="Enter your tel : 0678****">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">Password</label>
                <input class="form-control" name="password" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" name="confirmpassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <div class="text-center"><input class="btn btn-primary btn-success btn-block" type="submit" value="Inscription" /></div>
        </form>

  </div>
 </div>
</div>

   <script type="text/javascript">



function verify(password1, password2)
/
 {
  
    if (password1.value!==password2.value) {
    alert("passwords don't match");
    password1.select();
    return false;
    }
    else {
       
        return true;
    }
 }
// fin du script -->
</script> 


  <!-- Bootstrap core JavaScript-->
  <script src="bootstrap/vendor/jquery/jquery.min.js"></script>
  <script src="bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>