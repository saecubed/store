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

            <a class="nav-item" href="<?php 

            $name='Форма фидбека'; 
            $link='feedback.php'; 
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
        <div class="container"><form method = "post" action = "home.php">
            <p><b>Ваше имя:</b>
            <input type ="text" size="40" name = "name" 
            value = "<?php if (isset($_GET['name'])){echo $_GET['name']; }?>"/> </p>

            <p><b>Ваша почта:</b>
            <input type ="text" size="40" name = "email" placeholder="email" 
            value = "<?php if (isset($_GET['email'])){echo $_GET['email']; }?>"/></p>  

            <p><b>Откуда вы о нас узнали?</b>
            <input type="radio" id="contactChoice1" name="source" value="1" <?php if (isset($_GET['source']) & $_GET['source']='1'){
                        echo 'checked';}?>/>
              <label for="contactChoice1">Реклама в интернете</label>
              <input type="radio" id="contactChoice2" name="source" value="2" <?php if (isset($_GET['source']) & $_GET['source']='2'){
                        echo 'checked';}?>/>
              <label for="contactChoice2">Реклама на радио</label>
             
        
            </p>

            <p><select size="1" name = 'category' style="width: 150px">
              <option disabled>Выберите опцию</option>
              <option value="1">Предложение</option>
              <option value="2">Жалоба</option></select></p>

            <p><b>Текст сообщения: </b></p>
            <p><textarea name = 'message' rows = "5" cols = 45></textarea></p>

            <p><b>Вложение:</b></p>
            <p><input type = "file" name = "attachment"></p>    

            <center>
            <p><b><legend> Согласие на обработку персональных данных</legend></b>
            <input type="checkbox" name = "check">Я даю согласие</p>
            </center>

            <p><input type = "submit" value = "Отправить"></p>


        </form></div>

     
        
    </main>


    <footer><pre class = "footer_text" id = "contacts">Почта: saecubed@gmail.com      Телефон: 8(915)233-14-30
    </pre></footer>


  </body>
</body>
</html>