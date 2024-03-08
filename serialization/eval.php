<?php

$num = $_GET['num'];
eval("\$after = $num*5;");
//eval("\$after = \"$num\"*5;");
//eval("\$after = \$num*5;");
echo $after;

?>
