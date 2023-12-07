<?php
$str = 'PHP Tutorial ';
$words = explode(' ', $str); 

$modifiedStr = '';

for ($i = 0; $i < count($words); $i++) {
    $word = $words[$i];
    $firstChar = mb_substr($word, 0, 1); 
    $remainingChars = mb_substr($word, 1); 

    if ($i !== count($words) - 1) {
        $modifiedStr .= ' ';
    }
}

echo '<p>' . $modifiedStr . '</p>'; 
?>
