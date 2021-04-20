<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <?php

        function f_to_c ($num1) {

            $celsius = floor(($num1 - 32) * (5 / 9));
            // echo "$num1 Fahrenheit is $celsius Celsius";

            switch ($celsius) {

                case ($celsius < 5):
                    echo "$celsius celsius is very cold";
                    break;
                case ($celsius > 5 && $celsius < 10):
                    echo "$celsius celsius is cold";
                    break;
                case ($celsius > 10 && $celsius < 15):
                    echo "$celsius celsius is pleasant";
                    break;
                case ($celsius > 15 && $celsius < 20):
                    echo "$celsius celsius is warm";
                    break;
                case ($celsius > 20):
                    echo "$celsius celsius is hot";
                    break;
                default:
                    echo "meh";

            }

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>