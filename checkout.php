<?php 
session_start();
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="css/cart.css" type="text/css">
<title>NorthRP</title>
</head>
<html>
<body>
<header>
    <div class="container">
        <nav>
            <ul>
                <li><a id="nav" href="index.php">Inicio</a></li>
                <li><a id="nav" href="#">Tienda</a></li>
                <li id="svg-line"><a href="cart.php">
                    <svg class="shopping-cart"
                    viewBox="0 0 24 24" width="24" height="24" 
                    fill="none" stroke="#222" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                </a></li>
            </ul>
        </nav>
    </div>
</header>

<h2>Checkout</h2>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo '<p>'.$_POST['username'].'</p>';
    }
?>

</body>
</html>