<?php

$im = glob("*.jpg");

foreach ($im as $_) {
   // echo "Inspecting $_<br>";
    $b = filesize($_);
   // echo "filebytes are $b<br>";
    $imageData = getImageSize($_);
    if (!$imageData) {
        unlink($_);
        echo "no imagedate for $_ - deleting<br>";
    }
    if ($b>5500000) {
        unlink($_);
        echo "image too big for $_ - deleting<br>";
    }
}

