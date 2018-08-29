<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
  <link rel="icon" type="image/png" href="img/milons_icon.png">
  <title>Борцовский клуб "Милонс"</title>
</head>

<body>
  <div class="wrapper">
    <header>
      <div class="bcc">

        <div class="logo">
          <img src="img/milons_logo_transp.png" class="menu_btn" alt="Wrestling Club MILONS. Борцовский клуб Милонс.">
          <span>Борцовский клуб "Милонс"</span>
        </div>

        <div class="menu">
          <nav>
            <ul>
              <li>
                <input type="checkbox" id="club" class="menu_btn">
                <label for="club" class="menu_btn">О клубе
                  <i class="fas fa-angle-down"></i>
                </label>
                <ul class="club_submenu">
                  <li>
                    <a href="club.html" class="menu_btn">Клуб</a>
                  </li>
                  <li>
                    <a href="coach.html" class="menu_btn">Тренер</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="index.php" class="menu_btn">Новости</a>
              </li>
              <li>
                <a href="gallery.html" class="menu_btn">Галерея</a>
              </li>
              <li>
                <input type="checkbox" id="schedule" class="menu_btn">
                <label for="schedule" class="menu_btn">Расписание
                  <i class="fas fa-angle-down"></i>
                </label>
                <ul class="schedule_submenu">
                  <li>
                    <a href="schedule.html#group_1" class="menu_btn">Группа 1</a>
                  </li>
                  <li>
                    <a href="schedule.html#group_2" class="menu_btn">Группа 2</a>
                  </li>
                  <li>
                    <a href="schedule.html#group_3" class="menu_btn">Группа 3</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="contacts.html" class="menu_btn">Контакты</a>
              </li>
              <li>
                <div class="lang">
                  <div class="lang_btn"><a href="#"> LV </a></div>
                  <div class="lang_btn"><a href="#"> EN </a></div>
                  <div class="lang_btn"><a href="#"> RU </a></div>
                </div>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main>
    <?php
    // $link = mysqli_connect(
    //     'localhost',
    //     'id5756831_admin1',
    //     'password1',
    //     'id5756831_milonsdb'
    // ) or die("Ошибка " . mysqli_error($link));
    $link = mysqli_connect('localhost', 'admin1', 'password1', 'milonsdb') or
        die("Ошибка " . mysqli_error($link));

    $query = "SELECT * FROM news ORDER by date desc";
    $result = mysqli_query($link, $query) or
        die("Ошибка " . mysqli_error($link));
    $row = mysqli_fetch_assoc($result);
    ?>
    <?php if ($result) {
        do { ?>
      <article class="news clearfix">

        <h1>
          <?php echo $row['title']; ?>
        </h1>
        <h3>
          <?php echo $row['date']; ?>
        </h3>
        <div class="news_image">
          <?php echo $row['image']; ?>
        </div>
        <p class="anot">
          <?php echo $row['text']; ?>
        </p>

      </article>
      <div class="news_divider"></div>
      <?php } while ($row = mysqli_fetch_assoc($result));
    } ?>
    </main>

    <footer>
      <div class="footer_copy">
        <div class="copy"><i class="far fa-copyright"></i> 2018 Борцовский клуб "Милонс"</div>
      </div>
      <div class="footer_contact">
        <div class="address">
          <i class="fas fa-map-marker-alt"></i> Елгава, ул. Узварас 12</div>
        <div class="phone">
          <i class="fas fa-mobile-alt"></i> +371 63 021 883</div>
        <div class="mail">
          <i class="far fa-envelope"></i> vladimirs.smirnovs@inbox.lv</div>
      </div>
      <div class="footer_social">
        <div class="fb"><a href="https://www.facebook.com/groups/milons"> <i class="fab fa-facebook"></i></a></div>
      </div>
    </footer>
  </div>
  <script src="js/script.js"></script>
</body>

</html>
