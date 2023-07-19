<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings in php</title>
</head>
<body>
    <div class="container">
        <?php
        $str ="this toys";
        echo "The string is : ".$str;
        $len = strlen($str);
        // strlen is used to count number of letters in a string
        echo "<br>The length of str is ".$len.". Thankyou<br> ";

        // str_word_count is ued to count the number of pwrds in a string
        echo "Number of words in string str are/is ".str_word_count($str)."<br>";

        // strrev is used to revere a  string
        echo "The reverse of the string is: ".strrev($str)."<br>";

        // strpos is used to find the position of any word in a string
        echo "Position of toys is ".strpos($str, "hi")."<br>";

        // str_replace is used to replace a word from another word
        echo "Replacing ys with ni: ".str_replace("ys",'ni',$str)."<br>";
        ?>
    </div>
</body>
</html>