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
                 enter a number to calculate total electricity bill  
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form method="POST">
                    <div class="form-group">
                        <label for="num1">num1</label>
                        <input type="text" name="num1" id="num1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                    
                    <button class=" btn btn-outline-primary form-control"> calculate </button>
                    <br>
                    <br>
                    <?php 
                    // ($_POST);'
                    define('VAT', 0.20);
                    $price = "";
                    $total = "";
                    $vat = "";


                    if ($_POST) {
                        $no1 = $_POST['num1'];
                        

                    
                    if ($no1 >= 0 && $no1 < 50 ) {
                        $price = $no1 * 0.5 ;

                    }elseif ($no1 >= 50 && $no1 < 150) {
                        $price = $no1 * 0.75 ;
                        
                    }elseif ($no1 >= 150 && $no1 <250) {
                        $price = $no1 * 1.20 ;

                    }elseif ($no1 >= 250 ) {
                        $price = $no1 * 1.5 ;
                    }else {
                        echo 'error';
                    }

                    $vat = $price * VAT;
                    $total = $price + $vat;

                    echo " price is {$price} <br>";
                    echo " vat is {$vat} <br>";
                    echo " total electricity bill is {$total} <br>";
                }



                    ?>
                    

                

                

                    
                     
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