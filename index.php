<?php
include("functions.php");
$days = "";
if (isset ($_GET ['numDays'])){
    $days = calculateFutureDate($_GET ['numDays']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if ($days){
        echo($days);
    }
    else{
        todaysDate();
    }

    //calculateFutureDate();
    include "form.php";

    ?>
</body>
</html>