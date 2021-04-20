<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        function f_to_c ($num1) {

            $celsius = floor(($num1 - 32) * (5 / 9));
            echo "$num1 Fahrenheit is $celsius Celsius";

        }
        // f_to_c(120);

    ?>

    <form action="advanced.php" method="GET">
    <h1>Convert Fahrenheit into Celsius</h1>
    Fahrenheit: <input type="int" name="fahrenheit">
    <input type="submit" name="submit">
    </form>


    <?php

        if(isset($_GET['submit'])) {

            $num1 = $_GET['fahrenheit'];
            $num1 = intval($num1);
            
            f_to_c($num1);


        }

    ?>
</body>
</html>