<?php 

@include 'config.php';

    $query = " SELECT * FROM items WHERE stock = 'stock' ";
	$users = mysqli_query($conn,$query);

    $row=mysqli_fetch_assoc($users);
    //echo $row["image"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,100;1,200;1,300;1,500;1,700;1,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="home.css">
   
    
</head>
<body>


<div class="main">
        <div class="navbar">
            <div class="icon">
                <div>
                    <img  class="logo" src="logo.png" alt="">
                </div>
                <div class="menu">
                    <ul>
                    <li><a href="#">Home</a> </li>
                    <li><a href="#">Contact </a></li> 
                    <li><a href="#">About</a></li> 
                    <li><a href="#">Sign Up</a></li>
                    </ul>
                </div>
                <div class="search">
                    <input class="searchbar" type="search" placeholder="what are you looking for">
                    <a href="#"><button class="btn">Search</button> </a>
                </div>
            </div> 
        </div>
        <div class="content">
            <p>Discover<br>your <br>choice... </p>
            <p class="par1">
                Find the best, reliable, and cheap smart gadgets here. <br>
                We focus on product quality. Here you can find smart <br>
                gadgets of almost all brands. So why you are waiting? <br>
                Just order now!
            </p>
            
            <input class="searchbar2" type="search" placeholder="Find the best brands">
            <a href="#"><button class="btn2">Search</button> </a>
        </div>

</div>

<div class="description3">
    <h1>New Arraivals</h1>
</div>

<div class="description4">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Scelerisque duis <br>
         ultrices sollicitudin aliquam sem. Scelerisque duis ultrices sollicitudin
    </p>

</div>

 

 <a href="lifestyle.html" target="_blank">
    <button class="catagories">Lifestyle</button>
</a>
<button class="catagories">Electronic</button>
<button class="catagories">Sustainable</button>
<button class="catagories">Outdoors</button>
<button class="catagories">Beauty&Care</button>

<div class="basebox">
    <img class="image1" src="images/vaccum.webp" alt="">

    <div>
        <p class="itemtext">Lithium-ion Cordless <br>
            Small Vacuum for Home & Car</p>
    </div>
    <div class="review">(4.1k) Customer Reviews</div>
    <div class="price"> $79.00</div>
    <div class="stock">In Stock</div>
</div>

<div class="basebox">
    <img class="image1" src="images/charging station.webp" alt="">

    <div>
        <p class="itemtext">Lithium-ion Cordless <br>
            Small Vacuum for Home & Car</p>
    </div>
    <div class="review">(4.1k) Customer Reviews</div>
    <div class="price">$79.00</div>
    <div class="stock">In Stock</div>
</div>

<div class="basebox">
    <img class="image1" src="images/wireless charger.webp" alt="">

    <div>
        <p class="itemtext">Lithium-ion Cordless <br>
            Small Vacuum for Home & Car</p>
    </div>
    <div class="review">(4.1k) Customer Reviews</div>
    <div class="price">$79.00</div>
    <div class="stock">In Stock</div>
</div>

<div class="basebox">
    <img class="image1" src="images/power bank.webp" alt="">

    <div>
        <p class="itemtext">Lithium-ion Cordless <br>
            Small Vacuum for Home & Car</p>
    </div>
    <div class="review">(4.1k) Customer Reviews</div>
    <div class="price">$79.00</div>
    <div class="stock">In Stock</div>
</div>

<div class="basebox">
    <img class="image1" src="images/laptop lift.webp" alt="">

    <div>
        <p class="itemtext">Lithium-ion Cordless <br>
            Small Vacuum for Home & Car</p>
    </div>
    <div class="review">(4.1k) Customer Reviews</div>
    <div class="price">$79.00</div>
    <div class="stock">In Stock</div>

    

</div>

<div class="basebox">
    <img class="image1" src="images/cable-monster-main-new_650x.progressive.webp.webp" alt="">

    <div>
        <p class="itemtext">Lithium-ion Cordless <br>
            Small Vacuum for Home & Car</p>
    </div>
    <div class="review">(4.1k) Customer Reviews</div>
    <div class="price">$79.00</div>
    <div class="stock">In Stock</div>
</div>

<div class="basebox">
    <img class="image1" src="<?php echo $row["image"]; ?>" alt="">

    <div>
        <p class="itemtext"><?php echo $row["name"]; ?></p>
    </div>
    <div class="review">(4.1k) Customer Reviews</div>
    <div class="price"><?php echo $row["price"]; ?></div>
    <div class="stock">In Stock</div>
</div>

<div>
    <button class="viewmore">Viewmore</button>
</div>
  
<div class="feature">
    <img class="icon11" src="images/icons/quality-service.png" alt="">
    <div class="FeastureDesc">
        <p class="FeastureDesc1">High quality</p>
        <p class="FeastureDesc2">crafted from top materials</p>
    </div>       
</div>

<div class="feature">
    <img class="icon11" src="images/icons/warranty.png" alt="">
    <div class="FeastureDesc">
        <p class="FeastureDesc1">Warrany Protection</p>
        <p class="FeastureDesc2">Over 2 years</p>
    </div>       
</div>

<div class="feature">
    <img class="icon11" src="images/icons/delivery.png" alt="">
    <div class="FeastureDesc">
        <p class="FeastureDesc1">Free Shipping</p>
        <p class="FeastureDesc2">Order over 150 $</p>
    </div>       
</div>

<div class="feature">
    <img class="icon11" src="images/icons/support.png" alt="">
    <div class="FeastureDesc">
        <p class="FeastureDesc1">24 / 7 Support</p>
        <p class="FeastureDesc2">Dedicated support</p>
    </div>       
</div>

<div class="footer">

</div>

</body>
</html>