<?php 
session_start();


if($_SERVER['REQUEST_METHOD'] == "POST") {
   $exampleRadios = $_POST['exampleRadios'];
   $exampleRadios1 = $_POST['exampleRadios1'];
   $exampleRadios2 = $_POST['exampleRadios2'];
   $exampleRadios3 = $_POST['exampleRadios3'];
   $exampleRadios4 = $_POST['exampleRadios4'];
   $total='';
   $final='';


   switch ($exampleRadios) {
    case 'bad':
        $total = 0;
        break;
    case 'good':
        $total = 3;
        break;
    case 'verygood':
        $total = 5;
        break;
    case 'excelent':
        $total = 10;
        break;
    

}
switch ($exampleRadios1) {
    case 'bad':
        $total += 0;
        break;
    case 'good':
        $total += 3;
        break;
    case 'verygood':
        $total += 5;
        break;
    case 'excelent':
        $total += 10;
        break;
    

}
switch ($exampleRadios2) {
    case 'bad':
        $total += 0;
        break;
    case 'good':
        $total += 3;
        break;
    case 'verygood':
        $total += 5;
        break;
    case 'excelent':
        $total += 10;
        break;
    

}
switch ($exampleRadios3) {
    case 'bad':
        $total += 0;
        break;
    case 'good':
        $total += 3;
        break;
    case 'verygood':
        $total += 5;
        break;
    case 'excelent':
        $total += 10;
        break;
  }
  
switch ($exampleRadios4) {
    case 'bad':
        $total += 0;
        break;
    case 'good':
        $total += 3;
        break;
    case 'verygood':
        $total += 5;
        break;
    case 'excelent':
        $total += 10;
        break;
  }


 
  if ($total <= 25){
    $final = "bad";
}else{
    $final = "good";

}
  

switch ($final) {
    case 'bad':
        $msg = "please call the patient to find out for the bad evaluation " .$number = $_SESSION['number'];
        ;
        break;
    
    default:
        $msg = "thanks";
        break;
}

   
}  
 
// $exampleRadios1 = $_SESSION['exampleRadios1'];
// $exampleRadios2 = $_SESSION['exampleRadios2'];
// $exampleRadios3 = $_SESSION['exampleRadios3'];
// $exampleRadios4 = $_SESSION['exampleRadios4'];


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

<div class="form" style="width: 60%; margin: auto; margin-top: 50px;">
<table class="table">
  <thead class="thead-dark">
    <tr style="
            background-color: cadetblue;font-weight: bold;">
      <th scope="col" style="
        width: 80%;">Question</th>
      <th scope="col" style="text-align: center;">review</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>are you satisfied with the level of cleanliness?</td>
      <td style="text-align: center;"><?php if(isset($exampleRadios)) 
      echo $exampleRadios?></td>
    </tr>  
    <tr>
      <td>are you satisfied with the service prices></td>
      <td style="text-align: center;"><?php if(isset($exampleRadios1)) 
      echo $exampleRadios1?></td>
    </tr>  
    <tr>
      <td >are you satisfied with the nurcing service?</td>
      <td style="text-align: center;"><?php if(isset($exampleRadios2)) 
      echo $exampleRadios2?></td>
    </tr>  
    <tr>
      <td>are you satisfied with the level of doctor?</td>
      <td style="text-align: center;"><?php if(isset($exampleRadios3)) 
      echo $exampleRadios3?></td>
    </tr>  
    <tr>
      <td>are you satisfied with the level of the calmness in the hospital?</td>
      <td style="text-align: center;"><?php if(isset($exampleRadios1)) 
      echo $exampleRadios1?></td>
    </tr>  




    
  </tbody>

  <tfoot>
      <tr style="
            background-color: cadetblue;font-weight: bold;">
          <td >TOTAL REVIEW</td>
          <td style="text-align: center;"><?php if(isset($final)) echo $final?></td>
      </tr>

      
  </tfoot>

</table>
<div style="
    width: 60%;
    margin: auto;
    text-align: center;
"><?php if(isset($msg)) 
      echo $msg?></div>






    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</body>
</html>

















































