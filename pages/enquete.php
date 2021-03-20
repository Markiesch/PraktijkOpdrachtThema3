<!-- 
    Author:     Mark Schuurmans
    Date:       17-3-2021
    File:       pages/test.php
-->
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../styles/style.css" />
        <link rel="icon" href="../images/favicon.png">
        <title>TANDARTS DEN BOSCH | TEST</title>

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
                <div class="earlierAttempts--container">
                    <p>Eerdere Uitslagen:</p>
                    <p class="earlierAttempts"></p>
                    <button class="clear--button">Clear</button>
                </div>
                <form>
                    <label for="aantalKeerPoetsen">Hoe vaak poets u uw tanden per dag?</label>
                    <div>
                        <select name="aantalKeerPoetsen">
                            <option value="10">2 of vaker per dag</option>
                            <option value="5">1 keer per dag</option>
                            <option value="-10">Niet</option>
                        </select>
                    </div>
                    <label for="gebruikNaEten">Wat gebruikt u na iedere maaltijd of minimaal een keer per dag?</label>
                    <div>
                        <select name="gebruikNaEten">
                            <option value="10">Rager</option>
                            <option value="5">Tandenstoker</option>
                            <option value="-5">niks</option>
                        </select>  
                    </div>
                    <label for="aantalBezoekMondhygiensiste">Gaat u ieder halfjaar naar een mondhygieniste om uw tandplak te laten verwijderen?</label>
                    <div>
                        <select name="aantalBezoekMondhygiensiste">
                            <option value="10">Ja</option>
                            <option value="5">Minder dan 1x per jaar</option>
                            <option value="0">Nee</option>
                        </select>
                    </div>
                    <label for="elektrischeTandenborstel">Gebruikt u een electrische tandenborstel?</label>
                    <div>
                        <select name="elektrischeTandenborstel">
                            <option value="10">Ja</option>
                            <option value="5">Nee</option>
                        </select>
                    </div>
                    <label for="fluoride">Gebruikt u een tandpasta met fluoride?</label>
                    <div>
                        <select name="fluoride">
                            <option value="10">Ja</option>
                            <option value="5">Nee</option>
                        </select>
                    </div>
                    <label for="stinkendeAdem">Heeft u wel eens last van een stinkende adem?</label>
                    <div>
                        <select name="stinkendeAdem">
                            <option value="10">Nee</option>
                            <option value="0">Ja</option>
                        </select>
                    </div>
                    <label for="tongschraper">Gebruikt u wel eens een tongschraper?</label>
                    <div>
                        <select name="tongschraper">
                            <option value="10">Nee</option>
                            <option value="5">Ja</option>
                        </select>
                    </div>
                    <label for="bloedendTandvlees">Heeft u weleens last van bloedend tandvlees?</label>
                    <div>
                        <select name="bloedendTandvlees">
                            <option value="10">Nee</option>
                            <option value="-10">Ja</option>
                        </select>
                    </div>
                    <label for="tweeMinutenEnGrondig">Poetst u minimaal 2 minuten en werkt u alles grondig af?</label>
                    <div>
                        <select name="tweeMinutenEnGrondig">
                            <option value="10">Ja</option>
                            <option value="5">Nee</option>
                        </select>
                    </div>
                </form>
                <div class="form__button--container">
                    <div>
                        <button class="submit">Zie uw uitslag!</button>
                        <p class="result"></p>
                    </div>
                    <div>
                        <button class="print--button">Print</button>
                    </div>
                </div>
            </section>
        </main>
        <?php
        include "../includes/footer.php"
        ?>
    </body>
</html>