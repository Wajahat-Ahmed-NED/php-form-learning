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
    $shop=['cereal'=>'40','coffebeans'=>'32','bananas'=>'45','onions'=>'41','lucci'=>'44','tomato'=>'47'];
    $final_price=0;
    print_r($shop);
    foreach($shop as $product=>$amount){
        echo '<br>'.$product.'cost $'.$amount;
        $final_price+=$amount;
    }
    echo"<br> Your final price would be $ ".$final_price;


    $shop=['cereal'=>32,'banana'=>43,'gullo'=>66,'Munno'=>47];
    $final_price=0;
    print_r($shop);
    echo $shop;
    foreach($shop as $product=>$amount){
        echo "<br> Product ".$product.' has price $ '.$amount;
        $final_price+=$amount;
    }
    echo"<br> Your final price is calculated to be $ ".$final_price;
    ?>
    
</body>
</html>