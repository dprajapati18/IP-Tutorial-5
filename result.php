<?php
    $mno=isset($_GET['mno'])?$_GET['mno']:0;
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial05</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
    .container{
        background: coral;
        height: 100px;
        

    }
</style>
</head>
<body>
<div class="container mt-3">
     <form action="result.php" method="get">
       <div class="form-group ">
         <label for="mno">Select a month number:</label>
         <select name="mno" id="mno"class="form-control">
         <option value=""<?=($mno==1)?"selected":""?>>January</option>
         <option value=""<?=($mno==2)?"selected":""?>>February</option>
         <option value=""<?=($mno==3)?"selected":""?>>March</option>
         <option value=""<?=($mno==4)?"selected":""?>>April</option>
         <option value=""<?=($mno==5)?"selected":""?>>May</option>
         <option value=""<?=($mno==6)?"selected":""?>>june</option>
         <option value=""<?=($mno==7)?"selected":""?>>July</option>
         <option value=""<?=($mno==8)?"selected":""?>>August</option>
         <option value=""<?=($mno==9)?"selected":""?>>September</option>
         <option value=""<?=($mno==10)?"selected":""?>>October</option>
         <option value=""<?=($mno==11)?"selected":""?>>November</option>
         <option value=""<?=($mno==12)?"selected":""?>>December</option>
        </select>
       </div>
     </form>   

</div>
</body>
</html>
