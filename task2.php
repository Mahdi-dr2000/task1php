<?php
$string1 = 'Tomorrow I \'ll learn PHP global variables.';
$string2 = 'This is a bad command: del c:\.';

$string1 = str_replace('\'ll', '\'ll', $string1);
$string2 = str_replace('c:\\.', 'c:*. *', $string2);

echo $string1 . '<br>';
echo $string2;
?>
