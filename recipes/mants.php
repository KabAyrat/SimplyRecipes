<?php

$db = new PDO("mysql:host = localhost;dbname=SimplyRecipes", "root", "root");

$info = [];
$info2 = [];

if ($query = $db -> query("SELECT * FROM recipes WHERE id = 2")){
    $info = $query ->   fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db -> errorInfo());
}

    // Запрос ко второй таблице
    if ($query2 = $db->query("SELECT * FROM category WHERE id = 10")) {
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
    <title>Single Recipe</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon" />
    <!-- normalize -->
    <link rel="stylesheet" href="../css/normalize.css" />
    <!-- font-awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />
    <!-- main css -->
    <link rel="stylesheet" href="../css/main.css" />
  </head>
  <body>
    <!-- nav  -->
    <nav class="navbar">
      <div class="nav-center">
        <div class="nav-header">
          <a href="../index.php" class="nav-logo">
            <img src="../assets/logo.svg" alt="simply recipes" />
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="../index.php" class="nav-link"> Главная </a>
          <a href="../about.php" class="nav-link"> О нас </a>
          <a href="../tags.php" class="nav-link"> Продукция </a>
          <a href="../recipes.php" class="nav-link"> Рецепты </a>

          <div class="nav-link contact-link">
            <a href="../contact.php" class="btn"> Свяжитесь с нами </a>
          </div>
        </div>
      </div>
    </nav>
    <!-- end of nav -->


    <main class="page">
      <div class="recipe-page">
        <section class="recipe-hero">
        <?php foreach($info as $data): ?>
          <img
            src="../photos/mants.jpg"
            class="img recipe-hero-img"
          />
          <article class="recipe-info">
            <h2><?= $data['recipe_name']?></h2>
            <p>
            <?= $data['description']?>            </p>
            <div class="recipe-icons">
              <article>
                <i class="fas fa-clock"></i>
                <h5>Время подготовки</h5>
                <p><?= $data['prep_time']?> min.</p>
              </article>
              <article>
                <i class="far fa-clock"></i>
                <h5>Время готовки</h5>
                <p><?= $data['time']?> min.</p>
              </article>
              <article>
                <i class="fas fa-user-friends"></i>
                <h5>Порций</h5>
                <p><?= $data['portions']?> порций</p>
              </article>
            </div>
            <?php endforeach; ?>
            <?php foreach($info2 as $category): ?>
            <p class="recipe-tags">
              Приготовлено с помощью :<a href="<?= $category['link']?>"> <?= $category['category']?> </a>

            </p>
            <?php endforeach; ?>

          </article>
          
        </section>
        <!-- content -->
        <section class="recipe-content">
          <article>
            <h4>Пошаговый рецепт</h4>
            <!-- новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 1</p>
                <div></div>
              </header>
              <p>
              Для начала необходимо приготовить тесто.
               Для этого в миске нужно соединить яйцо, около 100 миллилитров воды,
                соль и 1 чайную ложку растительного масла</p>
            </div>
            <!-- конец этапа -->
            <!-- новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 2</p>
                <div></div>
              </header>
              <p>
              Тщательно все взбить до однородной консистенции. При желании воду можно заменить молоком.</p>
            </div>
            <!-- конец этапа -->
            <!--  новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 3</p>
                <div></div>
              </header>
              <p>
              Теперь можно постепенно вводить муку и вымешивать крутое тесто.
               Его нужно не только замесить, но и тщательно взбить и размять руками,
                чтобы оно было более мягкое и эластичное. На это может потребоваться около 10-15 минут.
              </p>
            </div>
            <!-- конец этапа -->
             <!-- новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 4</p>
                <div></div>
              </header>
              <p>
              Когда работа с тестом закончена,
               его можно накрыть и оставить чтобы оно немного "отдохнуло".
              </p>
            </div>
            <!-- конец этапа -->
            <!-- новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 5</p>
                <div></div>
              </header>
              <p>
              Тем временем можно заняться мясом.
               Традиционно для приготовления этого блюда используют баранину,
                однако при желании можно выбрать другое мясо, либо взять несколько видов.
                 Мясо необходимо вымыть, просушить и нарезать ножом на маленькие кусочки.
              </p>
            </div>
            <!-- конец этапа -->
            <!-- новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 6</p>
                <div></div>
              </header>
              <p>
              Луковицу очистить и нарезать кубиками. 
              Картофель вымыть, очистить и также нарезать мелким кубиком.
              Теперь все ингредиенты начинки можно соединить и тщательно перемешать.
             Посолить и поперчить по вкусу, при желании добавить любимые специи.
              </p>
            </div>
            <!-- конец этапа -->
            <!-- новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 7</p>
                <div></div>
              </header>
              <p>
              Пришло время вернуться к тесту. Как именно его раскатать особого значения не имеет.
               Можно нарезать на небольшие кусочки и раскатывать отдельно или сделать длинные полосочки,
                которые потом нарезать. Главное, чтобы тесто было тонкое.
                На каждую лепешку необходимо выложить начинку.
                Весьма интересный процесс - это защипывание краев. Сначала нужно взять два уголка и соединить вместе.
              </p>
            </div>
            <!-- конец этапа -->
            <!-- новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 8</p>
                <div></div>
              </header>
              <p>
              Выложить готовые манты на уровни, предварительно смазанные маслом, и отправить на огонь (вода к тому времени уже должна кипеть). Через 45 минут манты по-узбекски в домашних условиях будут готовы и их можно подавать к столу.
              </p>
            </div>
            <!-- конец этапа -->
           
          </article>
          <article class="second-column">
            <div>
              <h4>ингредиенты</h4>
              <p class="single-ingredient">Картофель</p>
              <p class="single-ingredient">Мука</p>
              <p class="single-ingredient">Яйцо</p>
              <p class="single-ingredient">Растительное масло</p>
              <p class="single-ingredient">Луковица</p>
              <p class="single-ingredient">Мясо</p>
            </div>
            <div>
              <h4>Инструменты</h4>
              <p class="single-tool">пароврка</p>
              <p class="single-tool">посуда для смешивания</p>
              <p class="single-tool">скалка</p>
        
            </div>
          </article>
        </section>
      </div>
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
    <script src="../js/app.js"></script>
  </body>
</html>
