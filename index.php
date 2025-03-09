
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>Website</h1>
        <?php
            echo "hello world!";

            $name = "John";
            echo "<h1>My name is $name</h1>";   // double quotes
            echo '<h1>My name is ' . $name . '</h1>';   // single quotes

            echo "My name is $name";
            echo "<br>";
        ?>
            <button>Click me</button>

            //
        <?php

     $name = "John";
     $age = 25;
     echo "<h1>My name is: $name</h1>";
     echo "<h1>My age is: $age</h1>";
     echo "<h1>My name is: $name and my age is: $age</h1>";
     echo "<h1>My name is: $name and my age is: $age + 5</h1>";
     echo "<h1>My name is: $name and my age is: " . ($age + 5) . "</h1>";   // use parentheses
     echo "<h1>My name is: $name and my age is: " . $age++ . "</h1>";   // post-increment
     echo "<h1>My name is: $name and my age is: " . $age . "</h1>";
        echo "<h1>My name is: $name and my age is: " . ++$age . "</h1>";   // pre-increment


        ?>
    </body>
    </html>