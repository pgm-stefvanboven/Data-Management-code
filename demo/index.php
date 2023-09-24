<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefeningen PHP</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/lotto.css">
</head>

<body>
    <?php
    $person = $_POST['person'] ?? 'you';

    echo '<h2>Hello there ', $person, '!</h2>';
    echo "<h2>Hello there $person!</h2>";

    $a = 4895;
    $b = 10789;

    echo $a + $b;

    $courses = [
        'PHP' => 'PHP',
        'JS' => 'JavaScript',
        'MySQL' => 'SQL'
    ];

    echo $courses['JS'];

    foreach ($courses as $course) {
        echo "<li>$course</li>";
    }

    print_r($person);
    ?>

    <p>Wie ben jij?</p>
    <form method="POST">
        <input type="text" name="person" id="name">
        <input type="submit" value="Submit">
    </form>

    <h2>Oefening 1: Rainbow</h2>
    <div class="rainbow">
        <?php

        for ($hue = 1; $hue <= 360; $hue++) {
            echo '<div class="block" style="background-color: hsl(' . $hue . ', 100%, 50%);"></div>';
        }
        ?>
    </div>

    <h2>Oefening 2: Colors via array</h2>
    <div class="rainbow-cards">
        <?php
        $colors = ['red', 'blue', 'green', 'yellow', 'orange'];

        foreach ($colors as $key => $value) {
            echo '<div class="card" style="background:' . $value . '">' . $key . ' is het kleur ' . $value . '</div>';
        }
        ?>
    </div>

    <h2>Oefening 3: Auto's</h2>
    <div class="cars">
        <?php

        require_once 'car_data.php';

        foreach ($cars as $car) {
            include 'views/car_item.php';
        }
        ?>
    </div>

    <h2>Oefening 4: Lotto trekking</h2>

    <?php
    $lottotrekking = [];

    while (count($lottotrekking) < 6) {
        $new = rand(1, 45);
        if ( ! in_array($new, $lottotrekking) ) {
            $lottotrekking[] = $new;
        }
    }

    sort($lottotrekking);

    ?>

    <div class="trekking">
        <?php
        foreach ($lottotrekking as $key => $value) {
            echo '<div class="nummer">' . $value . '</div>';
        }
        ?>
    </div>

    <h2>Oefening 5: Festival name generator</h2>

    <?php

    require 'festival_data.php';

    $prefix_cnt = count($prefix);
    $suffix_cnt = count($suffix);

    do {
        $new_festival = $prefix[rand(0, $prefix_cnt-1)] . $suffix[rand(0, $suffix_cnt-1)];
    } while ( in_array( $new_festival, $unavailable) );

    echo $new_festival;

    ?>
</body>

</html>