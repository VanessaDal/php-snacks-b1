<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
    <link rel="stylesheet" href="style.css">
    <?php 
        require_once 'data.php';

    ?>
</head>
<body>


<div class="container">
    <h1>
    <?php 
        foreach ($hotels as $infotype=>$hotel){?>

            <div class="hotel"><?php
            echo 'Hotel name: ' . $hotel["name"] . ". "; 
            echo 'Hotel description:' . $hotel["description"]  . ". ";
            if ($hotel["parking"]===true){
                echo 'Hotel parking: yes'}
                else {
                    echo 'Hotel parking: no'
                };          
            echo 'Hotel rating:' . $hotel["vote"] . ". ";
            echo 'Hotel distance:' . $hotel["distance_to_center"] . " km. ";

            ?></div><?php
        }


    ?>
    </h1>
</div>
    
</body>
</html>