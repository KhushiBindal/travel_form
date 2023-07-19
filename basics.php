<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php learning</title>
</head>
<body>
    <div class="container">
        this is my first php website
        <br>
        <?php
        define ("pi", 3.14);
        echo "Hello world, this is php";
        ?>
    </div> 
    <?php
    // Arithmetic operator
    $var1=34;
    $var2=56;
    echo $var1;
    echo "<br>";
    echo $var2;
   
    echo "<br> Addition of ";
    echo $var1;
    echo " and ";
    echo $var2;
    echo " is ";
    echo $var1+$var2;
    echo "<br> Sub of ";
    echo $var1;
    echo " and ";
    echo $var2;
    echo " is ";
    echo $var1-$var2;
    echo "<br> mul of ";
    echo $var1;
    echo " and ";
    echo $var2;
    echo " is ";
    echo $var1*$var2;
    echo "<br> div of ";
    echo $var1;
    echo " and ";
    echo $var2;
    echo " is ";
    echo $var1/$var2;
    // Assignment operator
    $newvar= $var1;
    $newvar +=1; 
    echo "<br> Value of newvar  ";
    echo $newvar;

    // Comparison operator -> it returns a boolen
    echo "<br>Is 1==4? : ";
    echo var_dump(1==4);
    echo "<br>Is 1!=4? : ";
    echo var_dump(1!=4);    
    echo "<br>Is 1>=4? : ";
    echo var_dump(1>=4);    
    echo "<br>Is 1<=4? : ";
    echo var_dump(1<=4);

    // logical
    $myvar = (true) and  (true);
    echo "<br>";
    echo var_dump($myvar);
    ?>

    <?php
    /* data types in php
    1. string
    2. integer
    3. float
    4. boolean
    5. array
    6. object
    */
    echo "<br>";
    $str= "<br>this is  a string";
    echo var_dump($str);
    echo "<br>";
    echo pi;
    ?>
</body>
</html>