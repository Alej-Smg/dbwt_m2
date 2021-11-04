<?php
/**
 * Praktikum DBWT. Autoren:
 * Paundra, Daran, 3290902
 * Alejandro, Schmeing, 3203949
 */
$file = fopen('./accesslog.txt', 'a');
if (!$file) {
    die('Öffnen fehlgeschlagen');
}
$line =
    date(DATE_RFC2822).            //das aktuelle Datum und Uhrzeit,
    "\nBrowser Agent : " .$_SERVER['HTTP_USER_AGENT'].    //Informationen über den verwendeten Webbrowser
    "\nClient IP : " .$_SERVER['REMOTE_ADDR'] . "\n\n";     //IP des Clients aufgeführt
fwrite($file, $line,);
fclose($file);
?>


<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8"/>
    <title>Include</title>
</head>

<body>
</body>
</html>


