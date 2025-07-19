<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops in Php</title>
</head>
<style> 
*{
    margin : 0;
    padding : 0;
    box-sizing:border-box;
}
    .container{
        max-width :80%;
        background-color:red;
        margin: auto;
        background-color: skyblue;
    }
</style>
<body>

<div class="container">
    hello

    <?php
$lang = array("python","java","c++","typeScript");
// echo "<br/>";
//     echo $lang[0];
//     echo "<br/>";
// echo count($lang);
$r = 0;
while( $r < count($lang)){
    echo "<br> this is ";
    echo $lang[$r];
    $r++; 
}
//loop 
$a=0;
while($a <=10){
    echo" <br/>";
    echo $a;
    $a++;

}
$c = 20;
do{
    echo "<br> the val is ";
    echo"<br>still the given conditionn is not ture but do while will print it once";

    echo $c;
    $c++;
}while($c< 10);
    ?>
    
</div>
    
</body>
</html>