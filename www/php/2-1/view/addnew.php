<?php
/**
 * форма добавления новости
 */

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Документ без названия</title>
</head>
<body>
<form method="post" action="../controller.php">
    <input type="text" size="35" id="new_title" name="new_title" title="Название новости"><br>
    <textarea id="news_text" name="new_text" title="Текст новости"></textarea><br>
    <input type="date" id="new_date" name="new_date">
    <input type="submit" value="Отправить">
</form>
</body>
</html>

<?php
