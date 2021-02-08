<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <?php
    echo '<h3>Indexed Array</h3>';
    $ind_arr = array("Kokshetau", "Karaganda", "Astana");
    echo '<pre>';
    print_r($ind_arr);
    echo '</pre>';

    echo '<h3>Array With My Indeces</h3>';
    $key_arr = [3 => 'Kokshetau', 9 => 'Karaganda', 1 => 'Astana'];
    echo '<pre>';
    print_r($key_arr);
    echo '</pre>';

    echo '<h3>Associative Arrays</h3>';
    $assc_arr = array(19 => 'Kamila', 16 => 'Anais', 25 => 'Nursultan', 18 => 'Dilnaz');
    echo '<pre>';
    print_r($assc_arr);
    echo '</pre>';

    echo '<h3>Multidimensional Arrays</h3>';
    $cars = array(
        array("Volvo", 22, 18),
        array("BMW", 15, 13),
        array("Saab", 5, 2),
        array("Land Rover", 17, 15)
    );
    echo '<pre>';
    print_r($cars);
    echo '</pre>';

    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>" . $cars[$row][$col] . "</li>";
        }
        echo "</ul>";
    }



    ?>


</body>

</html>