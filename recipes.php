<?php

$db = new PDO("mysql:host = localhost;dbname=SimplyRecipes", "root", "root");

$info = [];
$info2 = [];

if ($query = $db -> query("SELECT * FROM frontReciepe")){
    $info = $query ->   fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db -> errorInfo());
}

    // Запрос ко второй таблице
    if ($query2 = $db->query("SELECT * FROM category")) {
        $info2 = $query2->fetchAll(PDO::FETCH_ASSOC);
    } else {
        print_r($db->errorInfo());
    }
?> 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recipes || Final</title>
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
    <!-- main -->
    <main class="page">
      <section class="recipes-container">
        <!-- tag container -->
        <div class="tags-container">
          <h4>Продукция</h4>
          <div class="tags-list">
          <?php foreach($info2 as $category): ?>
            <a href="<?= $category['link']?>"><?= $category['category']?></a>
            <?php endforeach; ?>
          </div>
        </div>
        <!-- end of tag container -->
        <!-- recipes list -->
        <div class="recipes-list">
        <?php foreach($info as $data): ?>
          <!-- Пример рецепта -->
          <a href="<?= $data['link']?>" class="recipe">
            <img
              src="<?= $data['image']?>"
              class="img recipe-img"
              alt=""
            />
            <h5><?= $data['name']?></h5>               
            <p>Подготовка : <?= $data['time_prep']?>мин | Готовка : <?= $data['time']?>мин</p>
          </a>
          <?php endforeach; ?>
          <!-- конец примера рецепта -->
        </div>
        <!-- конец списка рецептов -->
      </section>
    </main>
    <!-- end of main -->



    <!-- footer -->
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