<?php
// Verbinding met de database
include_once 'db_connect.php';

// form data to database
if (isset($_POST['paste'])) {
    $taal = $_POST['taal'];
    $titel = $_POST['titel'];
    $code = $_POST['code'];
    $datum = $_POST['datum'];
    $wachtwoord = $_POST['waachtwoord'];
    $url = $_POST['url'];

    $sqlUpdate = "INSERT INTO movies
    SET `taal` = '$taal',
    `titel` = '$titel',
    `code` = '$code',
    `datum` = '$datum',
    `wachtwoord` = '$wachtwoord',
    `url` = '$url';";
    $update = $db->query($sqlUpdate);
    if ($update) {
        echo '<script>alert("Paste is geplaatst!")</script>';
    } else {
        echo '<script>alert("Paste is niet geplaatst!")</script>';
    }
}

?>