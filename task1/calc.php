<?php 
                    // ($_POST);

                    if($_POST) {
                        $number1 = $_POST['number1'];
                        $number2 = $_POST['number2'];
                        $operator = $_POST['operator'];
                        $result = '';

                        switch ($operator) {
                            case '+':
                                $result = $number1 + $number2;
                                break;
                            case '-':
                                $result = $number1 - $number2;
                                break;
                            case '*':
                                $result = $number1 * $number2;
                                break;
                            case '/':
                                $result = $number1 / $number2;
                                break;
                            
                            // default:
                            //     # code...
                            //     break;
                        }
                        
                        
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
                calculator 
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form method="POST">
                    <div class="form-group">
                        <label for="number">number1</label>
                        <input type="text" name="number1" id="number" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>

                    <div class="form-group">
                        <label for="root">number2</label>
                        <input type="text" name="number2" id="root" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    
                    <div class="text-center">
                        <input class=" btn btn-outline-primary" type="submit" name="operator" value="+" ></input>
                        <input class=" btn btn-outline-primary" type="submit" name="operator" value="-" ></input>
                        <input class=" btn btn-outline-primary" type="submit" name="operator" value="*" ></input>
                        <input class=" btn btn-outline-primary" type="submit" name="operator" value="/" ></input>
                    
                     </div>
                     <!-- <br>
                     <br> -->
                     <!-- <button class=" btn btn-outline-primary form-control"> submit </button> -->

                    <br>
                    <div class="text-center">
                    <?php 
                    if(isset($result))
                    echo $result;
                    ?>
                    </div>
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