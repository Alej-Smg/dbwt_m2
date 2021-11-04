<!DOCTYPE html>
<!--
    - Praktikum DBWT. Autoren:
    - Paundra, Daran, 3290902
    - Alejandro, Schmeing, 3203949
-->
<html lang="de">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Ihre E-Mensa</title>
</head>
<body>

    <?php include "./Gerichte.php"?>

    <header>
        <div id="Logo">
            <p>E-Mensa Logo</p>
        </div>
        <div id="menuzeile">
            <a href="#ankundigung">Ankündigung</a>
            <a href="#speisen">Speisen</a>
            <a href="#zahlen">Zahlen</a>
            <a href="#kontakt">Kontakt</a>
            <a href="#important">Wichtig für uns</a>
        </div>
    </header>
    <main>
        <div id="empty_left1">  
        </div>
        
        <!-- Mittlere Spalte für Content -->
        <div id="content">
            <img src="top-pic.jpg" alt="Erstes Bild">

            <h2 id="ankundigung">Bald gibt es Essen auch online ;)</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum reprehenderit enim iste hic fugiat magnam blanditiis nihil eveniet officiis ipsum laborum, minus voluptate dolore atque repudiandae voluptatibus ullam? Beatae praesentium saepe aut repudiandae repellendus, at, reprehenderit recusandae non veniam neque, enim aliquam excepturi dolorem commodi? Accusamus dignissimos dolor perspiciatis quisquam nemo ratione provident voluptates quos odio ducimus quam, itaque voluptate rem aliquid vero harum est molestiae. <br> Quis, labore. Quia sapiente quos perspiciatis unde non officiis. Officia commodi a architecto, maxime accusantium ut dolorem nisi rem dolore, soluta incidunt eveniet perspiciatis harum. Deleniti sit iure est quidem eveniet hic nostrum assumenda deserunt explicabo beatae! Deleniti ipsum esse quisquam cum inventore autem facilis veniam nihil vero ab id amet totam in ratione cupiditate, placeat sed temporibus dolorem quibusdam! Impedit fuga natus, quae mollitia velit accusamus eos dolorum modi maxime deserunt illum sit cupiditate architecto et ullam rem quos recusandae sed quisquam cum!</p>
            
            <h2 id="speisen">Köstlichkeiten, die Sie erwarten</h2>
            <?php
            echo "<table>";
            for ($i = -1; $i < count($gerichte); $i++) {
                if ($i == -1) {
                    echo "<tr id='thead'>\n
                    <th></th>\n
                    <th>Preis intern</th>\n
                    <th>Preis extern</th>\n
                </tr>\n";
                } else {
                    echo "<tr>
                        <td>". $gerichte[$i][0] ."</td>
                        <td class='Preis'>". $gerichte[$i][1] ."</td>
                        <td class='Preis'>". $gerichte[$i][2] ."</td>
                    </tr>";
                }
            }
            echo "</table>";

            for ($i = 0; $i < count($gerichte); $i++) {
                echo "<img src='". $gerichte[$i][3] ."' alt=''>";
            }
            ?>

            <!-- <img src="./SpinatrisottoMitSamosateigecken.jpg" alt="Bild für Spinatrisotto"> -->

            <h2 id="zahlen">E-Mensa in Zahlen</h2>
            <div id="grid2">
                <div>
                    <p class="mensaZahlen">X Besuche</p>
                </div>
                <div>
                    <p class="mensaZahlen">Y Anmeldungen zum Newsletter</p>
                </div>
                <div>
                    <p class="mensaZahlen">Z Speisen</p>
                </div>
            </div>

            <h2 id="kontakt">Interesse geweckt? Wir informieren Sie!</h2>
            <div>
                <form action="none" method="post">
                    <div id="formGrid">
                        <div>
                            <label for="vorname">Ihr Name:</label><br>
                            <input type="text" placeholder="Vorname" id="vorname">
                        </div>
                        <div>
                            <label for="email">Ihre E-Mail:</label><br>
                            <input type="email" id="email">
                        </div>
                        <div>
                            <label for="newsSprache">Newsletter bitte in:</label><br>
                            <select name="newsSprache" id="newsSprache">
                                <option value="de">Deutsch</option>
                                <option value="en">Englisch</option>
                                <option value="es">Spanisch</option>
                                <option value="nl">Niederländisch</option>
                            </select>
                        </div>
                    </div>
                    <input type="checkbox" id="dsgvo">
                    <label for="dsgvo">Den Datenschutzbestimmungen stimme ich zu</label>
                    <input type="submit" name="submit" id="formSubmit" value="Zum Newsletter anmelden" disabled>
                </form>
            </div>
            
            <h2 id="important">Das ist uns wichtig</h2>
            <div id="prinzipien">
                <ul>
                    <li>Beste frische saisonaler Zutaten</li>
                    <li>Ausgewiesene abwechslungsreiche Gerichte</li>
                    <li>Sauberkeit</li>
                </ul>
            </div>
            
            <h2 id="aufwiedersehen"> Wir freuen uns auf Ihren Besuch!</h2>
        </div>

        <div id="empty_right1"></div>
    </main>
    <footer>
        <div id="empty_left2">

        </div>
		<div id="footerListe">
            <div id="copyrightDiv">
                <p id="copyright">(c) E-Mensa GmbH</p></div>
            <div class="footerBorder" id="myNameDiv">
                <p id="myName">Alejandro Schmeing</p></div>
            <div class="footerBorder" id="impressumDiv">
                <p id="impressum"><a href="Impressum.html">Impressum</a></p></div>
        </div>   
        <div id="empty_right2">

        </div>     
    </footer>
</body>
</html>