<?php

$db = new PDO("mysql:host = localhost;dbname=SimplyRecipes", "root", "root");

$info2 = [];


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
    <title>Tags || Final</title>
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <!-- привязка css -->
    <link rel="stylesheet" href="./css/main.css" />
  </head>
  <body>
    <!-- навигационная панель  -->
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
    <!-- конец навигационной панели -->



    <main class="page">
         <section class="tags-wrapper">
         <?php foreach($info2 as $category): ?>
          <!-- одна категория -->
              <a href="<?= $category['link']?>" class="tag">
                <h5><?= $category['category']?></h5>
                
              </a>
          <!-- конец категории -->
          <?php endforeach; ?>
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