<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
         echo "Hello World with php";
        ?> 

       <?php
        $variable1 = 50;
        $variable2 = 5;
        echo $variable1;
        echo $variable2;

        echo $variable1 + $variable2;

// Operators

//Arthematic Operators
echo "<br>";
echo "This value of variable1 + variable2 is ";
echo $variable1 + $variable2;

echo "<br>";
echo "This value of variable1 - variable2 is ";
echo $variable1-$variable2;

echo "<br>";
echo "This value of variable1 * variable2 is ";
echo $variable1 * $variable2;

echo "<br>";
echo "This value of variable1 / variable2 is ";
echo $variable1 / $variable2;

echo "<br>";
echo "This value of variable1 % variable2 is ";
echo $variable1 % $variable2;
 

//Assignment Operators

echo "<br>";
 $newVar =  $variable1;
 echo $newVar;

 echo "<br>";
 echo $newVar += 2;
 echo "<br>";
 echo $newVar -= 2;
 echo "<br>";
 echo $newVar *= 2;
 echo "<br>";
 echo $newVar /= 2;
 echo "<br>";

//Comparison Operators

echo "The value of 1==4 is ";
echo var_dump(1==4);
echo "<br>";

echo "The value of 1!=4 is ";
echo var_dump(1!=4);
echo "<br>";

echo "The value of 1>=4 is ";
echo var_dump(1>=4);
echo "<br>";

echo "The value of 1<=4";
echo var_dump(1<=4);
echo "<br>";

//Increment/Decrement Operators

echo $variable1++;
echo "<br>";
echo $variable1;
echo "<br>";

echo $variable1--;
echo "<br>";
echo $variable1;
echo "<br>";

echo ++$variable1;
echo "<br>";
echo $variable1;
echo "<br>";

echo --$variable1;
echo "<br>";
echo $variable1;
echo "<br>";





        ?>




    </div>
</body>
</html>