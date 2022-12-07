<?php

$my_file = fopen("location.txt","w");
$information = "lat:".$_GET["lat"]."long:".$_GET["long"];
fwrite($my_file,$information );

fclose($my_file);

?>