<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <?php

        function out(){
            echo"hello";
        }

        out();

        function print_int($intgerr){
            echo"<br> enter any number :";
            echo $intgerr;
        }
        print_int(18);
        ?>

    </div>
    
</body>
</html>