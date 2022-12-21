<?php echo '<p>First web on Azure</p>';


        echo '<h1>getParameters page</h1>';
        
        $sn1 = $_POST["a"];
        $sn2 = $_POST["b"];
        
        $text = "a=" . $sn1 . " b=" . $sn2;
        $sum = $sn1 + $sn2;
        
        echo $sn1;
        echo $sn2;
        //echo $text;
        echo "<br>";
        echo "Sum:" . $sum;
    ?>