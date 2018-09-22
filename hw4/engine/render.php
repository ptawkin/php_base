<?php

function renderGallery() {
    $dir = MIN_DIR;
    $files = scandir($dir);

    echo "<div style='display: flex; justify-content: space-between; margin: 50px'>";

    for ($i = 0; $i < count($files); $i++) {

        if (($files[$i] != ".") && ($files[$i] != "..")) {

            $path = $dir . $files[$i];

            echo "<a href='$path' target='_blank''>";
            echo "<img src='$path' alt='' width='100' />";
            echo "</a>";
        }

    }

    echo "</div>";
}
