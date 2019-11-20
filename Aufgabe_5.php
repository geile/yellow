<link rel="stylesheet" type="text/css" href="style.css">
<?php
    $letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I'];
$break = 3;
foreach ($letters as $index => $letter) {
    if ($index % $break == 0) {
        echo "<br>";
    }
    echo $letter . " ";
}

echo "<br>";