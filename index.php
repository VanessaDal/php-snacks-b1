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
            echo 'hotel name: ' . $hotel["name"] . " ";
            echo 'hotel description:' . $hotel["description"];
            echo $hotel["parking"];
            echo 'hotel rating:' . $hotel["vote"];
            echo 'hotel distance:' . $hotel["distance_to_center"];

            ?></div><?php
        }

            // echo $hotels;

    ?>
    </h1>
</div>
    
</body>
</html>