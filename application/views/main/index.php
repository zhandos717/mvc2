<p>Главная страница</p>

<?

foreach ($news as $value) { ?>


    <h3><?= $value['title'] ?></h3>

    <p><?= $value['description'] ?></p>
    <hr>
<? } ?>

