<?php 

    echo "<h3>Craete a function to greet a person by name</h3>";
    $name;
    function greet($name){
       echo  "Good morning $name  <br>";
    };

    greet("Purity");
    greet("Peculiar");
    greet("ThankGod");



    echo "<h3>Write a function to add two numbers </h3>";


    $num1;
    $num2;
    $sum;

    function addnum($num1,$num2){
         $sum = $num1 + $num2;
        echo $sum . '<br>';
    };
    addnum(3,5);
    addnum(10,5);
    addnum(7,3);




    echo "<h3>Use a Function to format a string from upper to lower </h3>";

    $name = "THANKGOD";

   $new_name = strtolower($name);
    $ne_name = strrev($name);
    $n_name = strtoupper($name);
    $name1 = strtotime($name);

    echo "$new_name <br>";
    echo "$ne_name <br>";
    echo "$n_name <br>";
    echo "$name1 <br>";