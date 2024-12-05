<?php

echo "Enter unit you consumed: " ;
$inputUnits = (float)readline();


//1-100 units =$5, 101-200 units = $10, above 201 units = $15
if($inputUnits <=100){

    $bill = $inputUnits * 5;
    
}elseif($inputUnits <= 200){

    $bill = 100 * 5 + ($inputUnits - 100) * 10;

}else{
    $bill = 100 * 5 + 100 *10 + ($inputUnits - 200) * 15;
}

echo "Your electricity bill is:$$bill";


?>



