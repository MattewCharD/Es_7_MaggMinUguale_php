<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maggiore Minore Uguale</title>
</head>
<body>

<?php 
    $x=2;
    $y=5;
    $maxVal;
    $str;
    $str2;
    if($x>$y){
        $str="maggiore";
        $maxVal=$x;
    } elseif ($x==$y) {
        $str="uguale";
        $maxVal=$x;
    } else {
        $str="minore";
        $maxVal=$y;
    }
    echo "<h1>La variabile x, è ".$str." rispetto alla variabile y.</h1>";
    
    if($maxVal<10){
        $str2 = $maxVal." minore di 10";
    }elseif($maxVal<=20){
        $str2 = $maxVal." compreso tra 10 e 20";
    }elseif($maxVal<=30){
        $str2 = $maxVal." compreso tra 21 e 30";
    }else{
        $str2 = $maxVal." maggiore di 30";
    }
    echo "<p style='font-size:60px;'>".$str."</p>";

?>
    
</body>
</html>