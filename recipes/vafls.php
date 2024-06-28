<?php

$db = new PDO("mysql:host = localhost;dbname=SimplyRecipes", "root", "root");

$info = [];
$info2 = [];

if ($query = $db -> query("SELECT * FROM recipes WHERE id = 4")){
    $info = $query ->   fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db -> errorInfo());
}

    // Запрос ко второй таблице
    if ($query2 = $db->query("SELECT * FROM category WHERE id = 11")) {
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
            src="../photos/vafls.jpg"
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
                Растопите сливочное масло в микроволновке или на водяной бане.              
                </p>
            </div>
            <!-- конец этапа -->
            <!-- новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 2</p>
                <div></div>
              </header>
              <p>
              Отделите желтки от белков, выкладывая их в сухую и чистую посуду.
              </p>
            </div>
            <!-- конец этапа -->
            <!--  новый этап -->
            <div class="single-instruction">
              <header>
                <p>Этап 3</p>
                <div></div>
              </header>
              <p>
              Взбейте белки с обычным сахаром до побеления и пышности.
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
              Ванильный сахар взбейте с желтками до получения слегка воздушной и нежной белой массы.
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
               В полученную массу добавьте молоко и масло, продолжая активно перемешивать.
               Следите, чтобы масло не было слишком горячим после топления.
               В противном случае яичная основа может свернуться.
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
              К жидким ингредиентам добавьте муку, крахмал и разрыхлитель, просеивая их вместе.
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
              Добавьте взбитые белки в тесто и аккуратно перемешайте,
               чтобы они равномерно включились в смесь.
               Действуйте быстро, чтобы сохранить максимум воздушных пузырьков.
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
              Пожарьте вафли в вафельнице.Классические бельгийские вафли можно подавать со свежими ягодами, сиропом, сливочным маслом, мёдом, сгущёнкой, шоколадной пастой или сметаной.
              </p>
            </div>
            <!-- конец этапа -->
           
          </article>
          <article class="second-column">
            <div>
              <h4>ингредиенты</h4>
              <p class="single-ingredient">Яйца</p>
              <p class="single-ingredient">Ванильный сахар</p>
              <p class="single-ingredient">Мука</p>
              <p class="single-ingredient">Кукурузный крахмал</p>
              <p class="single-ingredient">Разрыхлитель</p>
              <p class="single-ingredient">Сахар</p>
              <p class="single-ingredient">Сливочное масло</p>
              <p class="single-ingredient">Молоко</p>
            </div>
            <div>
              <h4>Инструменты</h4>
              <p class="single-tool">посуда для смешивания</p>
              <p class="single-tool">форма для запекания</p>
              <p class="single-tool">микроволновка</p>
              
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
