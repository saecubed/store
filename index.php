<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <?php require "title.php"; ?>
    <link href="styles.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nabla&family=Open+Sans:ital,wght@0,400;0,500;1,400;1,500&family=Poppins&display=swap" rel="stylesheet">
    <style >
        body { 
            background: url(background1.png); 
            background-position: top;
        }
        
      </style>
</head>
<body>


<header>
        <nav class = "top_text">
        <a class="nav-item current_page" href="<?php 

            $name='Главная'; 
            $link='index.php'; 
            $current_page=true; 

            echo $link; 

            ?>"><?php 

            if( $current_page ) 
                echo $name;

                ?></a>

        <a class="nav-item" href="<?php 

            $name='Магазин'; 
            $link='shop.php'; 
            $current_page=true; 

            echo $link; 

            ?>"><?php 

            if( $current_page ) 
                echo $name;

                ?></a>
            
            <a class="nav-item" href="<?php 

            $name='Авторизация'; 
            $link='auth.php'; 
            $current_page=true; 

            echo $link; 

            ?>"><?php 

            if( $current_page ) 
                echo $name;

                ?></a>
            <img src="logo.png" class="logo" height="40" margin-right="35px">
        </nav>
    </header>


    <main>
       
        <center>
        
        <div>
        <img src="logo.png" class="logotype" height="200">
        <h1>Книга</h1>
        </div>
    
        </center>
       

        <h2>О магазине</h2>
        <p> «Книга» — российская федеральная сеть книжных магазинов.
        Основание сети произошло в 2008 году, вследствие объединения двух крупных книготорговых сетей — «Новый книжный» и «Буквоед». В 2009 году, проведя ребрендинг после покупки федеральной книжной сети «Библиосфера», компания открыла магазины под собственным брендом «Книга»
        </p>

        <h2>Обзор продукции</h2>
        <p> В нашем магазине можно заказать книги разных жанров: триллеры и детективы, фэнтези и фантастику, комиксы и мангу. Кроме книг, у нас есть канцтовары, настольные игры, значки, мягкие игрушки и ещё много полезного и милого.
        </p>

        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30              copyright ©
    </pre></footer>


  </body>
</body>
</html>