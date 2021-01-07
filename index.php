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
    <?php 
        foreach ($hotels as $infotype=>$hotel){?>

            <div class="hotel"><?php
            echo 'Hotel name: ' . $hotel["name"] . ". <br>"; 
            echo 'Hotel description: ' . $hotel["description"]  . ". <br>";
            if ($hotel["parking"]===true){
                echo 'Hotel parking: Yes. <br>' ;
            } else {
                    echo 'Hotel parking: No. <br>';
                };      
            echo 'Hotel rating: ' . $hotel["vote"] . "/5. <br>";
            echo 'Hotel distance: ' . $hotel["distance_to_center"] . " km. ";

            ?></div><?php
        }


    ?>
</div>
    
</body>
</html>