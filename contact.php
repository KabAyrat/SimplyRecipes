<?php

$db = new PDO("mysql:host = localhost;dbname=SimplyRecipes", "root", "root");

$info = [];
$info2 = [];

if ($query = $db -> query("SELECT * FROM topRecipe")){
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
    <title>Contact || Final</title>
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
     <section class="contact-container">
          <article class="contact-info">
            <h3>Хотите добавить свой рецепт?</h3>
            <p>
              Мы благодарны каждому за вклад в развитие сайта
            </p>
            <p>Спасибо за все, что вы делаете для нашего проекта! Мы гордимся тем, что у нас есть такие талантливые и преданные пользователи, как вы.            
            </p>
          </article>
          <article>
            
            <form class="form contact-form" action="send.php" method="post">

              <div class="form-row">
                <label html="name" class="form-label" name="fio">Ваше имя</label>
                <input type="text" name="name" id="name" class="form-input" />
              </div>

              <div class="form-row">
                <label html="email" class="form-label" name="email">Ваша почта</label>
                <input type="text" name="email" id="email" class="form-input" />
              </div>

              <div class="form-row">
                <label html="message" class="form-label">Введите ваш рецепт</label>
                <textarea name="message" id="message" class="form-textarea"></textarea>
              </div>

              <div class="form-row">
                <label html="message" class="form-label">Приблизительное время готовки</label>
                <input type="number" name="time" class="form-input" />
              </div>


              <div class="form-row">
                <label html="message" class="form-label">Время подготовки</label>
                <input type="number" name="time_prep" class="form-input" />
              </div>


                <div class="form-row">
                    <label class="form-label">Укажите количество порций</label>
                    <input type="number" name="person"  class="form-input" />
                </div>

                
              <div class="form-row">
                <label class="form-label">Ссылка на фото с рецептом</label>
                <input type="text" name="video"  class="form-input" />
              </div>

              



              <div class="form-row">

              <select name="type" class="form-input">
              
                <option value="choose">Выберите продукцию</option>
                <?php foreach($info2 as $category): ?>
                <option value="<?= $category['category']?>"><?= $category['category']?></option>
            
                <?php endforeach; ?>
                </select>
              </div>



              <button type="submit" class="btn btn-block">
                Отправить
              </button>
              
            </form>
          </article>
        </section>
     <!-- featured recipes -->
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