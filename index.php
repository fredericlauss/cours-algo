
<?php

for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0){
        $color = 32;
        echo "\033[" . $color . "m" . $i . "\n";
      } elseif ($i% 2 == 1) {
        $color = 34;
        echo "\033[" . $color . "m" . $i . "\n";
      }
}