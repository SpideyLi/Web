<?php 
    $first = $_REQUEST["first"]; 
    $number = (strlen($first))-1;
    $num = (int)($_REQUEST["num"]); 
    $num = (int)($num); 
    $length = ($num - $number);
    $file = file_get_contents("wordsEn.txt");  
    $pattern = '/\n'.$first.'.'.'{'.$length.'}$/m'; 
    preg_match_all($pattern, $file, $matches); 
    $words = $matches[0]; 
    $length = count($words); 
    echo $length." results"; 
    echo "<br>"; 
    for($x = 0; $x < $length; $x++){ 
    echo $words[$x]; 
    echo "<br>"; 
    } 
?> 