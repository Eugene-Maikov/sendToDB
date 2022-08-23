<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style/reset.css" />
  <link rel="stylesheet" href="style/style.css" />
  <title>Отправить в БД</title>
</head>

<body>
  <div class="page">
    <h1>Прошу заполнить, сир...</h1>
    <form class="js-form" action="form.php" method="POST" novalidate>
      <div class="form__group">
        <input type="text" class="input js-input" name="name" placeholder="Имя" />
      </div>
      <div class="form__group">
        <input type="text" class="input js-input" name="lastname" placeholder="Фамилия" />
      </div>
      <div class="form__group">
        <input type="email" class="input js-input js-input-email" name="email" placeholder="Email" />
      </div>
      <div class="form__group">
        <input type="tel" data-tel-input class="input js-input js-input-phone" name="phone" placeholder="Телефон" maxlength="18" />
      </div>
      <button class="btn" type="submit">Отправить</button>
    </form>
  </div>
  <script src="js/main.js"></script>
  <script src="js/phoneinput.js"></script>
</body>

</html>