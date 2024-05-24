<?php 

@include 'config.php';

if(isset($_POST['submit'])) {
    $name= $_POST['name'];
    $price= $_POST['price'];
    $image= $_POST['imglink'];
    $stock= $_POST['stock'];

    $query= "INSERT INTO items (name , price , image, stock) VALUES ('$name','$price','$image','$stock')";

    mysqli_query($conn, $query);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="add_item.php" method="post" class="userform">
        
        <div class="add_item_form">
        <h3 id="h3101">Add your item</h3>

        <input type="text" name="name" required placeholder="enter item  name">
        <input type="text" name="price" required placeholder="enter item price">
        <input type="text" name="imglink" required placeholder="enter your image link">
        
        <select name="stock" id="btnstock">
         <option value="stock">In stock</option>
         <option value="outOfStock">Out Of Stock</option>
      </select>

        <input type="submit" name="submit" value="add" class="form-btn">
        </div>
        
        <p id="p101">view item <a href="home1.php">View</a></p>
        </div>
     </form>
    
</body>
</html>