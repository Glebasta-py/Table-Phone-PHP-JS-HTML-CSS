<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">
    <link type="image/x-icon" href="../img/phone-svgrepo-com(1).svg" rel="shortcut icon">
    <link type="image/x-icon" href="../img/phone-svgrepo-com(1).svg" rel="icon">
</head>
<body>
    <header>
        <nav>
            <div class="container">
                <a href="../index.php" class="link_logo"><img src="/img/phone-svgrepo-com(1).svg" alt="" class="logo_img"></a>
            </div>
        </nav>
    </header>
    <main class="main">
        <div class="center">
        <form action="" class="sign">
        <h1 class="text_center">Регистрация</h1>
                <div class="flex">
                    <input type="text" placeholder="Введите имя.." class="input">
                    <input type="text" placeholder="Введите фамилию.." class="input">
                </div>
                <div>
                     <input type="email" placeholder="Введите логин.." class="input">
                </div>
                <div>
                    <input type="password" placeholder="Введите пароль.." class="input">
                </div>
                <div>
                    <input type="password" placeholder="Повторите пароль.." class="input">
                </div>
                <div>
                    <input type="text" placeholder="Введите номер телефона.." class="input">
                </div>
                <div  class="btn_container"> 
                    <a class="sign_btn signup_btn" href="../templates/phone_table.php">Зарегистрироваться</a>
                </div> 
              </form>
        </div>
    </main>
    <footer class="footer">
   
    <div class="container">
                <hr>
                    <div class="footer_link">
                        <a href="" class="link_footer">Телефонный справочник</a>
                        <a href="" class="link_footer">2022 Prod. Deryugin Gleb</a>
                    </div>
                <hr>
        </div>
   
    </footer>
</body>
</html>