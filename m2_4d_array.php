<?php
/**
 * Praktikum DBWT. Autoren:
 * Paundra, Daran, 3290902
 * Alejandro, Schmeing, 3203949
 */

    $famousMeals = [
        1 => ['name' => 'Currywurst mit Pommes',
            'winner' => [2001, 2003, 2007, 2010, 2020]],
        2 => ['name' => 'Hähnchencrossies mit Paprikareis',
            'winner' => [2002, 2004, 2008]],
        3 => ['name' => 'Spaghetti Bolognese',
            'winner' => [2011, 2012, 2017]],
        4 => ['name' => 'Jägerschnitzel mit Pommes',
            'winner' => 2019]
    ];

?>

<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8"/>
        <title>Name and Winner gericht</title>
        <style type="text/css">
            * {
                font-family: Arial, serif;
            }
            .rating {
                color: darkgray;
            }
        </style>
    </head>
<body>
<ol>
    <?php
    foreach ($famousMeals as $famousMeal) {
        echo "<li class='meal_name'>{$famousMeal['name']}";
        //echo sort($famousMeals['winner']);

        if(is_array($famousMeal['winner'])){
            $textOut = "{$famousMeal['winner'][0]}"; //erste element
            $ct = count($famousMeal['winner']);
            for($i2 = 1; $i2 < $ct; $i2++){
                $textOut= "{$famousMeal['winner'][$i2]}, $textOut";
            }
        }
        else {
            $textOut= "{$famousMeal['winner']}";
        }
        echo "<br>$textOut</li>";
    }
    ?>
</ol>
</body>
</html>