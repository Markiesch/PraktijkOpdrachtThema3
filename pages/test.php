<!-- 
    Author:     Mark Schuurmans
    Date:       17-3-2021
    File:       index.php
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/style.css" />
    <title></title>
    <script src="../scripts/test.js" defer></script>
</head>

<body>
    <?php
    include "../includes/menu.php";
    ?>
    <main>
        <section class="intro intro--form">
            <div>
                <h2>ONLINE TEST BIJ TANDARTS DEN BOSCH</h2>
                <p>Tandarts Den Bosch neemt nog patiënten aan</p>
            </div>
        </section>
        <section class="form">
            <form action="" method="post">
                <label for="aantalKeerPoetsen">Hoe vaak poets je per dag?</label>
                <select name="aantalKeerPoetsen">
                    <option value="10">2 of vaker per dag</option>
                    <option value="5">1 keer per dag</option>
                    <option value="-10">Niet</option>
                </select>

                <label for="gebruikNaEten">Gebruik je na iedere maaltijd of minimaal 1 keer per dag?</label>
                <select name="gebruikNaEten">
                    <option value="10">Rager</option>
                    <option value="5">Tandenstoker</option>
                    <option value="-5">niks</option>
                </select>

                <label for="aantalBezoekMondhygiensiste">Ga je ieder halfjaar naar een mondhygieniste om je tandplak te laten verwijderen?</label>
                <select name="aantalBezoekMondhygiensiste">
                    <option value="10">Ja</option>
                    <option value="5">Minder dan 1x per jaar</option>
                    <option value="0">Nee</option>
                </select>

                <label for="elektrischeTandenborstel">Gebruik je een electrische tandenborstel?</label>
                <select name="elektrischeTandenborstel">
                    <option value="10">Ja</option>
                    <option value="5">Nee</option>
                </select>

                <label for="fluoride">Gebruik je een tandpasta met fluoride?</label>
                <select name="fluoride">
                    <option value="10">Ja</option>
                    <option value="5">Nee</option>
                </select>

                <label for="stinkendeAdem">Heb je wel eens last van een stinkende adem?</label>
                <select name="stinkendeAdem" id="6">
                    <option value="10">Nee</option>
                    <option value="0">Ja</option>
                </select>

                <label for="tongschraper">Gebruik je wel eens een tongschraper?</label>
                <select name="tongschraper" id="7">
                    <option value="10">Nee</option>
                    <option value="5">Ja</option>
                </select>

                <label for="bloedendTandvlees">Heb je weleens last van bloedend tandvlees?</label>
                <select name="bloedendTandvlees" id="8">
                    <option value="10">Nee</option>
                    <option value="-10">Ja</option>
                </select>

                <label for="tweeMinutenEnGrondig">Poets je minimaal 2 minuten en werk je alles grondig af?</label>
                <select name="tweeMinutenEnGrondig" id="9">
                    <option value="10">Ja</option>
                    <option value="5">Nee</option>
                </select>
            </form>
            <button class="submit">Zie je uitslag!</button>
            <h2 class="result"></h2>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__container">
            <div class="footer--intro">
                <p>WE ZIEN U GRAAG SNEL IN ONZE PRAKTIJK!</p>
            </div>
            <div class="footer__body--container">
                <div class="footer__links--container">
                    <div>
                        <h3>Tandarts Den Bosch</h3>
                        <ul>
                            <li><a href="">Over ons</a></li>
                            <li><a href="">Inschrijven</a></li>
                            <li><a href="">Afspraak maken</a></li>
                            <li><a href="">Vacatures</a></li>
                            <li><a href="">Algemene voorwaarden</a></li>
                            <li><a href="">Privacy beleid</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3>Tandarts Den Bosch</h3>
                        <ul>
                            <li><a href="">Over ons</a></li>
                            <li><a href="">Inschrijven</a></li>
                            <li><a href="">Afspraak maken</a></li>
                            <li><a href="">Vacatures</a></li>
                            <li><a href="">Algemene voorwaarden</a></li>
                            <li><a href="">Privacy beleid</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div></div>
            </div>
            <p>© Tandarts Den Bosch 2020</p>
            <p>​De beste tandarts van Den Bosch e.o. met hoge kwaliteit voor een betaalbaar tarief!</p>
        </div>
    </footer>
</body>

</html>