<?php 
    echo "<h3>Create an array with 5 element </h3>";

    $cars = array("Volvo","Chavrollet","Ford","Mustang","Dodge");

    echo "<h3>access and display the first and last element </h3>";
    echo $cars[0]. "<br>";
    echo $cars[4]. "<br>";
    echo "<h3>Use a foreach Loop to display each element </h3>";

    
    $houses = array("bongalow","Terrece","3bedroom Duplex","4bedroom Duplex");
    echo "<h2> List of Cars </2> <br>";
    foreach($cars as $car){
        echo "<p> $car  <br> <p>";
    };
    

    echo "<h2> List of Houses </2> <br>";
        foreach($houses as $house ){
            echo "<p>$house <br> <p>";
        };

    ?>

    <?php 

                echo "Using key array";
            $house_price = array(
                "Bongalow" => "\$400,000",
                "Terrece"  =>  "\$980,0000,000",
                "3bedroom"  => "\$890,000",
                "4Bedroom"  =>  " \$70,000,000"
            );

            foreach($house_price as $key => $value){
                    echo "$key => $value . <br>";
            };
    ?>