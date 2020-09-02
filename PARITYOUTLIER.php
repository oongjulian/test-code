<?php
$input = array("2","4", "0", "100", "4", "11", "2602", "36");
foreach ($input as $key => $value) {
    
        {
            if($value % 2 == 0){

            }
            else
                {echo "$value = Bilangan Ganjil<br>";}
        }
}
?>
=========================================<br>
<?php

$input = array("160","3", "1719", "19", "11", "13", "-21");
foreach ($input as $key => $value) {
    
        {
            if($value % 2 == 0){

                echo "$value = Bilangan Genap<br>";
            }
            else{
            }
        }
}
?>


=========================================<br>
<?php

$input = array("160","3", "1719", "19", "11", "13", "-21");
foreach ($input as $key => $value) {
    
        if ($value % 2 == 0) {
            echo 'false';
        }
}
?>