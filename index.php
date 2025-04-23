<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="includes/signup.inc.php" method="post">
    <input type="text" name="username">
    <input type="password" name="pwd">
    <button>Signup</button>
</form>

    <?php 
    // $mobile = "Nokia";
    // $car = "Skoda";

    // function getCarInfo($mobile, $car){
    //     return "Mobile: " . $mobile . "; Car: " . $car;
    // }

    // echo getCarInfo($mobile, $car);


    require_once 'classes/Car.php';

    $gpu01 = new gpu("GTX", "1060");
    $gpu02 = new gpu("RTX", "3060");
    $gpu03 = new gpu("GT");

    echo $gpu01->setForm("") . "<br>";
    echo $gpu01->getForm() . "<br>";

    echo "cau";
    ?>
</body>
</html>
