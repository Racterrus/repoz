<?php
/**
 * получение даннных от юзера, передача во view and model
 * а также всякие функции и логика не связанная с бд
 * Не содержит запросов к БД, обычно тонкая прослойка
 */

require_once('model.php');

//добавление новой статейки при отправке
if (!empty($_POST['new_title']) && !empty($_POST['new_text']) && !empty($_POST['new_date'])) {
    //вызов функции добавления статьи
    header("Location: view/view-all.php");
    add_new($connection, $_POST['new_title'], $_POST['new_text'], $_POST['new_date']);
} else {
    //echo 'Enter all require data!';
    //сообщение об ошибке можно перенести в шаблон, как блок
};

if ($_GET['id'] > 0) {
    echo 'Super';
    $article = one_article_get($connection, $_GET['id']);

} else {
    echo "Fail!!!";
}


