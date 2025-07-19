<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If and Else Statement</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: blue;
        margin: auto;
        padding :23px;
    }
</style>
<body>
    <div class="container">
        <h2>started with php</h2>
        this is php which is used in the backend
        <br>
        <?php
           $age =98;
           if($age >18){
            echo "eligible for voting";
           }
           else{
            echo "not eligible for voting";
           }
        ?>
    </div>
    
</body>
</html>