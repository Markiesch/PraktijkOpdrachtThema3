/*
    Author:     Mark Schuurmans
    Date:       17-3-2021
    File:       scripts/test.js
*/

const resultMessages = {
    perfect: "<span>U verzorgt uw gebid uitstekend!</span>",
    good: "<span>U verzorgt uw gebid goed, er zijn echter nog wel specifieke onderdelen waar u uw poetsgedrag kunt verbeteren.</span>",
    operational: "<span class='orange'>U verzorgt uw gebid matig, daarom raden wij u aan om advies te vragen bij een tandarts. Waarschijnlijk heeft u ook al last van gebitsproblemen.</span>",
    bad:
        "<span class='red'>U verzorgt uw gebid niet goed, daarom raden wij u aan om advies te vragen bij een tandarts. Waarschijnlijk bezoekt u nog geen tandarts en heeft u ook al last van gebitsproblemen</span>",
};

const classes = ["green", "orange", "red"];

// Aanspreken van HTML elementen
const submitBtn = document.querySelector(".submit");
const resultElement = document.querySelector(".result");
const selectFields = [...document.querySelectorAll("select")];
const printBtn = document.querySelector(".print--button");

const attemptsBtn = document.querySelector(".clear--button");
const attemptsContainer = document.querySelector(".earlierAttempts--container");
const attemptsElement = document.querySelector(".earlierAttempts");
const attempts = localStorage.getItem("results");
if (attempts) {
    attemptsElement.innerText = `${attempts}`;
    attemptsContainer.style.height = "initial";
    // Nodig om de shadow ook nog volledig te laten zien
    attemptsContainer.style.overflow = "initial";
}

submitBtn.addEventListener("click", () => {
    // Verijderd de focus wanneer iemand op het element clicked
    submitBtn.blur();
    // Deze variable wordt telkens opnieuw aangemaakt wanneer de eventlistener gecalled wordt
    let result = 0;
    for (const selectField of selectFields) {
        // Destructering van het selectField object
        const { value, selectedIndex, options } = selectField;
        // Maakt van de options variable een array
        const parent = selectField.parentElement;
        // If statement als selectedIndex false is, dit zal dus runnen als selectedIndex 0 is.
        if (!selectedIndex) {
            // Verwijderd alle classes en add alleen de nodige aangezien classes een array is moet deze naar een string omgezet worden dit wordt gedaan
            // met behulp van de spread operator (werkt hetzelfde als class.join(" "))
            parent.classList.remove(...classes);
            parent.classList.add(classes[0]);
        } else if (selectedIndex == 1 && [...options].length == 3) {
            parent.classList.remove(...classes);
            parent.classList.add(classes[1]);
        } else {
            parent.classList.remove(...classes);
            parent.classList.add(classes[2]);
        }

        result += parseInt(value);
    }

    let message;

    if (result < 20) message = resultMessages.bad;
    if (result >= 20) message = resultMessages.operational;
    if (result >= 60) message = resultMessages.good;
    if (result >= 80) message = resultMessages.perfect;

    //                                                                Voegt alleen "en" toe als result 1 is
    resultElement.innerHTML = `${message}Uw heeft ${result} punt${result == 1 ? "" : "en"} van de 90 punten gescoord.`;

    // Localstorage handling
    let newAttempts;
    if (attempts) {
        newAttempts = `${attempts}\n${result} punt${result == 1 ? "" : "en"}`;
    } else {
        newAttempts = `${result} punt${result == 1 ? "" : "en"}`;
    }
    localStorage.setItem("results", newAttempts);
});

printBtn.addEventListener("click", () => {
    // Verijderd de focus wanneer iemand op het element clicked
    printBtn.blur();
    // Popped een afdruk schrem op
    window.print();
});

attemptsBtn.addEventListener("click", () => {
    // Verijderd de focus wanneer iemand op het element clicked
    attemptsBtn.blur();
    // Verwijderd alle data uit de localstorage
    localStorage.clear();
    // Reload de webpagina
    location.reload();
});
