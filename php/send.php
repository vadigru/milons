<?php

if(isset($_POST['submit'])){
    $to = "vg@outlook.ie";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    // $message = $_POST['message'];
    $subject = "Сообщение с сайта от " . $name;
    $subject2 = "Copy of your form submission";
    $message = "имя: " .  $name . "\n" .
               "номер телефона: " . $phone . "\n" .
               "адрес э-почты: " . $from . "\n" .
               "сообщение: " . $_POST['message'];
    $message2 = "Here is a copy of your message" . $name . "\n\n" . $_POST['message'];
    $from = htmlspecialchars($from);
    $from = urldecode($from);
    $from = trim($from);
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;

    mail($to,$subject,$message,$headers);

    echo "<html>
    <head>
    <title>TEST</title>
    </head>

    <body  style='background-color: #FFFFFF;
                  color: #212121;
                  font-size: 40px;
                  font-family: Tahoma, sans-serif;'>
    <p>Сообщение отправлено.</p>
    <p> Спасибо Вам " . $name . ", мы скоро свяжемся с Вами.</p>
    <br><br>
    <a style='text-decoration: none;
              color: #C9C9C9;' href='https://app-1526323120.000webhostapp.com/milons/'>Вернуться на сайт.</a>
    </body>
    </html>";
}

?>


<!--Переадресация на главную страницу сайта, через 3 секунды-->

<script language="JavaScript" type="text/javascript">
    function changeurl() {
        eval(self.location="https://app-1526323120.000webhostapp.com/milons/");
    }
    window.setTimeout("changeurl();",3000);
</script>
