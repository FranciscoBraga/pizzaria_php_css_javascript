<?php
    require 'controllers/BodySelect.php';

   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizzari Php</title>
    <link rel="stylesheet" href="wwwroot/css/style.css">
    
</head>
<body >
    <nav><!--inicio nav-->
        <div class="container"> 
            <ul>
                <li>
                    <img src="" alt="img-logo">                   
                </li>
                <li class="float-rigth"><a href="">Sair</a></li>
                <li class="float-rigth"><a href="">Logar</a></li>
                <li class="float-rigth"><a href=""><img src="" alt="rosto"></a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <aside><!--inicio aside-->
            <div id="column-select">
                <div id="header-select">
                    
                            <div class="item"><a href="">Pizza</a></div>
                            <div class="item"><a href="">Bebidas</a></div>
                            <div class="item"><a href="">Login</a></div>
                 
                </div>
                <div id="body-select">
                    <?php foreach ($retorno as $key => $value) {   ?>
                        <div class="item"><a href="pedido/pedido_pizza.html?id=<?=$value['id']?>"><img src="wwwroot/img/<?=$value['caminho']?>" alt="" width="80px"></a></div>
                    <?php } ?>
                </div>
                <div id="footer-select">
                    <form action="controllers/PizzaController.php">
                        <input type="hidden" name="">
                        <input type="submit" value="Pay">
                    </form>
                </div>
            </div>       
        </aside>
        <section><!--inicio section-->
           <div id="slide">
            <div class="item"><a href="#"><img src="wwwroot/img/pizzaMenu.jpg" alt=""></a></div>
           </div>
        </section>
    </div>
</body>
<script src="wwwroot/js/script.js"></script>
</html>