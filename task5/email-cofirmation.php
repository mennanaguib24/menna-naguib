<?php 

use App\Database\Models\User;

use App\Http\Requests\Validation;

$title = "confirm your email";
include_once "layouts/header.php";


include_once "App/Http/middle_wears/vistor.php";





$validation = new Validation;

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $validation->setValueName('email-confirmation')->setValue($_POST['email-confirmation'])->required()->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')->exists('users','email');
  if(empty($validation->getErrors())){
  $email_code = rand(10000,99999);
  $user = new User;

  $user->setEmail($_POST['email'])->setVerification_code($email_code);
      
    if ($user->updateemail_code()) {
            header('location:verification-code.php?email='.$_POST['email']);die;

}else {
$error = "<div class='alert alert-danger'> Something Wrong </div>";

}  
    
  }
}



?>


    <div class="login-register-area ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 ml-auto mr-auto">
            <div class="login-register-wrapper">
              <div class="login-register-tab-list nav">
                <a class="active" data-toggle="tab" href="#lg1">
                  <h4><?= $title ?></h4>
                </a>

              </div>
              <div class="tab-content">
                <div id="lg1" class="tab-pane active">
                  <div class="login-form-container">
                    <div class="login-register-form">
                    <?= $success ?? "" ?>

                      <form action="#" method="post">
                        <input type="email"name="email-confirmation"placeholder="email"/>
                          <?= $validation->getError('email-confirmation') ?>
                          <?= $error ?? "" ?>
                        
                        
                          <div class="button-box">
                              <button type="submit"><span>confirm your email</span></button>
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
   
<?php 

include_once "layouts/footer.php";
include_once "layouts/footer-scripts.php";



?>