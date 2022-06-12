<?php

session_start();

$errors = [];
if($_SERVER['REQUEST_METHOD'] == "POST") {
    $number = $_POST['number'];
    $_SESSION['number'] = $number;

   if (empty($_POST['number'])) {
    $errors['number'] = "<div class='text-danger font-weight-bold'>NUMBER Is Required</div>";
}

if(empty($errors)){
    // no valdidation error
    // login
    header('location:review.php');die;
        }
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="form" style="
    width: 30%;
    margin: auto;
    margin-top: 50px;
">
<form action="" method="post">
  <div class="form-group ">
    <label for="Number">phone number</label>
    <input type="number" name="number" id="Number" value="number"<?= $_POST['number'] ?? "" ?>" class="form-control" aria-describedby="helpId">
    <?= $errors['number'] ?? "" ?>

    <small class="form-text text-muted">please enter your phone number.</small>
  </div>
  
  <button type="submit" class="btn btn-primary " style="margin-top: 20px;">Submit</button>
</form>
</div>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>
</html>