<?php
          $queryyy = "SELECT * FROM news_en";
          $data = array(); // в этот массив запишем то, что выберем из базы
          $resulttt = mysqli_query($link, $queryyy) or
          die("Ошибка " . mysqli_error($link));
          while ($rowrow = mysqli_fetch_array($resulttt)) {
              // оформим каждую строку результата
              // как ассоциативный массив
              $data[] = $rowrow; // допишем строку из выборки как новый элемент результирующего массива
          }
          file_put_contents("../output.json", json_encode($data)); // и отдаём как json файл
?>
