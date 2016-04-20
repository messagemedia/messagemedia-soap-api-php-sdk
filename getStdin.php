<?php

function getStdin($expectedResult) {
    $handle = fopen("php://stdin", "r");
    $line = fgets($handle);
    if (empty($expectedResult)) {
        return true;
    } else if ($line == $expectedResult."\n") {
        return true;
    }
    return false;
}
?>
