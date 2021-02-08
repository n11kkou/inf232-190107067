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
    $ind_arr = array("Kokshetau", "Karaganda", "Astana");
    echo '<pre>';
    print_r($ind_arr);
    echo '</pre>';

    $key_arr = [3 => 'Kokshetau', 9 => 'Karaganda', 1 => 'Astana'];
    echo '<pre>';
    print_r($key_arr);
    echo '</pre>';

    $assc_arr = array(19 => 'Kamila', 16 => 'Anais', 25 => 'Nursultan', 18 => 'Dilnaz');
    echo '<pre>';
    print_r($assc_arr);
    echo '</pre>';



    ?>


</body>

</html>