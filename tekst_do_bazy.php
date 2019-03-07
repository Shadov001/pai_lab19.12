<!-- dodaj najpeirw tabelke o nazwie artykul do bazy danych -->
<?php

$link = mysqli_connect("149.156.136.151", "mjamroz", "1234567890.", "mjamroz") or die(mysqli_connect_error());

if (isset($_POST['text']))
{
    $text = $_POST['text'];
    $text =  mysqli_real_escape_string($link, $login);

    $sql = "insert into artykul(text) values ($_POST(text)) ";
}