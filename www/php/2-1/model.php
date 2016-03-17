<?php
/**
 * связь с базой, передача данных в базу и обратно,
 * валидация форм
 * Все переменные должны обрабатваться через контроллен, напрямую с юзером нельзя!
 * Не генерирует html
 */
// db connect
$connection = new mysqli('localhost', 'root', '', 'bgblogdb');
if ($connection->connect_error) die($connection->connect_error);

function getNews($connection)
{
    $query = "SELECT * FROM articles ORDER BY date DESC LIMIT 5";
    global $result;
    $result = $connection->query($query); //получаем объект result со всеми данными из таблицы articles
    if (!$result) die($connection->error);
    //return resultToArray($result);
}

//извлекаем данные из таблицы со статьями
getNews($connection); //вызов функции написанной выше
$rows = $result->num_rows; //из объекта берем свойство = числу строк
$articles = resultToArray($result);

/**
 * @param $result
 * @return array
 */
function resultToArray($result)
{
    //global $array;
    $array = array(); //назначаем переменной пустой массив
    while ($row = $result->fetch_assoc()) {
        $array[] = $row;
    }
    return $array;
}

//echo print_r($articles); //отладка

//add news
function add_new($connection, $title, $text, $date)
{
    $insert_query = "INSERT INTO articles (title, text, date) VALUES ('%s', '%s', '%s')";

    $insert_query_secured = sprintf(
        $insert_query, //в эт переменную вместо впихнется следующее вместо %s, такова работа sprintf
        mysqli_real_escape_string($connection, $title),
        mysqli_real_escape_string($connection, $text),
        mysqli_real_escape_string($connection, $date)
    ); //mysqli_real_escape_string Экранирует специальные символы в строке для использования в SQL выражении, используя текущий набор символов соединения

    $result_insert = mysqli_query($connection, $insert_query_secured);

    if(!$result_insert) die(mysqli_error($connection));
}

//получение одной статьи из базы по id
function one_article_get($connection, $id){
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id);
    $result = mysqli_query($connection, $query);

    if(!$result) die(mysqli_error($connection));

    $article = mysqli_fetch_assoc($result);

    return $article;
}






