
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <!-- Форма регистрации -->

    <form action="include/signun.php" method="post" enctype="multipart/form-data">
      <label>Фамилия</label>
       <input type="text" name="last_name" placeholder="Введите свою фамилию">
       <label>Имя</label>
       <input type="text" name="first_name" placeholder="Введите своё имя">
       <label>Логин</label>
       <input type="text" name="login" placeholder="Введите свой логин">
       <label>Пароль</label>
       <input type="password" name="password" placeholder="Введите свой пароль">
       <label>Подтверждение пароль</label>
       <input type="password" name="password_confirm" placeholder="Подтаердите пароль">
       <button>Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="/">авторизируйтесь</a>!
        </p>
    </form>

</body>
</html>
