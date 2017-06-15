<?php

$otvet=mail("nadin_19_@mail.ru", "Тема письма", "Сообщение письма - name: $_POST[name] Email: $_POST[email] ");
if($otvet){
    echo "<p>Письмо отправлено</p>";
    
}
else echo "<p>Письмо не было отправлено</p>";

?>