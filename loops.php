<?php 

  echo  "<h3>Write an if statement to display Good Morning If the Hour is Before noon
   //Good Afternoon if the hour is noon
   //Good Night When it is night </h3>";
 $hour = 17;

 if($hour >= 0 && $hour <=11){
    echo"Good Morning the time is {$hour}.0 clock right now  <br>";
 }elseif($hour >= 12 && $hour <= 16){
    echo"Good Afternoon the time is {$hour}.0 clock right now    <br>";
 }else{
    echo"Good Evening the time is {$hour}.0 clock right now   <br>";
 };


  echo " <h3>use a switch statement to display the name of the day base on the number(1-7)</h3>";
   "<br>";

   $day =1;

   switch ($day) {
      case '1':
         echo"Sunday";
         break;
      case '2':
         echo"monday";
         break;
      case '3':
         echo"Tuesday";
         break;
      case '4':
         echo"wednesday";
         break;
      case '5':
         echo"Thursday";
         break;
      case '6':
         echo"Friday";
         break;
      case '7':
         echo"Saturday";
         break;


      
      default:
         echo "not a valid day of the week <br>";
         break;
   };

      "<br>";
echo "<h3> Create a simple for loop to Output number 1-10</h3>";

   $i;

   for($i = 1; $i <=10; $i++){
      echo " Number {$i} <br>";
   };


   echo "<h3> Create a simple for loop to Output number 1-10 in reverse </h3>";

   $i;

   for($i = 20; $i >=1; $i--){
      echo " Number {$i} <br>";
   };
