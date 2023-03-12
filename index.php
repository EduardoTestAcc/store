<?php
session_start();
if (!@$_SESSION['items_id']) {
    $_SESSION['items_id'] = array();
}

?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,600">
<link rel="stylesheet" href="css/style.css" type="text/css">
<title>Document</title>
</head>
<body>

<header>
    <div class="container">
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Tienda</a></li>
                <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#222" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg></li>
            </ul>
        </nav>
    </div>
</header>
<div class="grid">
    <div class="category recharge">
        <a href="recharge.php">
        <h1 class="category__title">Recargas</h1>
        <br>
        <p class="see__more">ver más</p>
        </a>
    </div>
    <div class="category gems">
        <a href="gems.php">
        <h1 class="category__title">Gemas</h1>
        <br>
        <p class="see__more">ver más</p>
        </a>
    </div>
    <div class="category ranks">
        <a href="ranks.php">
        <h1 class="category__title">Rangos</h1>
        <br>
        <p class="see__more">ver más</p>
        </a>
    </div>
    <div class="category extra">
        <a href="extra.php">
        <h1 class="category__title">Extra</h1>
        <br>
        <p class="see__more">ver más</p>
        </a>
    </div>
</div>
</body>
</html>