<?php
/**
 * Отображение данных - не обрящается напрямую к базе, не работает с данными
 */
require '../model.php';
require '../controller.php';
resultToArray($result);
    ?><article>
    <?php
    echo '<h2>' . $article['title'] . '</h2>';
    echo '<p>'. $article['text'] .'</p>';
    echo '<p> Дата: ' . $article['date'] . '</p>';

    ?>
    </article>
    <?php
