<?php
/**
 * Praktikum DBWT. Autoren:
 * Paundra, Daran, 3290902
 * Alejandro, Schmeing, 3203949
 */

$result = "";

class addform
{
    var $a;
    var $b;

    function opcheck($operator)
    {
        switch ($operator) {
            case 'addieren':
                return $this->a + $this->b;
                break;

            case 'multiplizieren':
                return $this->a * $this->b;
                break;

        }
    }

    function getresult($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        return $this->opcheck($c);
    }
}

$cal = new addform();
if (isset($_POST['submit'])) {
    $result = $cal->getresult($_POST['z1'], $_POST['z2'], $_POST['submit']);
}

?>
<!DOCTYPE html>

<html lang="de">
 <head>
    <meta charset="UTF-8">
    <title>m2_4c_addform</title>
     <style>
         #buttons {
             display: grid;
         }
     </style>
 </head>
 <body>
    <form method="post" >
        <fieldset style="width: 0px;">
            <legend>addform</legend>
                <div
                    <div
                        <label for="z1">Variable A<sup>*</sup></label>    <br>
                        <input type="text" name="z1" size="20" placeholder="Variable A eingeben" required> <br>
                    </div>
                    <div>
                        <label for="z2">Variable B<sup>*</sup></label>    <br>
                        <input type="text"  name="z2" size="20" placeholder="Variable B eingeben" required> <br>
                    </div>
                </div>
                <div id="buttons">
                    <div>
                        <input type="submit" name="submit" value="addieren">
                        <input type="submit" name="submit" value="multiplizieren">
                    </div>
                </div>
            <div> <strong><?php echo $result; ?><strong></div>

                </p>
        </fieldset>
    </form>
 </body>
</html>