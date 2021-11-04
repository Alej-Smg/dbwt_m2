<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"/>
    <title>Include</title>
</head>
<body>
<table class="addieren" >
    <thead>
    <tr>
        <td>Var a</td>
        <td>Var b</td>
        <td>Summe</td>
    </tr>
    </thead>
    <tbody>
    <?php
    include 'm2_4a_standardparameter.php';
    $second =0;
    for($first = 1; $first < 40; $first+=2){

        echo "<tr><td class='erste_zahl'>$first</td>
              <td class='zweite_zahl'>$second</td>
              <td class='sum'>", addieren($first, $second), "</td>
          </tr>";
        $second+=1;
    }
    ?>
    </tbody>
</table>
</body>
</html>

