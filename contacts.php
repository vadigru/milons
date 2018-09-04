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
      <div class="contacts">
        <div class="contacts_bcc">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2193.0592040311967!2d23.721477471375913!3d56.65604002053356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46ef254696099d37%3A0x79d4b78a8d5e6287!2sUzvaras+iela+12%2C+Jelgava%2C+LV-3001!5e0!3m2!1sru!2slv!4v1534010442562"
            frameborder="0" style="border:0" allowfullscreen></iframe>
          <div class="contacts_address">
            <table>
              <tr>
                <td colspan="2"><h2>Cīņu klubs "Milons"</h2> </td>
              </tr>
              <tr>
                <td>Treneris: </td>
                <td>Vladimirs Smirnovs</td>
              </tr>
              <tr>
                <td>Tel:</td>
                <td>+371 29230688</td>
              </tr>
              <tr>
                <td>Adrese: </td>
                <td>Uzvaras iela 12, Jelgava, Latvija, LV-3001</td>
              </tr>
              <tr>
                <td>E-pasts: </td>
                <td>vladimirs.smirnovs@inbox.lv (ru, lv)
                  <br> j-smirnova@bk.ru (en)</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="news_divider"></div>
      <div class="contacts_form">
        <div class="contacts_bcc">
          <div class="contacts_input">
            <form action="php/send.php" method="post">
              <h2>Uzdot jautājumu</h2>
              <input name="name" type="text" id="name" placeholder="Vārds">
              <input name="phone" type="text" id="phone" placeholder="Telefons">
              <input name="email" type="text" id="email" placeholder="E-pasts">
              <textarea name="message" id="message" placeholder="Ziņojums"></textarea>
              <input type="submit" name="submit" id="submit" value="Sūtīt">
            </form>
          </div>
        </div>
      </div>
    </main>

    <?php include "blocks/footer.php"; ?>

  </div>
  <script src="js/script.js"></script>
  <script src="js/pure-swipe.min.js"></script>
</body>

</html>
