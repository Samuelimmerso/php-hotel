<?php 


$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

// controllo l'esistenza dei parametri GET 
$parking = isset($_GET["parking"]) ? true : false;
$review = $_GET["review"];
$hotel_Printed = [];

foreach($hotels as $hotel){ 
    if($hotel["parking"] == $parking){
        if($hotel["vote"] >= $review){
            array_push($hotel_Printed,$hotel);
        }
    }
}





// foreach($hotels as $hotels_list){
//     foreach($hotels_list as $hotel){
//         // if($hotel["parking"]==$parking){
//         //     if($hotel["vote"] >= $review){
//         //         echo $hotel;
//         //     }
//         // }
//         echo $hotel;
//     }
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php foreach($hotel_Printed as $hotel){ ?>
        <?php foreach($hotel as $hotel_desc){ ?>
            
            <h1><?= $hotel_desc ?></h1>
        <?php } ?>
        <br>
    <?php } ?>



<!-- // if($hotel["parking"]==$parking){
        //     if($hotel["vote"] >= $review){
        //         echo $hotel;
        //     }
        // } -->


</body>
</html>
