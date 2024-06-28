<?php

$db = new PDO("mysql:host = localhost;dbname=SimplyRecipes", "root", "root");

$info = [];

if ($query = $db -> query("SELECT * FROM topRecipe")){
    $info = $query ->   fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db -> errorInfo());
}

?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About || Final</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="./css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="index.php" class="nav-logo">
            <img src="./assets/logo.svg" alt="simply recipes" />
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="index.php" class="nav-link"> Главная </a>
          <a href="about.php" class="nav-link"> О нас </a>
          <a href="tags.php" class="nav-link"> Продукция </a>
          <a href="recipes.php" class="nav-link"> Рецепты </a>

          <div class="nav-link contact-link">
            <a href="contact.php" class="btn"> Свяжитесь с нами </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end of nav -->
    <main class="page">
      <section class="about-page">
        <article>
          <h2>Добро пожаловать на нашу страницу</h2>
          <p>
            Вы можете абсолютно бесплатно использовать все доступную базы рецептов, что вы сможете найти на нашем сайте
          </p>
          <p>
            Вы также можете добавить свой рецепт. Взамен за ваш опыт мы предлагаем вам скидку на приобретение продукции "Tupperware". Если вы хотите поделиться опытом и добавить на наш сайт один из своих рецептов, мы с радостью сделаем это, вам нужно только нажать на кнопку ниже:)
          </p>
          <a href="contact.php" class="btn"> связаться </a>
        </article>
        <!-- needs fixes -->
        <img
          src="./assets/about.jpeg"
          alt="Person Pouring Salt in Bowl"
          class="img about-img"
        />
      </section>
      <section class="featured-recipes">
        <h5 class="featured-title">Популярные блюда!!!</h5>
        <div class="recipes-list">

        <?php foreach($info as $data): ?>
          <!-- Пример рецепта -->
          <a href="<?= $data['link']?>" class="recipe">
            <img
              src="<?= $data['image']?>"
              class="img recipe-img"
              alt=""
            />
            <h5><?= $data['recipe_name']?></h5>               
            <p>Подготовка : <?= $data['time_prep']?>мин | Готовка : <?= $data['time']?>мин</p>
          </a>
          <?php endforeach; ?>
        </div>
      </section>
    </main>
    <!-- footer -->
    <footer class="page-footer">
      <p>
        &copy; <span id="date"></span>
        <span class="footer-logo">Все рецепты предоставлены пользователями и принадлежат их авторам.</span>

        <span class="footer-logo">SimplyRecipes</span> Built by
        <a href="https://vk.com/kaayrat">Kabirov Ayrat</a>
      </p>
    </footer>
    <!-- конец footer -->
    <script src="./js/app.js"></script>
  </body>
</html>