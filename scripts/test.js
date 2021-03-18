/*
    Author:     Mark Schuurmans
    Date:       17-3-2021
    File:       scripts/test.js
*/

const resultMessages = {
    perfect: "U verzorgd uw gebid uitstekend!",
    good: "U verzorgd uw gebid goed, alleen zijn er nog wel onderdelen waar u uw gedrag moet verbeteren",
    operational: "U verzorgd uw gebid matig, en wij raden u aan om advies te gaan vragen bij de tandarts, waarschijnlijk heeft u ook als last van gebitsproblemen.",
    bad: "U verzorgd uw gebid niet goed, daarom raden wij u aan om advies te gaan vragen bij de tandarts, waarschijnlijk bezoekt u geen tandarts en heb je ook al gebitsproblemen",
};

const classes = ["green", "orange", "red"];
const submitBtn = document.querySelector(".submit");
const resultElement = document.querySelector(".result");
const selectFields = [...document.querySelectorAll("select")];

submitBtn.addEventListener("click", () => {
    // Deze variable wordt telkens opnieuw aangemaakt wanneer de eventlistener gecalled wordt
    let result = 0;
    for (const selectField of selectFields) {
        let { value, selectedIndex, options } = selectField;
        // Maakt van de options variable een array
        const option = [...options];
        if (!selectedIndex) {
            selectField.classList.remove(...classes);
            selectField.classList.add(classes[0]);
        } else if (selectedIndex == 1 && option.length == 3) {
            selectField.classList.remove(...classes);
            selectField.classList.add(classes[1]);
        } else {
            selectField.classList.remove(...classes);
            selectField.classList.add(classes[2]);
        }

        result += parseInt(value);
    }

    if (result >= 80) return (resultElement.innerHTML = resultMessages.perfect);
    if (result >= 60) return (resultElement.innerHTML = resultMessages.good);
    if (result >= 20) return (resultElement.innerHTML = resultMessages.operational);
    return (resultElement.innerHTML = resultMessages.bad);
});
