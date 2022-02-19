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
        echo "Hello there!";
        echo "<br>";
        exec("python3 test.py arg1 argument2 argumentNumber3", $output, $code);
        for($i=0; $i<sizeof($output); $i++){
            echo $output[$i]."<br>";
        }
    ?>
</body>
</html>