<?php 
$title= "My Profile";


include_once "layouts/header.php";

include_once "App/Http/middle_wears/authen.php";


include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";

use App\Http\Requests\Validation;

$validation = new Validation;
use App\Database\Models\User;


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update_my_profile'])) {
  # code...
  $validation->setValueName('first_name')->setValue($_POST['first_name'])->required( );
  $validation->setValueName('last_name')->setValue($_POST['last_name'])->required( );
  $validation->setValueName('gender')->setValue($_POST['gender'])->required( )->in(['m','f']);
  if (empty($validation->getErrors())) {
    # code...
    $userobject = new User;
    $userobject->setFirst_name($_POST['first_name'])->setLast_name($_POST['last_name'])->setGender($_POST['gender'])->setEmail($_SESSION['user']->email);
    if ($userobject->update()) {
      # code...
                $_SESSION['user']->first_name = $_POST['first_name'];
                $_SESSION['user']->last_name = $_POST['last_name'];
                $_SESSION['user']->gender = $_POST['gender'];
      $success = "<div class='alert alert-success text-center'> Profile Updated </div>";

    }else {
      # code...
      $error = "<div class='alert alert-danger text-center'> Something Went Wrong </div>";

    }

  }
}


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['change_my_password'])) {
  # code...
  $validation->setValueName('old_Password')->setValue($_POST['old_Password'])->required( );
  $validation->setValueName('new_Password')->setValue($_POST['new_Password'])->required( )->regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,32}$/','Minimum eight and maximum 32 characters, at least one uppercase letter, one lowercase letter, one number and one special character')->confirmed($_POST['new_Password_Confirmation']);;
  $validation->setValueName('new_Password_Confirmation')->setValue($_POST['new_Password_Confirmation'])->required();
  $password = $_POST['old_Password'];
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  
  if (empty($validation->getErrors())) {
    $userpass = new User;
    $userpass->setPassword($_POST['new_Password'])->setEmail($_SESSION['user']->email);
    if(password_verify($password,$hashed_password)){
      
   
    }else{
      $error = "<div class='alert alert-danger text-center'> old pass is Wrong </div>";
    
    }
    

    if ($userpass->updatepass()){
      # code...
                
      $success = "<div class='alert alert-success text-center'> password changed </div>";

    }
    

}else {
  
  $error = "<div class='alert alert-danger text-center'> old pass is wrong </div>";

}
}



?>





<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Sabujcha - Matcha eCommerce Bootstrap4 Template</title>
    <meta name="description" content="" />
    <meta name="robots" content="noindex, follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.png"
    />

    <!-- all css here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/chosen.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/ionicons.min.css" />
    <link rel="stylesheet" href="assets/css/jquery-ui.css" />
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>
    
    
    <!-- my account start -->
    <div class="checkout-area pb-80 pt-100">
      <div class="container">
        <div class="row">
          <div class="ml-auto mr-auto col-lg-9">
            <div class="checkout-wrapper">
              <div id="faq" class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h5 class="panel-title">
                      <span>1</span>
                      <a
                        data-toggle="collapse" data-parent="#faq" href="#my-account-1"
                        >Edit your account information
                      </a>
                    </h5>
                  </div>
                  <div id="my-account-1" class="panel-collapse collapse <?= isset($_POST['update_my_profile']) ? 'show' : '' ?>">
                    <div class="panel-body">
                      <form action="" method="post">

                      <div class="billing-information-wrapper">
                        <div class="account-info-wrapper">
                          <h4>My Account Information</h4>
                          <h5>Your Personal Details</h5>
                        </div>
                        <div class="row">
                        <div class="col-12">
                            <?= $error ?? "" ?>
                            <?= $success ?? "" ?>
                                                    
                        </div>

                          <div class="col-lg-12 col-md-6">
                            <div class="row">
                              <div class="col-4 offset-4">
                              <label for="file">
                                <img style="cursor: pointer;" id="image" src="assets/img/user/defult.jpg?= $_SESSION['user']->image ?>" class="w-100 rounded-circle" alt="">
                              </label>
                              <input type="file" name="image" id="file" class="d-none">

                                

                              </div> 
                            </div>



                          <div class="col-lg-12 ">
                            <div class="billing-info">
                              <label>First Name</label>
                              <input type="text" name="first_name" value="<?= $_SESSION['user']->first_name?>"/>
                              <?= $validation->getError('first_name') ?>

                            </div>
                          </div>
                          <div class="col-lg-12 ">
                            <div class="billing-info">
                              <label>Last Name</label>
                              <input type="text" name="last_name" value="<?= $_SESSION['user']->last_name?>" />
                              <?= $validation->getError('last_name') ?>

                            </div>
                          </div>
                          
                          </div>
                          <div class="col-lg-12 ">
                            <div class="billing-info">
                              <label>gender</label>
                              <select name="gender" class="form-control" id="">
                              <option <?= $_SESSION['user']->gender == 'm' ? 'selected' : '' ?> value="m" >male</option>
                            
                              <option <?= $_SESSION['user']->gender == 'f' ? 'selected' : '' ?> value="f">female</option>
                              </select>   
                              <?= $validation->getError('gender') ?>
                           
                            
                            </div>
                          </div>
                        </div>
                       
                          
                          <div class="billing-btn">
                            <button type="submit" name="update_my_profile">update</button>
                          </div>
                        
                      </div>
                      </form>
                    </div>
                  </div>
                </div>





                <!-- password task -->

                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h5 class="panel-title">
                      <span>2</span>
                      <a data-toggle="collapse" data-parent="#faq" href="#my-account-2"> Change your password </a>
                    </h5>
                  </div>
                  <div id="my-account-2" class="panel-collapse collapse show"> 
                    <div class="panel-body">

                      <form action="" method="post">

                      <div class="billing-information-wrapper">
                        <div class="account-info-wrapper">
                          <h4>Change Your Password</h4>
                        </div>



                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                          <?= $success ?? "" ?>

                            <div class="billing-info">
                              <label>old Password</label>
                              <input type="password" name="old_Password" />
                              <?= $validation->getError('old_Password') ?>


                            </div>
                          </div>

                          <div class="col-lg-12 col-md-12">
                            <div class="billing-info">
                              <label>new Password</label>
                              <input type="password" name="new_Password" />
                              <?= $validation->getError('new_Password') ?>

                            </div>
                          </div>

                          <div class="col-lg-12 col-md-12">
                            <div class="billing-info">
                              <label>Confirm new Password </label>
                              <input type="password" name="new_Password_Confirmation" />
                              <?= $validation->getError('new_Password_Confirmation') ?>

                            </div>
                          </div>
                        </div>
                        <div class="billing-back-btn">
                          <div class="billing-back">
                            <a href="#"><i class="ion-arrow-up-c"></i> back</a>
                          </div>
                          <div class="billing-btn">
                            <button type="submit" name="change_my_password">change my password</button>
                          </div>
                        </div>
                      </div>
                      </form>
                      
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- my account end -->
    <?php 



    include_once "layouts/footer.php";
    include_once "layouts/footer-scripts.php";
    
    
    ?>
   
