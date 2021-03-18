/*
    Author:     Mark Schuurmans
    Date:       17-3-2021
    File:       scripts/test.js
*/

const submitBtn = document.querySelector(".submit");
const resultElement = document.querySelector(".result");
const selectFields = [...document.querySelectorAll("select")];

submitBtn.addEventListener("click", () => {
    resultElement.innerHTML = "Uitslag bereken...";
    let result = 0;
    for (const selectField of selectFields) {
        let { value } = selectField;
        value = parseInt(value);
        result = result + value;
    }
    resultElement.innerHTML = result;
});
