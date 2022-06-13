<?php 

session_start();

$errors = [];
 if($_SERVER['REQUEST_METHOD'] == "POST") {
    $exampleRadios = $_POST['exampleRadios'];
    $exampleRadios1 = $_POST['exampleRadios1'];
    $exampleRadios2 = $_POST['exampleRadios2'];
    $exampleRadios3 = $_POST['exampleRadios3'];
    $exampleRadios4 = $_POST['exampleRadios4'];
    
    if (empty($_POST['exampleRadios'])) {
     $errors['exampleRadios'] = "<div class='text-danger font-weight-bold'>please answer the first question</div>";

 }
    if (empty($_POST['exampleRadios1'])) {
     $errors['exampleRadios1'] = "<div class='text-danger font-weight-bold'>please answer the second question</div>";
 }
    if (empty($_POST['exampleRadios2'])) {
     $errors['exampleRadios2'] = "<div class='text-danger font-weight-bold'>please answer third question</div>";
 }
    if (empty($_POST['exampleRadios3'])) {
     $errors['exampleRadios3'] = "<div class='text-danger font-weight-bold'>please answer fourth questions</div>";
 }
    if (empty($_POST['exampleRadios4'])) {
     $errors['exampleRadios4'] = "<div class='text-danger font-weight-bold'>please answer fourth questions</div>";
 }
 
 if(empty($errors)){
     // no valdidation error
     // login


    //  $_SESSION['exampleRadios'] = $exampleRadios;
    //  $_SESSION['exampleRadios1'] = $exampleRadios1;
    //  $_SESSION['exampleRadios2'] = $exampleRadios2;
    //  $_SESSION['exampleRadios3'] = $exampleRadios3;
    //  $_SESSION['exampleRadios4'] = $exampleRadios4;
     header('location:result.php');die;

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
    <form action="result.php" method="post">

        <div class="form" style="
    width: 60%;
    margin: auto;
    margin-top: 50px;
">
            <table class="table">
                <thead class="thead-dark">
                    <tr style="
            background-color: cadetblue;font-weight: bold;">
                        <th scope="col" style="
    width: 50%;">Question</th>
                        <th scope="col" style="text-align: center;">bad</th>
                        <th scope="col" style="text-align: center;">good</th>
                        <th scope="col" style="text-align: center;">very good</th>
                        <th scope="col" style="text-align: center;">excelent</th>
                    </tr>
                </thead>
                <tbody>

                    <tr name="q1">

                        <td>are you satisfied with the level of cleanliness?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios"
                                    id="exampleRadios2" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios"
                                    id="exampleRadios2" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio" name="exampleRadios"
                                    id="exampleRadios24" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios"
                                    id="exampleRadios25" value="excelent">
                            </div>
                        </td>


                    </tr>
                    <tr name="q2">
                        <td>are you satisfied with the service prices</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios1"
                                    id="QUE1" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios1"
                                    id="QUE1" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio"
                                    name="exampleRadios1" id="QUE1" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios1"
                                    id="QUE1" value="excelent">
                            </div>
                        </td>


                    <tr name="q3">
                        <td>are you satisfied with the nurcing service?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios2"
                                    id="QUE2" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios2"
                                    id="QUE2" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio"
                                    name="exampleRadios2" id="QUE2" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios2"
                                    id="QUE2" value="excelent">
                            </div>
                        </td>

                    </tr>
                    <tr name="q4">
                        <td>are you satisfied with the level of doctor?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios3"
                                    id="QUE3" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios3"
                                    id="QUE3" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio"
                                    name="exampleRadios3" id="QUE3" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios3"
                                    id="QUE3" value="excelent">
                            </div>
                        </td>

                    </tr>
                    <tr name="q5">
                        <td>are you satisfied with the level of the calmness in the hospital?</td>
                        <td>
                            <div name="bad" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios4"
                                    id="QUE4" value="bad">
                            </div>
                        </td>

                        <td>
                            <div name="good" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios4"
                                    id="QUE4" value="good">
                            </div>
                        </td>

                        <td>
                            <div name="verygood" class="form-check">
                                <input class="form-check-input" style=" margin: auto;" type="radio"
                                    name="exampleRadios4" id="QUE4" value="verygood">
                            </div>
                        </td>

                        <td>
                            <div name="excelent" class="form-check">
                                <input class="form-check-input" style="margin: auto;" type="radio" name="exampleRadios4"
                                    id="QUE4" value="excelent">
                            </div>
                        </td>

                    </tr>




                </tbody>

            </table>
            <div><?= $errors['exampleRadios'] ?? "" ?></div>
            <div><?= $errors['exampleRadios1'] ?? "" ?></div>
            <div><?= $errors['exampleRadios2'] ?? "" ?></div>
            <div><?= $errors['exampleRadios3'] ?? "" ?></div>
            <div><?= $errors['exampleRadios4'] ?? "" ?></div>

            <div>
                <button type="submit" class="btn btn-primary " style="margin-top: 20px;width: 100%;">result</button>

            </div>


    </form>


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>

</html>