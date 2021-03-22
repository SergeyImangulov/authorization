<!DOCTYPE html>
<html lang = "ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Форма регистрации</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">

    </head>
    <body>
      <div class="container mt-4">
        <?php
        if($_COOKIE['user'] == ''):
         ?>
        <div class="row">
          <div class="col">

            <h1>Форма регистрации</h1>

      <form class="" action="validation-form/check.php" method="post">
        <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин"><br>
        <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя"><br>
        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Введите фамилию"><br>
        <input type="text" name="phone" class="form-control" id="phone" placeholder="Введите телефон"><br>
        <input type="password" name="pass" class="form-control" id="password" placeholder="Введите пароль"><br>
        <button class="btn btn-success" type="submit">Зарегистрировать</button><br>
      </form>
          </div>
          <div class="col">

            <h1>Форма авторизации</h1>

      <form class="" action="validation-form/auth.php" method="post">
        <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин"><br>
        <input type="password" name="pass" class="form-control" id="password" placeholder="Введите пароль"><br>
        <button class="btn btn-success" type="submit">Войти</button><br>
      </form>
          </div>
        <?php else: ?>
          <p>Ну привет <?=$_COOKIE['user']?>.<br>
            Чтобы выйти нажмите <a href ="/exit.php">здесь</a>.
          </p>

        <?php endif; ?>
        </div>

      </div>

    </body>
</html>
