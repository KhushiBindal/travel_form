<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>basics 2</title>
  </head>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }
    .container {
      margin: auto;
      padding: 25px;
      max-width: 70%;
      background-color: rgb(213, 174, 174);
      border: solid black 2px;
    }
  </style>
  <body>
    <div class="container">
      <h3>Learning php</h3>
      <br> 
      <p>Your party status is shown below :</p>
      <?php
      $age =46;
      if($age>34){
        echo "<br>You can party";
      }
      else {
        echo "<br>you can't party";
      }
    //   array
    $lang = array("0 ","1","2","3");
    echo "<br>";
    echo $lang[2];
    echo count($lang);
    // while loop
    $a=0;
    while($a<=10){
        echo "<br>The value of a is : ";
        echo $a++ ;

    }
    // Iterating array in php using while
    $a=0;
    while($a<count($lang)){
        echo "<br>The value at index ";
        echo $a;
        echo " is : ";
        echo $lang[$a++] ;
    }
    // do while
    $i=90;
    do{
        echo "<br>The value of i is : ";
        echo $i++ ;
    }
    while($i<10);
    // for loop
    for ($j=0; $j<6; $j++) { 
        echo "<br>";
        echo $j;
    }
    // for each loop
    foreach($lang as $val){
        echo "<br>The value is ";
        echo $val;
    }
    function print5(){
        echo "<br>FIVE";
    }
   print5();
   print5();
   print5();  

   function print_num($num){
    echo "<br>Your number is ".$num; 
    // echo $num;
   }
   print_num(35);
?>
    </div>
  </body>
</html>
