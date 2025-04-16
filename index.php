<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <?php 
    $mobile = "Nokia";
    $car = "Skoda";

    function getCarInfo($mobile, $car){
        return "Mobile: " . $mobile . "; Car: " . $car;
    }

    echo getCarInfo($mobile, $car);
    ?>
</body>
</html>
