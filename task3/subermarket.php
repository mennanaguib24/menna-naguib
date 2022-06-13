<?php
if ($_POST) {
    $username = $_POST['username'];
    $varieties = $_POST['varieties'];
    // $city = $_POST['city'];
    // $city = $_POST['city'];
    

   
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


                    <button class=" btn btn-outline-primary form-control" type="submit"> enter product </button>
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
                        if(isset($_POST['varieties']))
                        
                        for ($varietie=1; $varietie <= $_POST['varieties']; $varietie++){

                         ?>
                            <tr>
                                <td><input type="text" name="productname <?= $varietie ?>" value="<?= $_POST['productname'.$varietie] ?? ''?>"></td>
                                <td><input type="number" name="Price<?= $varietie ?>"value="<?= $POST['Price' .$varietie] ?? ''?>"></td>
                                <td><input type=" number" name="Quantitiy <?= $varietie ?>"value="<?= $POST['Quantitiy' .$varietie] ?? ''?>"></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                        

                    </table>  
                    <button class=" btn btn-outline-primary form-control" type="submit" name="recipt"> recipt </button>
                    <?php } ?>
<!-- 
                    <?php
                    
                        if(isset($_POST['recipt'])){
                        ?>
                        
                        
                        <table style="margin: auto;width: 100%;" name="table">
                
                        <thead class="thead-dark">
                            <tr style="background-color: cadetblue;font-weight: bold;">
                                <th scope="col" style="text-align: center;" >product name</th>
                                <th scope="col" style="text-align: center;">price</th>
                                <th scope="col" style="text-align: center;">Quantities</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>hjg,</td>
                                <td>fdgd</td>
                                <td>fg</td>

                            </tr>
                            <?php } ?>
                        </tbody>
                        

                    </table>  -->
                    

                        







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