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

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


</head>


<body>
          
    <table class="table table-bordered border-primary">
        
        <thead>
        
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">vote</th>
                <th scope="col">distance_to_center</th>
            </tr>
                
        </thead>
                
        <tbody>


            <?php

                foreach ($hotels as $index => $hotel) {
            
            ?>
                    
                <tr>
                    <th scope="row">
                        <?php echo $index; ?>
                    </th>
                    <td>
                        <?php var_dump($hotel[0][0]); ?>
                    </td>
                    <td>
                        <?php var_dump($hotel[0][1]); ?>
                    </td>
                    <td>
                        <?php var_dump($hotel[0][2]); ?>
                    </td>
                    <td>
                        <?php var_dump($hotel[0][3]); ?>
                    </td>
                    <td>
                        <?php var_dump($hotel[0][4]); ?>
                    </td>
                </tr>

                <!-- <tr>
                    <th scope="row">
                        1
                    </th>
                    <td>
                        Mark
                    </td>
                    <td>
                        Otto
                    </td>
                    <td>
                        @mdo
                    </td>
                </tr>
                
                <tr>
                    <th scope="row">3</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                
                <tr>
                    <th scope="row">4</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                
                <tr>
                    <th scope="row">5</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr> -->
            <?php
                }
            ?>
        </tbody>
  
    </table>
    
</body>



</html>