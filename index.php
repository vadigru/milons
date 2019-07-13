<?php include "blocks/db.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fontawesome-all.css">
  <link rel="icon" type="image/png" href="img/milons_icon.png">
  <title>Cīņu klubs "Milons"</title>
</head>

<body>
  <div class="wrapper">

    <?php include "blocks/header.php"; ?>

    <main>

    <?php
    $query = "SELECT * FROM news_lv ORDER by date desc";
    $result = mysqli_query($link, $query) or
        die("Ошибка " . mysqli_error($link));
    $row = mysqli_fetch_array($result);
    $number_of_results = mysqli_num_rows($result);
    $results_per_page = 3;
    $number_of_pages = ceil($number_of_results / $results_per_page);
    if (!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }
    $this_page_first_result = ($page - 1) * $results_per_page;
    $query =
        "SELECT * FROM news_lv ORDER by date desc LIMIT " .
        $this_page_first_result .
        ',' .
        $results_per_page;
    $result = mysqli_query($link, $query) or
        die("Ошибка " . mysqli_error($link));
    ?>

    <?php if ($result) {
        while ($row = mysqli_fetch_array($result)) { ?>
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
      <?php }
    } ?>
    </main>

    <div class="paginator">

    <?php for ($page = 1; $page <= $number_of_pages; $page++) {
        echo '<div class="page_number">
       <a href="index.php?page=' .
            $page .
            '">' .
            $page .
            ' ' .
            '</a> </div>';
    } ?>

    </div>

    <?php include "blocks/footer.php"; ?>

  </div>
  <script src="js/script.js"></script>
  <script src="js/paginator.js"></script>
  <script src="js/pure-swipe.min.js"></script>
</body>

</html>
