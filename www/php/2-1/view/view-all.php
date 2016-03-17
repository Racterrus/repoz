<?php
/**
 * Отображение данных - не обрящается напрямую к базе, не работает с данными
 */
require '../model.php';
resultToArray($result);
for($i = 0; $i<$rows; $i++){
    ?><article>
    <?php
    echo '<a href="one.php?id='.$articles[$i]["id"].'"><h2>' . $articles[$i]['title'] . '</h2></a>';
    echo '<p>'. $articles[$i]['text'] .'</p>';
    echo '<p> Дата: ' . $articles[$i]['date'] . '</p>';
    ?>
    </article>
    <?php
}