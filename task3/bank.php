<?php
if ($_POST) {
    $username = $_POST['Username'];
    $Loanamount = $_POST['Loanamount'];
    $Loanyears = $_POST['Loanyears'];
    if ($Loanyears <= 3) {
        $profit = $Loanamount * 0.1;
    }else {
        $profit = $Loanamount * 0.15;
    }

$interest = $profit * $Loanyears;
$total= $Loanamount + $interest;
$peryear = $Loanyears * 12;
$monthly = $total / $peryear;
}






?>



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                 bank
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form method="POST">
                    <div class="form-group">
                        <label for="Username">User name</label>
                        <input type="text" name="Username" id="Username" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $_POST['Username'] ?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="Loanamount">Loan amount</label>
                        <input type="text" name="Loanamount" id="Loanamount" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $_POST['Loanamount'] ?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="Loanyears">Loan years</label>
                        <input type="text" name="Loanyears" id="Loanyears" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $_POST['Loanyears'] ?? ''?>">
                    </div>
                    
                    
                    <button class=" btn btn-outline-primary form-control" type="submit"> calculate </button>
                    <br>
                    <br>
                  
                    <table style="
    margin: auto;
    width: 100%;
">
                    <thead class="thead-dark">
                        <tr style="background-color: cadetblue;font-weight: bold;">
                            <th scope="col" style="text-align: center;">User name</th>
                            <th scope="col" style="text-align: center;">interest rate</th>
                            <th scope="col" style="text-align: center;">loan after interset</th>
                            <th scope="col" style="text-align: center;">monthly</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php if(isset($username)) echo $username?></td>
                            <td><?php if(isset($interest)) echo $interest?></td>
                            <td><?php if(isset($total)) echo $total?></td>
                            <td><?php if(isset($monthly)) echo $monthly?></td>
                        </tr>
                    </tbody>
                </table>
                     
                </form>
               
            </div>
        </div>
    </div>
    
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>