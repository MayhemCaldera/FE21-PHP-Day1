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
                    echo '<div class="card" style="width: 18rem;">
                    <img src="https://alltop.com/viral/wp-content/uploads/2014/01/Fotolia_2429571_Subscription_L-760x430.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$celsius.'° Celsius</h5>
                      <p class="card-text">Is very Cold</p>          
                    </div>
                  </div>';
                    break;
                case ($celsius > 6 && $celsius < 10):
                    echo '<div class="card" style="width: 18rem;">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQgAapJm2V5u5WYwI4H6jFV_KzqzITdWJ0fdg&usqp=CAU" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$celsius.'° Celsius</h5>
                      <p class="card-text">Is Cold</p>          
                    </div>
                  </div>';
                    break;
                case ($celsius > 11 && $celsius < 15):
                    echo '<div class="card" style="width: 18rem;">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/09/22/b7/ee/inn-at-pleasant-lake.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$celsius.'° Celsius</h5>
                      <p class="card-text">Is Pleasant</p>          
                    </div>
                  </div>';
                    break;
                case ($celsius > 16 && $celsius < 21):
                    echo '<div class="card" style="width: 18rem;">
                    <img src="https://www.jetsetter.com/wp-content/uploads/sites/7/2018/04/zjCUOJIL.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$celsius.'° Celsius</h5>
                      <p class="card-text">Is Warm</p>          
                    </div>
                  </div>';
                    break;
                case ($celsius > 22):
                    echo '<div class="card" style="width: 18rem;">
                    <img src="https://specials-images.forbesimg.com/imageserve/824845572/960x0.jpg?fit=scale" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">'.$celsius.'° Celsius</h5>
                      <p class="card-text">Is Hot</p>          
                    </div>
                  </div>';
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