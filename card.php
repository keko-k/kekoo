<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri&family=Cairo:wght@200&family=Poppins:wght@100;200;300&family=Tajawal:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  منتجاتي| عربتي </title>
      <style>
      main{
          width: 40%;
          margin-top: 30px;
      }
      table{
          box-shadow: 1px 1px 10px silver;
      }
      thead{
          background-color: #3498DB;
          color: white;
          text-align: center;
      }
      tbody{
          text-align: center;
      }
      </style>
</head>
<body>
<center> 
<h3>منتجاتك المحجوزه </h3>
</center>
<?php
include( 'config.php' );
$result = mysqli_query($con, "SELECT * FROM addcard");
while($row = mysqli_fetch_array($result)){
echo "  
<center>
<main>
    <table class='table' >
    <thead>
    <tr>
<th scope= 'co1' >اسم المنتج</th>
<th scope= 'co1' >سعر المنتج</th>  
<th scope= 'co1' >حدف المنتج</th>
    </tr>
    </thead>
<tbody>
    <tr>
<td>$row[name]</td>
<td>$row[price]</td>
<td><a href='del_card.php? id=$row[id]' class= 'btn btn-danger' >ازاله </a></td>
    </tr>
</tbody>
</table>
</main>
</center>
";}
?> <br>
<center>
<a href="shop.php">  الرجوع لصفحه المنتجات</a>
</center>
</body>
</html>