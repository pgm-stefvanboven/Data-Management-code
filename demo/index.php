<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oefeningen PHP</title>
    <link rel="stylesheet" href="css/style.css">
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
        $colors = [ 'red', 'blue', 'green', 'yellow', 'orange' ];

        foreach ($colors as $key => $value) {
            echo '<div class="card" style="background:' . $value . '">' . $key . ' is het kleur ' . $value . '</div>';
        }
        ?>
    </div>
</body>

</html>