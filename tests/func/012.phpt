 marcosptf - <marcosptf@yahoo.com.br>
#phptestfest PHPSP on Google - Sao Paulo - Brazil - 2014-06-05
--FILE--
-<?php #error_reporting(0);
+<?php
echo addcslashes("zoo['.']","z..A");
?>
--EXPECTF--
Warning: addcslashes(): Invalid '..'-range, '..'-range needs to be incrementing in %s on line %d
\zoo['\.']
