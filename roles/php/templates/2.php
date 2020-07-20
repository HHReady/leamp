<?php
$link = mysqli_connect({{ mysql_host }}, {{ mysql_user }}, {{ mysql_user_password }}, "mysql");
if (!$link) {
    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
if ($result = mysqli_query($link, "SELECT user FROM user
 LIMIT 10")) {
    printf("Select вернул %d строк.\n", mysqli_num_rows($result));

    /* очищаем результирующий набор */
    mysqli_free_result($result);
}
?>


