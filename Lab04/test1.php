<?php 
    $first = $_REQUEST["first"]; 
    $last = $_REQUEST["last"]; 
    $num = (int)($_REQUEST["num"]); 
    $num = (int)($num-2); 
    $file = file_get_contents("wordsEn.txt");  
    $pattern = '/\n'.$first.'.'.'{'.$num.'}'.$last.'\n/'; 
    preg_match_all($pattern, $file, $matches); 
    $words = $matches[0]; 
    $length = count($words); 
    echo $length." results"; 
    echo "<br>"; 
    for($x = 0; $x < $length; $x++) { 
    echo $words[$x]; 
    echo "<br>"; 
    } 
?> 