<!-- 
    Author:     Mark Schuurmans
    Date:       17-3-2021
    File:       index.php
-->
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="styles/style.css" />
        <link rel="icon" href="images/favicon.png">
        <title>TANDARTS DEN BOSCH | HOME</title>
    </head>
    <body>
        <?php 
            include "includes/menu.php";
        ?>
        <main>
            <section class="intro">
                <div>
                    <h2>TANDARTS DEN BOSCH</h2>
                    <p>Uw tandarts in Den Bosch e.o. voor reguliere tandheelkunde en implantaten</p>
                    <p>Betrouwbaar. Bereikbaar. Betaalbaar.</p>
                    <a class="signup--btn" href="">INSCHRIJVEN</a>
                    <a href="">AFSPRAAK MAKEN</a>
                </div>
            </section>
            <section class="test">
                <div>
                    <h2>GRATIS POETSTEST</h2>
                    <p>Doe vandaag nog de poetstest en krijg direct je uitslag!</p>
                    <a href="pages/enquete.php">Doe de test!</a>
                </div>
            </section>
            <section>
                <div class="information">
                    <h2>TANDARTS DEN BOSCH NEEMT NOG PATIËNTEN AAN!</h2>
                    <p>U kunt zich eenvoudig online inschrijven bij onze praktijk. Uiteraard staan we u ook graag telefonisch te woord.</p>
                </div>
                <div class="intro__signup--section">
                    <div>
                        <img src="images/document_icon.png" alt="INSCHRIJVEN" />
                        <h3>NIEUWE PATIENT</h3>
                        <p>U bent van harte welkom, schrijf u direct online in!</p>
                        <a href="">INSCHRIJVEN</a>
                    </div>
                    <div>
                        <img src="images/afspraak_icon.jpg" alt="AFSPRAAK MAKEN" />
                        <h3>AFSPRAAK MAKEN</h3>
                        <p>Maak eenvoudig online controle afspraken!</p>
                        <a href="">AFSPRAAK MAKEN</a>
                    </div>
                    <div>
                        <img src="images/cellphone_icon.jpg" alt="BEL ONS" />
                        <h3>​TELEFONISCH CONTACT</h3>
                        <p>Liever bellen?</p>
                        <a href="">BEL ONS</a>
                    </div>
                </div>
                <div class="intro__background--section">
                    <div>
                        <p>EEN BREED SCALA AAN TANDHEELKUNDIGE BEHANDELINGEN</p>
                        <a href="">MEER INFO</a>
                    </div>
                </div>
            </section>
        </main>
        <?php 
            include "includes/footer.php"
        ?>
    </body>
</html>
