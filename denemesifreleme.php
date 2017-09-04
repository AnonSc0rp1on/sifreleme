<?php





$ip = trim(fgets(STDIN, 1024));
$sifreli = md5($ip);

echo $sifreli;








?>
