<?php
include "autoload.php";

use Controller\LightShowController;

// Todo: Start coding here

$ctrl = new LightShowController();

var_dump($_GET);

switch ($_GET["action"]) {
    case "play":
        $ctrl->playPlaylist();

        break;

    case "add":
        echo "add";
        $song = $_GET["song"];
        $ctrl->addToPlaylist($song, $song);

        echo "Added $song to playlist<br>";

        break;
}


?>

<a href="?action=play">play playlist</a>

<form action="index.php" method="get">

    Add song to playlist:
    <select name="song">
        <?php

        foreach ($ctrl->getSongs() as $song) {
            echo "<option value='$song'>$song</option>";
        }

        ?>
    </select>

    <button type="submit" name="action" value="add" >add</button>

</form>
