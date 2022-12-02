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
        <a class="nav-item" href="<?php 

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
            
            <a class="nav-item current_page" href="<?php 

            $name='Авторизация'; 
            $link='auth.php';  
            $current_page=true; 

            echo $link; 

            ?>"><?php 

            if( $current_page ) 
                echo $name;

                ?></a>

            <a class="nav-item" href="<?php 

            $name='Форма фидбека'; 
            $link='feedback.php'; 
            $current_page=true; 

            echo $link; 

            ?>"><?php 

            if( $current_page ) 
                echo $name;

                ?></a>
            <img src="logo.png" class="logo" id="logo" height="40" margin-right="35px">
        </nav>
    </header>


    <main>
    <div class="container"><form method = "post" action = "https://httpbin.org/post">
            <p><b>Логин</b><br>
            <input type ="text" maxlength = "25" size="40" name="login"></p>
            <br>

            <p><b>Пароль</b><br>
            <input type = "password"  maxlength = "25" size="40" name="password"></p>
            
            <center><p>
            <input type="checkbox">Запомнить меня<br>
            </center></p>

            <p><input type = "submit" value = "Вход"></p>


        </form></div>           
        
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30              copyright ©
    </pre></footer>


  </body>
</body>
</html>