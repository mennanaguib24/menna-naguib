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
                    entere 3 numbers to know max num and mini mun 
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form method="POST">
                    <div class="form-group">
                        <label for="num1">num1</label>
                        <input type="text" name="num1" id="num1" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="num2">num2</label>
                        <input type="text" name="num2" id="num2" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="num3">num3</label>
                        <input type="text" name="num3" id="num3" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                    <button class=" btn btn-outline-primary form-control"> submit </button>
                    <br>
                    <br>
                    <?php 
                    // ($_POST);

                    if ($_POST) {
                        $no1 = $_POST['num1'];
                        $no2 = $_POST['num2'];
                        $no3 = $_POST['num3'];

                   

                    if ($no1 > $no2 && $no1 > $no3 && $no2 > $no3) {
                        echo "max num is {$no1}
                        <br> mini num is {$no3}"
                        ;
                    }elseif ($no1 > $no2 && $no1 > $no3 && $no3 > $no2) {
                        echo "max num is {$no1}
                        <br> mini num is {$no2}";
                    }


                    if ($no2 > $no3 && $no2 > $no1 && $no3 > $no1) {
                        echo "max num is {$no2}
                        <br> mini num is {$no1}"
                        ;
                    }elseif ($no2 > $no3 && $no2 > $no1 && $no3 > $no1) {
                        echo "max num is {$no2}
                        <br> mini num is {$no1}";
                    }


                    if ($no3 > $no2 && $no3 > $no1 && $no2 > $no1) {
                        echo "max num is {$no3}
                        <br> mini num is {$no1}"
                        ;
                    }elseif ($no3 > $no2 && $no3 > $no1 && $no1 > $no2) {
                        echo "max num is {$no3}
                        <br> mini num is {$no2}";
                    }

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