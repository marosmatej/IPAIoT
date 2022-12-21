<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPform</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }
        main{
            width: min-content;
            min-width: 50%;
            margin-left: auto;
            margin-right: auto;
            padding: 0.1vw 2vw 1vw 2vw;
        }
        
    </style>
</head>
<body>
    <main>
    <?php
        echo '<h1>getParameters page</h1>';
        
        $sn1 = $_GET["a"];
        $sn2 = $_GET["b"];
        
        $text = "a=" . $sn1 . " b=" . $sn2;
        $sum = $sn1 + $sn2;
        
        echo $text;
        echo "<br>";
        echo "Sum:" . $sum;
    ?>
    </main>
</body>
</html>