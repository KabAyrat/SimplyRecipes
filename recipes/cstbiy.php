<?php

$db = new PDO("mysql:host = localhost;dbname=SimplyRecipes", "root", "root");

$info = [];
$info2 = [];

if ($query = $db -> query("SELECT * FROM recipes WHERE id = 1")){
    $info = $query ->   fetchAll(PDO::FETCH_ASSOC);
} else {
    print_r($db -> errorInfo());
}

    // Запрос ко второй таблице
    if ($query2 = $db->query("SELECT * FROM category WHERE id = 6")) {
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
            src="../photos/cstbiy.jpg"
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
                Картофель очистите, переложите в кастрюлю, залейте водой и поставьте вариться. Репчатый лук очистите, мелко нарежьте и пассеруйте на растительном масле. К готовому картофелю добавьте горячее молоко, немного сливочного масла и жареный лук. Сделайте пюре.
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
                Из молока, воды, растительного масла, просеянной муки и соли замесите пластичное крутое тесто. Разделите тесто на 8-10 равных частей. Из каждого куска скатайте шарики, тонко их раскатайте и обжарьте на сухой сковороде.
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
                На одну половинку готовой лепешки выложите начинку из картофельного пюре, согните лепешку пополам. Чтобы лепешки не ломались, делать это нужно, пока они еще горячие.
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
                Кыстыбый промажьте растопленным сливочным маслом.
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
                Отправьте кыстыбый в разогретую до 180 градусов духовку на 10 минут. Подавайте блюдо горячим.
              </p>
            </div>
            <!-- конец этапа -->
           
          </article>
          <article class="second-column">
            <div>
              <h4>ингредиенты</h4>
              <p class="single-ingredient">180 мл. молока</p>
              <p class="single-ingredient">180 мл. воды</p>
              <p class="single-ingredient">2 столовые ложки растительного масла</p>
              <p class="single-ingredient">чайная ложка соли</p>
              <p class="single-ingredient">500г. пшеничной муки</p>
              <p class="single-ingredient">700г. картофеля</p>
              <p class="single-ingredient">лук репчатый</p>
            </div>
            <div>
              <h4>Инструменты</h4>
              <p class="single-tool">посуда для смешивания</p>
              <p class="single-tool">Сковорода</p>
              <p class="single-tool">кастрюла</p>
              
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
