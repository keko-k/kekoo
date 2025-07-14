<?php
include( 'config.php' );
$ID=$_GET['id'];
$up =mysqli_query($con, "SELECT * from prod where id=$ID");
$data= mysqli_fetch_array($up);
?>
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
    <title>تاكيد شراء المنتج  </title>
    <style>
    input{
        display:none;
    }
    button{
     margin-left: 10px;       
    border:none;
    padding: 7px;
    width: 40%;
    font-weight: bold;
    font-size: 15px;
    background-color: #b1b524;
    cursor: pointer;
    margin-bottom: 15px;
}
    .main{
        width:30%;
        padding: 30px;
        box-shadow: 1px 1px 5px silver;
        margin-top: 50px;
          }
        </style>
</head>
<body>
   <center>
<div class="main">
<form action="insert_card.php"method="post">
<h2>هل فعلا تريد شراء المنتج  </h2>
<input type="text" name= "id" value = '<?php echo $data ['id']?>' >
<input type="text" name= "name" value =  '<?php echo $data ['name']?>'>
<input type="text" name= "price" value =  '<?php echo $data['price']?>'>
<br>
<button name= "add" type="submit" 
class= 'btn btn-warning' >
تاكيد اضافه المنتج للعربه</button>
<br><br>
<a href="shop.php">الرجوع لصفحه المنتجات </a>
</form>
</div>
</center>
</body>
</html>