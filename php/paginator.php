<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <?php
  //paginator
  $link = mysqli_connect('localhost', 'admin1', 'password1', 'milonsdb') or
      die("Ошибка " . mysqli_error($link));

  $query = "SELECT * FROM news ORDER by date desc";
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  $row = mysqli_fetch_assoc($result);
  $number_of_results = mysqli_num_rows($result);

  $results_per_page = 3;

  // do {
  //     echo $row['id'] . ' ' . $row['title'] . '<br>';
  // } while ($row = mysqli_fetch_assoc($result));

  $number_of_pages = ceil($number_of_results / $results_per_page);

  if (!isset($_GET['page'])) {
      $page = 1;
  } else {
      $page = $_GET['page'];
  }

  $this_page_first_result = ($page - 1) * $results_per_page;

  $query =
      "SELECT * FROM news ORDER by date desc LIMIT " .
      $this_page_first_result .
      ',' .
      $results_per_page;
  $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
  while ($row = mysqli_fetch_array($result)) {
      echo $row['id'] . ' ' . $row['title'] . '<br>';
  }
  for ($page = 1; $page <= $number_of_pages; $page++) {
      echo '<a href="paginator.php?page=' . $page . '">' . $page . '</a> ';
  }
  ?>
</body>
</html>
