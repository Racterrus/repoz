<?php
/**
 * главная страница со всеми новостями,
 * отсортированными по дате в обратном порядке,
 * со ссылками на каждую новость
 */
require ('model.php');
?>
<H1>Maine page - GB News Blog</H1>

<?php
for($i = 0; $i<$rows; $i++){
?><article>
    <?php
    echo '<h2>' . $title . '<h2>';
    ?>
</article>;
<?php
}