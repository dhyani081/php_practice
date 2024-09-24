<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
.container{
    max-width:80%;
    background-color: grey;
    margin: auto;
    padding: 23px;
    
}
    </style>
<body>
    <div class="container">
        <h1>Learn about PHP</h1>
Your party status is here: <br>


    <?php
$age= 34;
if($age>18){
    echo "You can go the party";
}
    else{
echo "You can't go to the party";
    }






?>
    </div>
</body>
</html>