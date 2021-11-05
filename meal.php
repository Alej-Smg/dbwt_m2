<?php
const GET_PARAM_MIN_STARS = 'search_min_stars';
const GET_PARAM_SEARCH_TEXT = 'search_text';
const GET_PARAM_SHOW_DESCRIPTION = 'show_description';
const GET_PARAM_SPRACHE_AUSWÄHLEN = 'sprache_auswählen';

/**
 * List of all allergens.
 */
$allergens = [
    11 => 'Gluten',
    12 => 'Krebstiere',
    13 => 'Eier',
    14 => 'Fisch',
    17 => 'Milch'
];

$meal = [
    'name' => 'Süßkartoffeltaschen mit Frischkäse und Kräutern gefüllt',
    'description' => 'Die Süßkartoffeln werden vorsichtig aufgeschnitten und der Frischkäse eingefüllt.',
    'price_intern' => 2.90,
    'price_extern' => 3.90,
    'allergens' => [11, 13],
    'amount' => 42             // Number of available meals
];

$ratings = [
    [   'text' => 'Die Kartoffel ist einfach klasse. Nur die Fischstäbchen schmecken nach Käse. ',
        'author' => 'Ute U.',
        'stars' => 2 ],
    [   'text' => 'Sehr gut. Immer wieder gerne',
        'author' => 'Gustav G.',
        'stars' => 4 ],
    [   'text' => 'Der Klassiker für den Wochenstart. Frisch wie immer',
        'author' => 'Renate R.',
        'stars' => 4 ],
    [   'text' => 'Kartoffel ist gut. Das Grüne ist mir suspekt.',
        'author' => 'Marta M.',
        'stars' => 3 ]
];

$showRatings = [];
if (!empty($_GET[GET_PARAM_SEARCH_TEXT])) {
    $searchTerm = $_GET[GET_PARAM_SEARCH_TEXT];
    foreach ($ratings as $rating) {
        if (strpos($rating['text'], strtolower($searchTerm)) !== false) { //strtolower für case insensitive
            $showRatings[] = $rating;
        }
    }
} else if (!empty($_GET[GET_PARAM_MIN_STARS])) {
    $minStars = $_GET[GET_PARAM_MIN_STARS];
    foreach ($ratings as $rating) {
        if ($rating['stars'] >= $minStars) {
            $showRatings[] = $rating;
        }
    }
} else {
    $showRatings = $ratings;
}

function calcMeanStars(array $ratings) : float {
    $sum = 0; // 3.3.d. logische Fehler : $sum sollte nicht 1 sein.
    foreach ($ratings as $rating) {
        $sum += $rating['stars'] / count($ratings);
    }
    return $sum;
}

?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8"/>
        <title>Gericht: <?php echo $meal['name']; ?></title>
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
        <h1>Gericht: <?php echo $meal['name']; ?></h1>
        <p><?php echo $meal['description']; ?></p>

        <table class="price">
            <tr>
                <td>Preis Intern</td>
                <td><?php echo ' : '.number_format($meal["price_intern"], 2, ',' , '') . '€'; ?></td>
            </tr>
            <tr>
                <td>Preis Extern</td>
                <td><?php echo ' : '.number_format($meal["price_extern"], 2, ',' , '') . '€'; ?></td>
            </tr>
        </table>


        <p>enthält die folgenden Allergene :
            <ul><?php foreach ($meal['allergens'] as $aspekte)
                echo "<li class='allergens'>$allergens[$aspekte]"; ?></ul>
        </p>

        <h1>Bewertungen (Insgesamt: <?php echo calcMeanStars($ratings); ?>)</h1>

        <?php
        $search_value = "";
        if (isset($_GET["search_text"])) $search_value = $_GET["search_text"];
        ?>

        <form method="get">
            <label for="search_text">Filter:</label>
            <input id="search_text" type="text" name="search_text" value="<?php echo "$search_value";?>">
            <input type="submit" value="Suchen">
        </form>


        <table class="rating">
            <thead>
            <tr>
                <td>Text</td>
                <td>Sterne</td>
                <td>Autor(in)</td>
            </tr>
            </thead>
            <tbody>
            <?php
        // foreach ($showRatings as $rating) {
        //     echo "<tr><td class='rating_text'>{$rating['text']}</td>
        //               <td class='rating_stars'>{$rating['stars']}</td>
        //               <td class='rating_autor'>{$rating['author']}</td>
        //           </tr>";
        // }

        for ($i = 0; $i < count($ratings); $i++) {
            if ($search_value == "") {
                    echo "<tr><td class='rating_text'>{$ratings[$i]['text']}</td>
                              <td class='rating_stars'>{$ratings[$i]['stars']}</td>
                              <td class='rating_autor'>{$ratings[$i]['author']}</td>
                          </tr>";
            } else {
                echo "<tr>\n";

                if (strpos($ratings[$i]['text'], $search_value) !== false) {
                    echo "<td class='rating_text'>{$ratings[$i]['text']}</td>
                    <td class='rating_stars'>{$ratings[$i]['stars']}</td>
                    <td class='rating_autor'>{$ratings[$i]['author']}</td>";
                }

                echo "</tr>";
            }
        }
        ?>
            </tbody>
        </table>
    </body>
</html>