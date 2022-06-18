<?php
if ($_POST) {
    $username = $_POST['username'];
    $varieties = $_POST['varieties'];

}

    
    // $city = $_POST['city'];
    // $city = $_POST['city'];
    

   







?>



<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center text-primary mt-5">
                <h4>
                    suepr market
                </h4>
            </div>
            <div class="col-4 offset-4  mt-5">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="username">User name</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?= $_POST['username'] ?? ''?>">
                    </div>
                    <div class="form-group">
                        <label for="city">city</label>
                        <select name="city" value="<?= $_POST['city'] ?? ''?>" class="custom-select">
                            <option selected>select city</option>
                            <option value="cairo"
                                <?php if(isset($_POST['city'])) {echo$_POST['city']=='cairo'?'selected':'';}?>>
                                cairo
                            </option>
                            <option value="giza"
                                <?php if(isset($_POST['city'])) {echo$_POST['city']=='giza'?'selected':'';}?>>giza
                            </option>
                            <option value="alex"
                                <?php if(isset($_POST['city'])) {echo$_POST['city']=='alex'?'selected':'';}?>>alex
                            </option>
                            <option value="other"
                                <?php if(isset($_POST['city'])) {echo$_POST['city']=='other'?'selected':'';}?>>other
                            </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="varieties">number of varieties</label>
                        <input type="text" name="varieties" id="varieties" class="form-control" placeholder=""
                            aria-describedby="helpId" value="<?= $_POST['varieties'] ?? ''?>">
                    </div>


                    <button class=" btn btn-outline-primary form-control" type="submit" name="enterproduct"> enter product </button>
                    <?php if(isset($_POST['enterproduct'])){
                    ?>
                    
                    <br>
                    <br>

                    <table style="margin: auto;width: 100%;" name="table">
                        <?php
                        if(isset($_POST['varieties']))
                        
                        for ($varietie=1; $varietie <= 1; $varietie++){

                         ?>
                        <thead class="thead-dark">
                            <tr style="background-color: cadetblue;font-weight: bold;">
                                <th scope="col" style="text-align: center;" name='name'>product name</th>
                                <th scope="col" style="text-align: center;" name='price'>price</th>
                                <th scope="col" style="text-align: center;" name='quantity'>Quantities</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if(isset($_POST['varieties'])){
                        
                        for ($varietie=1; $varietie <= $_POST['varieties']; $varietie++){

                         ?>
                            <tr>
                                <td><input type="text" name="productname<?= $varietie ?>"></td>
                                <td><input type="number" name="Price<?= $varietie ?>"></td>
                                <td><input type="number" name="Q1<?= $varietie ?>"></td>

                            </tr>
                            <?php } ?>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                        

                    </table>  
                    <button class=" btn btn-outline-primary form-control" type="submit" name="recipt"> recipt </button>
                    <?php } ?>

                    <?php
                    
                        if(isset($_POST['recipt'])){
                        ?>
                        
                        
                        <table style="margin: auto;width: 100%;" name="table">
                
                        <thead class="thead-dark">
                            <tr style="background-color: cadetblue;font-weight: bold;">
                                <th scope="col" style="text-align: center;" >product name</th>
                                <th scope="col" style="text-align: center;">price</th>
                                <th scope="col" style="text-align: center;">Quantities</th>
                                <th scope="col" style="text-align: center;">sub total</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($_POST['varieties'])){
                            $total = 0;

                        
                        for ($varietie=1; $varietie <= $_POST['varieties']; $varietie++){




                                $subtotal= $_POST['Q1'.$varietie] * $_POST['Price'.$varietie];
                                $total += $subtotal;
                              if ($total < 1000) {
                                $discount = 0;
                              }elseif ($total > 1000 && $total < 3000) {
                                $discount = 0.1;
                              }elseif ($total > 3000 && $total < 4500) {
                                $discount = 0.15;
                              }elseif ($total > 4500) {
                                $discount = 0.20;
                              }
                              $discountperpound = $total * $discount;
                              $totalafterdiscount = $total -  $discountperpound;
                              

                            if($_POST['city'] =='cairo') {
                                $delivery = 0;
                            }elseif($_POST['city'] =='giza') {
                                $delivery = 30;

                            }elseif($_POST['city'] =='alex') {
                                $delivery = 50;
                            }else{
                                $delivery = 100;
                            }

                            $nettotal = $totalafterdiscount +  $delivery;

                         ?>

                         
                            
                            <tr style="text-align: center;">
                                <td><?= $_POST['productname'.$varietie]?></td>
                                <td><?= $_POST['Price'.$varietie]?></td>
                                <td><?= $_POST['Q1'.$varietie]?></td>
                                <td><?= $_POST['Q1'.$varietie] * $_POST['Price'.$varietie]?></td>
                                <td></td>
                                

                            </tr>
                            <?php } ?>
                            <br>
                            <br>

                            <tr>
                            <td>client name</td>
                            <td><?= $_POST['username']?></td>
                        </tr>
                        <tr>
                            <td>city</td>
                            <td><?= $_POST['city']?></td>
                        </tr>
                        <tr>
                            <td>total</td>
                            
                            <td><?= $total?></td>
                        </tr>
                        <tr>
                            <td>discount</td>
                            <td><?=  $discountperpound?> <b>EGP<b></td>
                        </tr>
                        <tr>
                            <td>total after discount</td>
                            <td><?= $totalafterdiscount ?></td>
                        </tr>
                        <tr>
                            <td>delivery</td>
                            <td><?= $delivery ?></td>
                        </tr>
                        <tr>
                            <td>net total</td>
                            <td><?= $nettotal ?></td>
                        </tr>
                            <?php } ?>
                            <?php } ?>
                        </tbody>
                        </table>
                    </table> 
                    
                        
                        
       



                </form>

                

            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>