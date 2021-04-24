<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forloop</title>
</head>
<body>
<?php
$number = 5;

for ($i = 1; $i <= $number; $i++) {
    for ($j = $number; $j >= 1; $j--) {
        if ($i < $j) {
            // echo '';
        //   echo'  <br>';
            
        } else {
            echo $i'<br>';
        }
    }

    echo PHP_EOL;
}
?>
</body>
</html>